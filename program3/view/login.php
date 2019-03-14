
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
                        
                        

                    </ul>
                    <script type="text/javascript" src="js/nav.js"></script>
                </div>
                <div class="clear"></div>
            </div>
        </div>


        <div class="main">
            <div class="login_top">
                <div class="container">
                    <div class="col-md-6">
                        <div class="login-page">
                            <h4 class="title">New Recruit</h4>
                            <p>This application is developed to help you workout. Everyday your personal calendar will update with your work out letting you know exactly what needs to be done. No personal info is needed and this app is absolutely free.</p>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action" value="registration">
                                <div class="button1">
                                    <input type="submit" name="Submit" value="Create an Account">
                                </div>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title">
                                <h4 class="title">Registered Users</h4>
                                <div id="loginbox" class="loginbox">
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="loggingIn">
                                        <fieldset class="input">
                                            <p id="login-form-username">
                                                <label for="modlgn_username">UserName</label>
                                            <input type="text" name="uName" value="<?php echo htmlspecialchars($uName) ?>" class="inputbox" size="18" autocomplete="off"><div id="error"><?php echo htmlspecialchars($error_message['uName']); ?></div>
                                            </p>
                                            <p id="login-form-password">
                                                <label for="modlgn_passwd">Password</label>
                                                <input type="password" name="pWord" class="inputbox" size="18" autocomplete="off"><?php echo htmlspecialchars($error_message['pWord']); ?></div>
                                            </p>


                                            <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
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