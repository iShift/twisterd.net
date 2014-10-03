<?php
require('language.php');
echo'<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>'.$head_title.'</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Twister<b>d</b>.net</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="/">'.$menu_main.'</a></li>
              <li><a href="faq.php">'.$menu_diff.'</a></li>
                            <li class="active"><a href="#">'.$menu_screenshots.'</a></li>
              <li><a href="http://cjdroute.net/forum/viewforum.php?f=11">'.$menu_forum.'</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$menu_for_developers.' <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="https://github.com/miguelfreitas/twister-core">'.$menu_for_developers_core.'</a></li>
				  <li><a href="https://github.com/miguelfreitas/twister-html">'.$menu_for_developers_webui.'</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Google Groups</li>
                  <li><a href="https://groups.google.com/forum/#!forum/twister-users">'.$menu_for_users.'</a></li>
                  <li><a href="https://groups.google.com/forum/#!forum/twister-dev">'.$menu_for_developers2.'</a></li>
                </ul>
              </li>
			  <li><a href="https://github.com/iShift/twister-webkit/releases/latest">'.$menu_download_for_windows.'</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Twister - '.$menu_screenshots.'</h1>
        <h2>'.$main_windows.'</h2>
        <img src="1.png"></img>
        <h2> '.$main_settings.'</h2>
        <img src="2.png"></img>
		<h2> '.$profile_settings.'</h2>
        <img src="3.png"></img>
        <h2> '.$users_profile.'</h2>
        <img src="4.png"></img>
        <h2> '.$personal_messages.'</h2>
        <img src="5.png"></img>
		<h2> '.$mentions.'</h2>
        <img src="6.png"></img>
		<h2> '.$menu.'</h2>
        <img src="7.png"></img>
        <h2> '.$sign_in_sign_up.'</h2>
        <img src="8.png"></img>
		<h2> '.$post_for_hashtag.'</h2>
        <img src="9.png"></img>

        <p>
	       
        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <footer align="center">'.$twister_community.' <br>
	    '.$official_site_link.': <a href="http://twister.net.co">http://twister.net.co</a>
    </footer>
  </body>
</html>';

?>
