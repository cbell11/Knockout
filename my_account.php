<?php
include_once 'headerHome.php';
 ?>
 <?php
 $first =  $_SESSION['u_first'];
 $last =  $_SESSION['u_last'];
 $email =  $_SESSION['u_email'];
 $uid =  $_SESSION['u_uid'];

 ?>

 <link rel = "stylesheet" type = "text/css" href = "css/home.css">
 <header>
   <div style = 'text-align: center; height: 20px; color: #333a40;' class='jumbotron'>
     <h3>Account Details</h3>
   </div>
 </header>

 <div id = 'contact_container' style = 'margin-left: 10px;'>
 <h2>First Name </h2><p><?php echo $first;?></p>
 <h2>Last Name </h2><p><?php echo $last;?></p>
 <h2>User ID </h2><p><?php echo $uid;?></p>
 <h2>Email </h2><p><?php echo $email;?></p><br><br>
 <form class="" action="includes/my_account.inc.php" method="post">
   <input class = 'btn btn-primary' type="submit" name="edit" value="Edit Information">
   <h2>Permanently delete your account</h2>
   <p>This will delete all data and cannot be undone.</p><br><br>
   <input class = 'btn btn-danger' type="submit" name="delete_account" value="Delete Account">

 </form>
</div>

 <!--MODAL CODE
 <button id = 'grad' class=" btn btn-primay bar" onclick = "document.getElementById('id01').style.display = 'block'" style = 'width:auto;'>Log In</button>
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
</div>-->
