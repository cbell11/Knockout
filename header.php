<?php
session_start();

 ?>
 <html>
 <!-- Google Suite -->
 <meta name="google-site-verification" content="2wl4JOPqIW3gjvrNh5grebG4JqHB5JUUmk02wjqesbA" />
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/swordlogo.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type = 'text/javascript' src='js/main.js'></script>
 <head>
<link rel="icon" href="favicon/favicon.ico" type="image/ico">
</head>
<!-- URL Image favicon
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">-->

 <nav>
   <div class = 'right'>
     <i class="fa fa-bars"></i> Menu</div>
   <div class="mid" id = 'logo'><a id = 'knockout' href = 'index.php'>KNOCKOUT</a></div>
   <button id = 'grad2' class=" btn btn-secondary bar" onclick = "location.href = 'signup.php';" >Sign Up</button>
   <button id = 'grad' class = " btn btn-primay bar" onclick = "document.getElementById('id01').style.display = 'block'" >Log In</button>
   <div id="id01" class="modal">
   <form class="modal-content animate" action="includes/login.inc.php" method = "POST">
     <div class="imgcontainer">
       <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
     <br><br>
     <div class="container">

       <label for="uname"><b>Username/Email</b></label>
       <input type="text" placeholder="Username/Email" name="uid" required>

       <label for="psw"><b>Password</b></label>
       <input type="password" placeholder="Password" name="pwd" required>

       <button id ='logIn' name = 'submit' type="submit">Login</button></form>
       <label>
       <input type="checkbox" checked="checked" name="remember"> Remember me
       </label><br>
       <div class="container">
       </div>
       <br><br>
       <span class="psw"><a href="#">Forgot password?</a> or <a href='signup.php'>Create New Account</a></span>
     </div>

   </form>
   </div>
 </nav>

 <div class="sidebar">
   <ul>
  <li><a href="index.php"><span title="Home">Home</span></a></li>
  <li><a href=""><span title="About">About</span></a></li>
  <li><a href=""><span title="Services">How to Play</span></a></li>
  <li><a href="contact.php"><span title="Contact">Contact</span></a></li>
</ul>
 </div>
