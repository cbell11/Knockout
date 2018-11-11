<?php
<script type = 'text/javascript' src='js/main.js'></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/swordlogo.css">
//jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
//Latest compiled JavaScript
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<nav>
  <div class="right">
    <i class="fa fa-bars"></i> Menu</div>
  <div class="mid" id = 'logo'>KNOCKOUT</div>
  <button id = 'grad' class=" btn btn-primay bar" onclick = "document.getElementById('id01').style.display = 'block'" style = 'width:auto;'>Log In</button>

  <div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>
    <br><br>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button id ='logIn' type="submit" onclick= window.location.href='home.html'>Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a> or <a href='signup.html'>Create New Account</a></span>
    </div>
  </form>
  </div>
</nav>

<div class="sidebar">
  <ul>
    <a href="">Our Mission</a>
    <a href="">For Educators</a>
    <a href="">Resources</a>
    <a href="">Our Team</a>
    <a href="">Contact</a>
    <a href="">Support</a>
  </ul>
</div>

</body>
