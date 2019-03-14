
<?php

require_once 'model/database.php';
require_once 'model/user_db.php';
require_once 'model/user.php';
require_once 'model/dailyRoutine.php';

$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();


$action = filter_input(INPUT_POST, 'action');
if ($action === null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === null) {
        $action = 'viewLogin';
    }
}

switch ($action) {
    case 'registration':


        if (!isset($uName)) {
            $uName = '';
        }


        if (!isset($password)) {
            $password = '';
        }

        if (!isset($error_message)) {
            $error_message = [];
            $error_message['uName'] = '';
            $error_message['uNameExists'] = '';
            $error_message['password'] = '';
            $error_message['pwMessage'] = '';
            $error_message['requirements'] = '';
            $error_message['image'] = '';
        }

        include 'view/registration.php';
        die();
        break;
    case 'register':
        // get the data from the registration form
        $uName = filter_input(INPUT_POST, 'uName');
        $password = filter_input(INPUT_POST, 'password');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $uImage = filter_input(INPUT_POST, 'image');
        $error_message = [];
        $error_message['uName'] = '';
        $error_message['password'] = '';
        $error_message['pwMessage'] = '';
        $error_message['requirements'] = '';
        $error_message['image'] = '';
        $file_name = '';
       

        //Create Regex patterns
        $namePattern = '/^[a-zA-Z]/';
        // Only alphanumeric for the second part so that there aren't any conflicts 
        // with special characters when we persist for authentication
        $uNamePattern = '/^[a-zA-Z][a-zA-Z0-9]{3,29}$/';
        $pwLowerPattern = '/(?=.*[[:lower:]])/';
        $pwUpperPattern = '/(?=.*[[:upper:]])/';
        $pwDigitPattern = '/(?=.*[[:digit:]])/';
        $pwPunctPattern = '/(?=.*[[:punct:]])/';
        $pwLengthPattern = '/[[:graph:]]{10,}$/'; //Don't want whitespace character

// validate username
        $checkUserName = user_db::get_user_by_username($uName);
        $uNameValid = preg_match($uNamePattern, $uName);

        if ($uName === null || $uName === "") {
            $error_message['uName'] = 'You must enter a user name.';
        } else if ($uNameValid === FALSE || $uNameValid === 0) {
            $error_message['uName'] = 'User name must start with a letter and contain between 4 and 30 alphanumeric characters.';
        } else if ($checkUserName !== FALSE) {
            $error_message['uName'] = 'That User Name Is Taken.';
        } else {
            setcookie('userName', $uName);
        }

// validate image
        if ($_FILES['image']['name'] != '') {

            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $temp = $_FILES['image']['name'];
            $temp = explode('.', $temp);
            $temp = end($temp);
            $file_ext = strtolower($temp);

            $extensions = array("jpeg", "jpg", "png", "gif");

            if (in_array($file_ext, $extensions) === false) {
                $error_message['image'] = "file extension not in whitelist: " . join(',', $extensions);
            }elseif ($file_size === 0) {
                
                $error_message['image'] = "Your file needs to be smaller than 2M";
                
            } else {
                
                $file_name = $uName . '.' . $file_ext;
                move_uploaded_file($file_tmp, "images/".$file_name);
            }
        }

// validate password
        $pwRequirements = 0;
        $pwLowerPresent = preg_match($pwLowerPattern, $password);
        $pwUpperPresent = preg_match($pwUpperPattern, $password);
        $pwDigitPresent = preg_match($pwDigitPattern, $password);
        $pwPunctPresent = preg_match($pwPunctPattern, $password);
        $pwLengthValid = preg_match($pwLengthPattern, $password);

        if ($pwLowerPresent !== FALSE && $pwUpperPresent !== FALSE && $pwDigitPresent !== FALSE && $pwPunctPresent !== FALSE) {
            $pwRequirements = $pwLowerPresent + $pwUpperPresent + $pwDigitPresent + $pwPunctPresent;
        } else {
            $pwRequirements = 0;
        }

        if ($password === null || $password === "" || $confirmPassword === null || $confirmPassword === "") {
            if ($password === null || $password === "") {
                $error_message['password'] .= 'You must enter a password.';
            }
            if ($confirmPassword === null || $confirmPassword === "") {
                $error_message['password'] .= ' You must confirm your password.';
            }
        } else if ($pwLengthValid === FALSE || $pwLengthValid === 0 || $pwRequirements < 3) {
            $error_message['pwMessage'] = 'Your password must be at least 10 characters. And include:';
            if ($pwLowerPresent === FALSE || $pwLowerPresent === 0) {
                $error_message['requirements'] .= '<li>1 lowercase character</li>';
            }
            if ($pwUpperPresent === FALSE || $pwUpperPresent === 0) {
                $error_message['requirements'] .= '<li>1 uppercase character</li>';
            }
            if ($pwDigitPresent === FALSE || $pwDigitPresent === 0) {
                $error_message['requirements'] .= '<li>1 number</li>';
            }
            if ($pwPunctPresent === FALSE || $pwPunctPresent === 0) {
                $error_message['requirements'] .= '<li>1 punctuation character</li>';
            }
        } else if ($password !== $confirmPassword) {
            $error_message['password'] = 'Your password and confirmation must match.';
        }

// if an error message exists, go to the index page
        if ($error_message['image'] != '' || $error_message['uName'] != '' || $error_message['password'] != '' || $error_message['pwMessage'] != '') {
            include 'view/registration.php';
            exit();
        } else {

            $hashedPW = password_hash($password, PASSWORD_DEFAULT);

            if ($file_name != '') {
                user_db::add_user_with_image( $uName, $hashedPW, $file_name);
            } else {
                user_db::add_user( $uName, $hashedPW);
            }
            
            $currentUser = user_db::validate_user_login($uName);
            $_SESSION['currentUser'] = $theUser;
                $_SESSION['workOuts'] = user_db::get_workout_wt();
                $_SESSION['workOutsStren'] = user_db::get_workout_stren();
                $_SESSION['workOutsTab'] = user_db::get_workout_tab();
            include 'view/profile.php';
        }

        die();
        break;


    case 'changeInfo':
        $currentUser = $_SESSION['currentUser'];
        $users = user_db::get_user_by_username($currentUser->getUName());
        $error_message = [];
        $error_message['password'] = '';
        $error_message['pwMessage'] = '';
        $error_message['requirements'] = '';
        $error_message['image'] = '';
        if (!isset($password)) {
            $password = '';
        }
        include 'view/changeInfo.php';
        die();
        break;

    case 'commitChange':
        $password = filter_input(INPUT_POST, 'password');
        $confirmPassword = filter_input(INPUT_POST, 'confirmPassword');
        $uImage = filter_input(INPUT_POST, 'image');
        
        $hashedPW = '';
        $error_message = [];
        $error_message['password'] = '';
        $error_message['pwMessage'] = '';
        $error_message['requirements'] = '';
        $error_message['image'] = '';
        $file_name = $_SESSION['currentUser']->getImage();
        $imageChanged = false;
        
        if (!isset($password)) {
            $password = '';
        }


//Create Regex patterns
        $namePattern = '/^[a-zA-Z]/';
// Only alphanumeric for the second part so that there aren't any conflicts 
// with special characters when we persist for authentication
        $uNamePattern = '/^[a-zA-Z][a-zA-Z0-9]{3,29}$/';
        $pwLowerPattern = '/(?=.*[[:lower:]])/';
        $pwUpperPattern = '/(?=.*[[:upper:]])/';
        $pwDigitPattern = '/(?=.*[[:digit:]])/';
        $pwPunctPattern = '/(?=.*[[:punct:]])/';
        $pwLengthPattern = '/[[:graph:]]{10,}$/'; //Don't want whitespace character

// validate image
        if ($_FILES['image']['name'] != '') {

            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $temp = $_FILES['image']['name'];
            $temp = explode('.', $temp);
            $temp = end($temp);
            $file_ext = strtolower($temp);
            

            $extensions = array("jpeg", "jpg", "png", "gif");

            if (in_array($file_ext, $extensions) === false) {
                $error_message['image'] = "file extension not in whitelist: " . join(',', $extensions);
            }elseif ($file_size === 0) {
                
                $error_message['image'] = "Your file needs to be smaller than 2M";
                
            } else {
                $file_name = $_SESSION['currentUser']->getUName() . '.' . $file_ext;
                move_uploaded_file($file_tmp, "images/".$file_name);
                $imageChanged = TRUE;
            }
        }

// validate password
        $pwRequirements = 0;
        $pwLowerPresent = preg_match($pwLowerPattern, $password);
        $pwUpperPresent = preg_match($pwUpperPattern, $password);
        $pwDigitPresent = preg_match($pwDigitPattern, $password);
        $pwPunctPresent = preg_match($pwPunctPattern, $password);
        $pwLengthValid = preg_match($pwLengthPattern, $password);

        if ($pwLowerPresent !== FALSE && $pwUpperPresent !== FALSE && $pwDigitPresent !== FALSE && $pwPunctPresent !== FALSE) {
            $pwRequirements = $pwLowerPresent + $pwUpperPresent + $pwDigitPresent + $pwPunctPresent;
        } else {
            $pwRequirements = 0;
        }

        if (($password === null || $password === "") && ($confirmPassword === null || $confirmPassword === "")) {
            $hashedPW = $_SESSION['currentUser']->getPWord();
        } else {
            if ($pwLengthValid === FALSE || $pwLengthValid === 0 || $pwRequirements < 3) {
                $error_message['pwMessage'] = 'Your password must be at least 10 characters. And include:';
                if ($pwLowerPresent === FALSE || $pwLowerPresent === 0) {
                    $error_message['requirements'] .= '<li>1 lowercase character</li>';
                }
                if ($pwUpperPresent === FALSE || $pwUpperPresent === 0) {
                    $error_message['requirements'] .= '<li>1 uppercase character</li>';
                }
                if ($pwDigitPresent === FALSE || $pwDigitPresent === 0) {
                    $error_message['requirements'] .= '<li>1 number</li>';
                }
                if ($pwPunctPresent === FALSE || $pwPunctPresent === 0) {
                    $error_message['requirements'] .= '<li>1 punctuation character</li>';
                }
            } else if ($password !== $confirmPassword) {
                $error_message['password'] = 'Your password and confirmation must match.';
            }
        }

//to update DB
        if ($error_message['image']  || $error_message['password'] != '' || $error_message['pwMessage'] != '') {
            include 'view/changeInfo.php';
            exit();
        } else {
            if ($hashedPW === '') {
                $hashedPW = password_hash($password, PASSWORD_DEFAULT);
            }
            
            
            if($imageChanged != TRUE)
            {
            user_db::update_profile($_SESSION['currentUser']->getUName(),  $file_name, $hashedPW);
                $_SESSION['currentUser'] = user_db::get_user_by_id($_SESSION['currentUser']->getID());
            include 'view/profile.php';
            }  else {
                
                $file_name = "images/".$file_name ;
                user_db::update_profile($_SESSION['currentUser']->getUName(), $file_name, $hashedPW);
                $_SESSION['currentUser'] = user_db::get_user_by_id($_SESSION['currentUser']->getID());
            include 'view/profile.php';
                
            }
        }

        die();
        break;

   

    case 'viewLogin';
        
        
        $message = '';
        
        if (!isset($uName)) {
            $uName = '';
        }
        $pWord = '';
        if (!isset($error_message)) {
            $error_message = [];
            $error_message['uName'] = '';
            $error_message['pWord'] = '';
        }

        include 'view/login.php';
        die();
        break;

    case 'loggingIn';
       
        
        $uName = filter_input(INPUT_POST, 'uName');
        $pWord = filter_input(INPUT_POST, 'pWord');
        $checkUserName = user_db::get_user_by_username($uName);
        $message = '';

        if ($checkUserName != FALSE) {
            $theUser = user_db::validate_user_login($uName);

            if (password_verify($pWord, $theUser->getPWord())) {
                $_SESSION['currentUser'] = $theUser;
                $_SESSION['workOuts'] = user_db::get_workout_wt();
                $_SESSION['workOutsStren'] = user_db::get_workout_stren();
                $_SESSION['workOutsTab'] = user_db::get_workout_tab();
                include 'view/profile.php';
            } else {
                $error_message['uName'] = '';
                $error_message['pWord'] = '';
                include 'view/login.php';
            }
        } else {
            $error_message['uName'] = 'No User By That Name';
            $error_message['pWord'] = '';
            include 'view/login.php';
        }


        die();
        break;
        


//display the profile page for user
   case 'displayProfile':
        
        if(isset($_SESSION['currentUser']))
        {
            $users = user_db::get_user_by_username($_SESSION['currentUser']->getUName());
        $_SESSION['workOuts'] = user_db::get_workout_wt();
        $_SESSION['workOutsStren'] = user_db::get_workout_stren();
        $_SESSION['workOutsTab'] = user_db::get_workout_tab();
            
            
            include 'view/profile.php';
            die();
            break;
        }  
        else {
           
           $message = '';
            if (!isset($uName)) {
                $uName = '';
            }
            $pWord = '';
            if (!isset($error_message)) {
                $error_message = [];
                $error_message['uName'] = '';
                $error_message['pWord'] = '';
            }
            include 'view/login.php';
            die();
            break;
        }
    

    case 'logout':
        session_destroy();
        
        $message = "You have successfully logged out!";
        
        if (!isset($uName)) {
            $uName = '';
        }
        $pWord = '';
        if (!isset($error_message)) {
            $error_message = [];
            $error_message['uName'] = '';
            $error_message['pWord'] = '';
        }

        include 'view/login.php';
        die();
        break;
}
?>
