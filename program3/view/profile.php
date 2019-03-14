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
            
            <div class="about_banner_img"></div>
            <div class="about_banner_img"></div>
            <div class="about_banner_wrap">
                <h1 class="m_11">Your Profile</h1>
            </div>

            <div class="about-wrapper">
                <div class="container">
                    <div class="row about-top">
                        <div class="col-md-5">
                            <img src="<?php echo htmlspecialchars($_SESSION['currentUser']->getImage()); ?>" class="img-responsive" alt=""/> 
                        </div>
                        <div class="col-md-7 about-left-text">
                            <h2><?php echo htmlspecialchars($_SESSION['currentUser']->getUName()); ?></h2>
                            

                        </div>
                        <div class="col-lg-4 " >
                            
                            <form action="index.php" method="post"  >
                                <input type="hidden" name="action" value="changeInfo">
                                <div class="button1"  >
                                    <input  type="submit" value="Update Info">
                                </div>
                                
                            </form>
                        </div>
                        
                        <div class="clear"></div>	
                    </div>
                </div>
            </div>

            <div class="border"> </div> 
            
            


            <div class="container">
                <div class="sap_tabs">	
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Weight Traing</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Light Workout</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Tabata</span></li>
                            <div class="clear"></div>
                        </ul>				  	 
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="facts">
                                    <ul class="tab-left">
                                        <table class="timetable">
                                            <thead>
                                                <tr>
                                                    <th></th>	<th>MONDAY</th>	<th>TUESDAY</th>	<th>WEDNESDAY</th>	<th>THURSDAY</th>	<th>FRIDAY</th>	<th>SATURDAY</th>	<th>SUNDAY</th>	</tr>
                                            </thead>
                                            <tbody><tr class="row_1 row_gray">
                                                    <td>
                                                        1
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getWo()) ?> </td><td><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getWo()) ?>  </td><tr class="row_2">
                                                    <td>
                                                        2
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW2()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW2()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW2()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW2()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW2()) ?>   </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW2()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW2()) ?>  </td><tr class="row_3 row_gray">
                                                    <td>
                                                        3
                                                    </td><td><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW3()) ?>  </td><tr class="row_4">
                                                    <td>
                                                        4
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW4()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW4()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW4()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW4()) ?>  </td><td>  <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW4()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW4()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW4()) ?>  </td><tr class="row_5 row_gray">
                                                    <td>
                                                        5
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW5()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW5()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW5()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW5()) ?>  </td><tr class="row_6">
                                                    <td>
                                                        6
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW6()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW6()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW6()) ?>  </td><td>  <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW6()) ?> </td><tr class="row_7 row_gray">
                                                    <td>
                                                        7
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW7()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW7()) ?> </td><td><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW7()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW7()) ?>  </td><tr class="row_8">
                                                    <td>
                                                        8
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW8()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW8()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW8()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW8()) ?>  </td>

                                            </tbody>
                                        </table>
                                        <div class="timetable_small">
                                            <ul class="items_list"><h3>Monday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["mon"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Tuesday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["tue"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Wednesday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["wed"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Thrusday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["thu"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Friday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["fri"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Saturday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sat"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Sunday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOuts']["sun"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                        </div>
                                    </ul>	
                                </div>
                            </div>	
                            <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <ul class="tab-left">
                                        <table class="timetable">
                                            <thead>
                                                <tr>
                                                    <th></th>	<th>MONDAY</th>	<th>TUESDAY</th>	<th>WEDNESDAY</th>	<th>THURSDAY</th>	<th>FRIDAY</th>	<th>SATURDAY</th>	<th>SUNDAY</th>	</tr>
                                            </thead>
                                            <tbody><tr class="row_1 row_gray">
                                                    <td>
                                                        1
                                                     </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getWo()) ?> </td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getWo()) ?>  </td><tr class="row_2">
                                                    <td>
                                                        2
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW2()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW2()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW2()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW2()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW2()) ?>   </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW2()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW2()) ?>  </td><tr class="row_3 row_gray">
                                                    <td>
                                                        3
                                                    </td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW3()) ?>  </td><tr class="row_4">
                                                    <td>
                                                        4
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW4()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW4()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW4()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW4()) ?>  </td><td>  <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW4()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW4()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW4()) ?>  </td><tr class="row_5 row_gray">
                                                    <td>
                                                        5
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW5()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW5()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW5()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW5()) ?>  </td><tr class="row_6">
                                                    <td>
                                                        6
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW6()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW6()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW6()) ?>  </td><td>  <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW6()) ?> </td><tr class="row_7 row_gray">
                                                    <td>
                                                        7
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW7()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW7()) ?> </td><td><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW7()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW7()) ?>  </td><tr class="row_8">
                                                    <td>
                                                        8
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW8()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW8()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW8()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW8()) ?>  </td>

                                            </tbody>
                                        </table>
                                        <div class="timetable_small">
                                            <ul class="items_list"><h3>Monday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["mon"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Tuesday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["tue"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Wednesday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["wed"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Thrusday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["thu"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Friday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["fri"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Saturday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sat"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Sunday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsStren']["sun"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                        </div>
                                    </ul>	
                                </div>
                            </div>				        					 
                            <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="facts">
                                    <ul class="tab-left">
                                        <table class="timetable">
                                            <thead>
                                                <tr>
                                                    <th></th>	<th>MONDAY</th>	<th>TUESDAY</th>	<th>WEDNESDAY</th>	<th>THURSDAY</th>	<th>FRIDAY</th>	<th>SATURDAY</th>	<th>SUNDAY</th>	</tr>
                                            </thead>
                                            <tbody><tr class="row_1 row_gray">
                                                    <td>
                                                        1
                                                     </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getWo()) ?> </td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getWo()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getWo()) ?>  </td><tr class="row_2">
                                                    <td>
                                                        2
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW2()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW2()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW2()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW2()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW2()) ?>   </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW2()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW2()) ?>  </td><tr class="row_3 row_gray">
                                                    <td>
                                                        3
                                                    </td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW3()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW3()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW3()) ?>  </td><tr class="row_4">
                                                    <td>
                                                        4
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW4()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW4()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW4()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW4()) ?>  </td><td>  <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW4()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW4()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW4()) ?>  </td><tr class="row_5 row_gray">
                                                    <td>
                                                        5
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW5()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW5()) ?>  </td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW5()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW5()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW5()) ?>  </td><tr class="row_6">
                                                    <td>
                                                        6
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW6()) ?></td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW6()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW6()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW6()) ?>  </td><td>  <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW6()) ?> </td><tr class="row_7 row_gray">
                                                    <td>
                                                        7
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW7()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW7()) ?> </td><td><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW7()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW7()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW7()) ?>  </td><tr class="row_8">
                                                    <td>
                                                        8
                                                    </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW8()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW8()) ?> </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW8()) ?></td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW8()) ?>  </td><td> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW8()) ?>  </td>

                                            </tbody>
                                        </table>
                                        <div class="timetable_small">
                                            <ul class="items_list"><h3>Monday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["mon"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Tuesday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["tue"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Wednesday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["wed"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Thrusday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["thu"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Friday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["fri"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Saturday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sat"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                            <ul class="items_list"><h3>Sunday</h3>
                                                <li><p><a href> <?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getWo()) ?> </a></p><span class="m_31">1</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW2()) ?> </a></p><span class="m_31">2</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW3()) ?> </a></p><span class="m_31">3</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW4()) ?> </a></p><span class="m_31">4</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW5()) ?> </a></p><span class="m_31">5</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW6()) ?> </a></p><span class="m_31">6</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW7()) ?> </a></p><span class="m_31">7</span><div class="clear"></div></li>
                                                <li><p><a href><?php echo htmlspecialchars($_SESSION['workOutsTab']["sun"]->getW8()) ?> </a></p><span class="m_31">8</span><div class="clear"></div></li>
                                            </ul>
                                        </div>
                                    </ul>	
                                </div>
                            </div>	
                            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion           
                                        width: 'auto', //auto or any width like 600px
                                        fit: true   // 100% fit in a container
                                    });
                                });
                            </script>








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