<?php
session_start();


 ?>
<html>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script><script type = 'text/javascript' src='js/main.js'></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Rammetto+One|Rubik|IBM+Plex+Sans+Condensed" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/home.css">
<head>
<link rel="icon" href="favicon/favicon.ico" type="image/ico">
</head>




<nav class="navbar navbar-fixed-top navbar-expand-md navbar-dark bg-dark">
  <a id='logo' class="navbar-brand" href="home.php">KNOCKOUT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li id = 'navMyKnockouts' class="nav-item active">
        <a class="nav-link" href="myKnockouts.php"><i class="fas fa-user-circle"></i> My Knockouts </a>
      </li>
      <li id = 'navFindKnockouts' class="nav-item active mr-auto">
        <a class="nav-link ml-1" href="find_knockouts.php"><i class="fas fa-search"></i> Find Knockouts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link ml-1" href="#"><i class="fas fa-align-left"></i> Data</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link ml-1" href="#"><i class="fas fa-question"></i> Help</a>
      </li>
    </ul>
    <ul class = 'navbar-nav '>
    <button id = 'create' class="z-depth-5 btn btn-primay bar" onclick = "window.location = 'create.php'" style = 'width:auto;'>Create a new Knockout!</button>

    <li class="nav-item dropdown active">
      <a style = 'float: right;' class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php  if (isset($_SESSION['u_uid'])) {
           echo $_SESSION['u_uid'];
        }?>
      </a>
      <div class="dropdown-menu dropdown-menu-right mr-auto" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="my_account.php">My account</a>
        <a class="dropdown-item" href="#">Change password</a>
        <div class="dropdown-divider"></div>
        <form action = 'includes/logout.inc.php' method = "POST">
        <button type = 'submit' name = 'submit' class="dropdown-item" >Logout</button>
        </form>
      </div>
    </li></ul>
  </div>
</nav>
