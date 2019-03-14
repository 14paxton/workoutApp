<?php

class user_db {

    public static function select_all() {
        $db = Database::getDB();

        $queryUsers = 'SELECT * FROM user';
        $statement = $db->prepare($queryUsers);
        $statement->execute();
        $rows = $statement->fetchAll();
        $users = [];

        foreach ($rows as $value) {
            $users[$value['id']] = new user($value['id'], $value['uName'], $value['pWord'], $value['image']);
        }
        $statement->closeCursor();

        return $users;
    }

    public static function get_user_by_id($id) {
        $db = Database::getDB();
        $query = 'SELECT *
              FROM user
              WHERE ID= :id';

        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $value = $statement->fetch();
        
        $users = new user($value['id'], $value['uName'], $value['pWord'], $value['image']);
        
        $statement->closeCursor();

        return $users;
    }

    public static function get_user_by_username($uName) {
        $db = Database::getDB();
        $query = 'SELECT uName
              FROM user
              WHERE uName= :uName';

        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $result = $statement->fetch();

        $statement->closeCursor();
        
        return $result;
    }


    public static function add_user( $uName, $hashedPW) {
        $db = Database::getDB();
        $query = 'INSERT INTO user
                 ( uName, pWord)
              VALUES
                 ( :uName, :pWord)';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':uName', $uName);
            $statement->bindValue(':pWord', $hashedPW);
           
            $statement->execute();
            $statement->closeCursor();

            // Get the last product ID that was automatically generated
            $user_id = $db->lastInsertId();
            return $user_id;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }
    
    public static function add_user_with_image($uName, $hashedPW, $fileName) {
        
        $fileLocation = "images/". $fileName;
        $db = Database::getDB();
        $query = 'INSERT INTO user
                 ( uName, pWord, image)
              VALUES
                 ( :uName, :pWord, :fileLocation)';
        try {
            $statement = $db->prepare($query);
            
            $statement->bindValue(':uName', $uName);
            $statement->bindValue(':pWord', $hashedPW);
            $statement->bindValue(':fileLocation', $fileLocation);
           
            $statement->execute();
            $statement->closeCursor();
            $user_id = $db->lastInsertId();
            return $user_id;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }
    

    public static function update_user($ID, $uName, $uImage) {
        
        $fileLocation = "images/".$uImage;
        $db = Database::getDB();
        $query = $query = 'UPDATE user
              SET uName = :uName,
                  uImage = :uImage
                WHERE ID = :ID';
        try {
            $statement = $db->prepare($query);
            
            $statement->bindValue(':uName', $uName);
            $statement->bindValue(':image', $fileLocation);
            $statement->bindValue(':ID', $ID);
            $row_count = $statement->execute();
            $statement->closeCursor();
            return $row_count;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    public static function delete_by_ID($id) {
        $db = Database::getDB();
        $query = 'DELETE from user WHERE id= :id';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $row_count = $statement->execute();
            $statement->closeCursor();
            return $row_count;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }
    
    public static function validate_user_login($uName) {
        $db = Database::getDB();
        $query = 'SELECT *
              FROM user
              WHERE uName= :uName';

        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $value = $statement->fetch();
        
        $theUser = new user($value['id'], $value['uName'], $value['pWord'], $value['image']);

        $statement->closeCursor();

        return $theUser;
    }
    public static function update_profile($uName, $uImage, $pWord) {
        $db = Database::getDB();
        $query = 'UPDATE user
              SET 
                  image = :image,
                  pWord = :pWord
                WHERE uName = :uName';
        try {
            $statement = $db->prepare($query);
            
            $statement->bindValue(':uName', $uName);
            $statement->bindValue(':image', $uImage);
            $statement->bindValue(':pWord', $pWord);
            $statement->execute();
            $statement->closeCursor();
//            return $row_count;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            var_dump($e);
//            display_db_error($error_message);
        }
    }
    
    
    
    
    
    public static function get_workout_wt() {
        $db = Database::getDB();

        $queryUsers = 'SELECT * FROM dailyroutine where type = \'wt\'';
        $statement = $db->prepare($queryUsers);
        $statement->execute();
        $rows = $statement->fetchAll();
        $dailyRoutines = [];

        foreach ($rows as $value) {
            $dailyRoutines [$value['day']] = new dailyRoutine();
            
            $dailyRoutines [$value['day']]->setID($value['id']);
            $dailyRoutines [$value['day']]->settype($value['type']);
            $dailyRoutines [$value['day']]->setday($value['day']);
            $dailyRoutines [$value['day']]->setWo($value['wo']);
            $dailyRoutines [$value['day']]->setW2($value['w2']);
            $dailyRoutines [$value['day']]->setW3($value['w3']);
            $dailyRoutines [$value['day']]->setW4($value['w4']);
            $dailyRoutines [$value['day']]->setW5($value['w5']);
            $dailyRoutines [$value['day']]->setW6($value['w6']);
            $dailyRoutines [$value['day']]->setW7($value['w7']);
            $dailyRoutines [$value['day']]->setW8($value['w8']);
            
        }
        $statement->closeCursor();

        return $dailyRoutines;
    }
    
    
    public static function get_workout_stren() {
        $db = Database::getDB();

        $queryUsers = 'SELECT * FROM dailyroutine where type = \'stren\'';
        $statement = $db->prepare($queryUsers);
        $statement->execute();
        $rows = $statement->fetchAll();
        $dailyRoutines = [];

        foreach ($rows as $value) {
            $dailyRoutines [$value['day']] = new dailyRoutine();
            
            $dailyRoutines [$value['day']]->setID($value['id']);
            $dailyRoutines [$value['day']]->settype($value['type']);
            $dailyRoutines [$value['day']]->setday($value['day']);
            $dailyRoutines [$value['day']]->setWo($value['wo']);
            $dailyRoutines [$value['day']]->setW2($value['w2']);
            $dailyRoutines [$value['day']]->setW3($value['w3']);
            $dailyRoutines [$value['day']]->setW4($value['w4']);
            $dailyRoutines [$value['day']]->setW5($value['w5']);
            $dailyRoutines [$value['day']]->setW6($value['w6']);
            $dailyRoutines [$value['day']]->setW7($value['w7']);
            $dailyRoutines [$value['day']]->setW8($value['w8']);
            
        }
        $statement->closeCursor();

        return $dailyRoutines;
    }
    
    
    public static function get_workout_tab() {
        $db = Database::getDB();

        $queryUsers = 'SELECT * FROM dailyroutine where type = \'tab\'';
        $statement = $db->prepare($queryUsers);
        $statement->execute();
        $rows = $statement->fetchAll();
        $dailyRoutines = [];

        foreach ($rows as $value) {
            $dailyRoutines [$value['day']] = new dailyRoutine();
            
            $dailyRoutines [$value['day']]->setID($value['id']);
            $dailyRoutines [$value['day']]->settype($value['type']);
            $dailyRoutines [$value['day']]->setday($value['day']);
            $dailyRoutines [$value['day']]->setWo($value['wo']);
            $dailyRoutines [$value['day']]->setW2($value['w2']);
            $dailyRoutines [$value['day']]->setW3($value['w3']);
            $dailyRoutines [$value['day']]->setW4($value['w4']);
            $dailyRoutines [$value['day']]->setW5($value['w5']);
            $dailyRoutines [$value['day']]->setW6($value['w6']);
            $dailyRoutines [$value['day']]->setW7($value['w7']);
            $dailyRoutines [$value['day']]->setW8($value['w8']);
            
        }
        $statement->closeCursor();

        return $dailyRoutines;
    }
    
    
    

    
//put your code here
}
