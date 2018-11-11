
<?php
include_once 'header.php';
if(isset($_SESSION['u_uid'])){
  header("Location: home.php?signup=success");
  exit();
}
 ?>


<div class="container">
  <a href="http://127.0.0.1:5000/" target = 'blank' class="join_btn">Join a Game</a>
  <div class="content">
    <!--<h1 style = "text-align: center;">Revive your classroom!!</h1>-->
    <img id = 'spaceship' src='img/rocketship.png' />
  </div>

  <div class="content">
    <h1>Thoroughly researched.</h1>
    <p class="des">We do the research so you don't have to. Every buyer guide we publish is the result of hundreds of conversations with real-life users. This takes a long time— most buyer guides take around 150 hours to complete— but it's worth it.</p>

    <img src="https://www.wisebuyer.com/assets/lab-owl-05f5b08889a2c95afa338b2ed6946f73.jpg" alt="" />
  </div>

  <div class="content">
    <h1>Conversations with real-life, verified users.</h1>
    <p class="des">Instead of allowing anyone to submit a review, we only approach users we can verify. This avoids user-submitted reviews— a system which is commonly gamed on other software review websites by companies paying for fake reviews.</p>
    <img src="https://www.wisebuyer.com/assets/chat-no-text-7ccddb62008a0178a230556ebfb9044c.jpg" alt="" />
  </div>

  <div class="content">
    <h1>What we’ve published so far:</h1>
    <p class="des">We publish a new guide every month.</p>
  </div>

  <div class="news">
    <div class="media">
      <img src="https://www.wisebuyer.com/assets/2bear-mat-60669aca8b28a78846b96f53ec19ab9d.png" alt="" />
      <h4>Website Builders</h4>
      <p class="des">What we learned by talking to 1,147 users.</p>
    </div>

    <div class="media">
      <img id="photo" src="https://wisebuyeraws.imgix.net/guides/cartoons/000/000/002/original/camera.png?1484599933?ixlib=rails-1.1.0&h=170%201x,%20https://wisebuyeraws.imgix.net/guides/cartoons/000/000/002/original/camera.png?1484599933?ixlib=rails-1.1.0&h=170&dpr=2%202x"
        alt="" />
      <div id="port">
        <h4>Portfolio Builders </h4>
        <p class="des">What we learned by talking to 823 users.</p>
      </div>
    </div>

    <div class="media">
      <img src="https://wisebuyeraws.imgix.net/guides/cartoons/000/000/003/original/delivery.png?1484599996?ixlib=rails-1.1.0&h=170" alt="" />
      <h4>Ecommerce Software </h4>
      <p class="des">What we learned by talking to 917 users.</p>
    </div>

    <div class="media">
      <img id="fox" src="https://wisebuyeraws.imgix.net/guides/cartoons/000/000/004/original/lan.png?1484599973?ixlib=rails-1.1.0&h=170 1x, https://wisebuyeraws.imgix.net/guides/cartoons/000/000/004/original/lan.png?1484599973?ixlib=rails-1.1.0&h=170&dpr=2 2x"
        alt="" />
      <h4>Landing Page Builders </h4>
      <p class="des">What we learned by talking to 467 users.</p>
    </div>

    <div class="media">
      <img src="https://www.wisebuyer.com/assets/2bear-mat-60669aca8b28a78846b96f53ec19ab9d.png" alt="" />
      <h4>Live Chat Software </h4>
      <p class="des">
        Coming Soon ...
      </p>
    </div>
  </div>

  <div class="content">
    <h1>Get in touch</h1>
    <p class="des">We'd love to hear from you. Email steve@wisebuyer.com.
    </p>
  </div>
</div>
