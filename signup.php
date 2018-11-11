<?php
include_once 'header.php';
 ?>

<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/swordlogo.css">
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type = 'text/javascript' src='js/main.js'></script>
<script type = 'text/javascript' src='js/signup.js'></script>




<div class="container">
  <div class="content">
    <h1 id = 'signup1'style = "text-align: center;">Please select your role</h1>
    <div class= 'row'>
    <div>
    <input form = 'signup_form' type = 'text' value = 'Educator' name = 'role' id ='edBtn' class='col-xs-5 btn btn-lg'></input>
  </div>
  <div>
    <input form = 'signup_form' type = 'text' value = 'Student' name = 'role' id = 'stBtn' class='col-xs-5 btn btn-lg'></input>
  </div>
  <br>
  <div id = 'signup2'>
    <form id = 'signup_form' action = 'includes/signup.inc.php' method = "POST">
      <input type="text" placeholder="First name" name= "first">
      <input type="text" placeholder="Last name" name= "last">
      <input type="text" placeholder="Email address" name= "email">
      <input type="text" placeholder="Username" name= "uid">
      <input type="password" placeholder="Enter password" name="pwd">
      <button type="submit" name = "submit">Submit</button>
    </form>
  </div>
  </div>
  </div>
</div>
