<?php
include_once 'header.php';
if(isset($_SESSION['u_uid'])){
  header("Location: home.php?signup=success");
  exit();
}
 ?>
 <link rel="stylesheet" href="css/contact.css">
 <script src="js/contact.js"></script>

 <header>
	<h1>Contact us</h1>
</header>

<div style = 'text-align:center;'id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" action = 'index.php' method="post" >

<div style = 'width: 500px;' class="formgroup" id="name-form">
    <label for="name">Your name*</label>
    <input type="text" id="name" name="name"></input>
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label>
    <input type="email" id="email" name="email" />
</div>

<div class="formgroup" id="message-form">
    <label for="message">Your message</label>
    <textarea id="message" name="message"></textarea>
</div>

	<input type="submit" value="Send your message!" />
</form>
</div>
