<!DOCTYPE HTML>
<html>
    <head>
        <title>Register Paxton Fitness</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="js/jquery.min.js"></script>

    </head>
    <body>

        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom_left">

                </div>

                <div class="clear"></div>
            </div>
        </div>

        <div class="menu">
            <div class="container">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt=""/></a>
                </div>
                <div class="h_menu4">
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="nav">
                        
                        <li class="button1">
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="registration">
                                
                                    <input type="submit" name="Submit" value="Create an Account">
                                
                            </form>
                        </li>
                        <li class="button1">
                            <form action="index.php" method="Post">
                                <input type="hidden" name="action" value="displayProfile">
                                
                                <input type="submit" value="Profile Page"></br>
                               
                            </form>
                        </li>
                        <li class="button1">
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="logout">
                                
                                <input type="submit" value="Logout"><br>
                                
                            </form>
                        </li>
                        

                    </ul>
                    <script type="text/javascript" src="js/nav.js"></script>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- end menu -->



        <div class="main">
            <div class="register-grids">
                <div class="container">
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="register">
                        <div class="register-top-grid">
                            <h3>Registration</h3>
                            <div>
                                <span>UserName<label>*</label></span>
                                <input type="text" name="uName" value="<?php echo htmlspecialchars($uName) ?>">
                                <div id="error"><?php echo htmlspecialchars($error_message['uName']); ?></div>
                            </div>
                            <div>
                                <span>Password<label>*</label></span>
                                <input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
                                <div id="error" class="align-right">
                                    <?php echo htmlspecialchars($error_message['password']) ?>
                                    <?php echo htmlspecialchars($error_message['pwMessage']) ?>

                                    <!--http://php.net/manual/en/function.htmlspecialchars-decode.php -->
                                    <?php echo htmlspecialchars_decode($error_message['requirements'], ENT_NOQUOTES); ?>

                                </div>
                            </div>
                            <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" name="confirmPassword"></td>
                                <div id="error"><?php ?></div>
                            </div>
                            <div>
                                <td><label>Your Picture: </label></td>
                                <input type="file" name="image" /></td>
                                <div id="error"><?php echo htmlspecialchars($error_message['image']); ?></div>
                            </div>
                            <div class="clear"> </div>

                            <div class="clear"> </div>
                        </div>
                        <div class="clear"> </div>

                        <div class="clear"> </div>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom">

        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
<div class="copyright">
    <div class="container">
        <div class="copy">
            <p>Paxton Workouts</a></p>
        </div>

        <div class="clear"></div>
    </div>
</div>
</body>
</html>