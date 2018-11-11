<?php
include_once 'headerHome.php';

  if (isset($_SESSION['u_uid'])) {
      $first = $_SESSION['u_first'];
  }

 ?>

 <html>
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <!-- Makes current page active on navbar-->
<link rel = "stylesheet" type = "text/css" href = "css/home.css">
<script type = 'text/javascript' src='js/home.js'></script>
<header>
  <div class='primary-color jumbotron'>
    <form id = 'search_form' class = "search-container" method = 'get' action = 'find_knockouts.php'>
    <input type="text" name = 'search' id ="search-bar" placeholder="Search our database...">
    <a onclick="document.getElementById('search_form').submit();"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>
  </div>
</header>

  <body>
  <div id = 'dashboard'>
  <div id = 'welcome' class = 'container'>
      <h1 id = 'welcomeMessage'>Welcome, <?php echo $first ?> !</h1><br><br><br>
      <p>This is your home page where you have the freedom to search and create Knockouts! If you have any trouble, please click the "help" button at the top on the screen so we can assist you!</p>
    </div><br>
    <div id = 'dashboard'>
    <div class = 'container'>
      <div class='row'>
      <div id = 'mathBtn' class='btn col-sm' style = 'border: none;'>
        <h2>Math</h2><br>
        <img src="https://png.icons8.com/color/50/000000/calculator.png">
    </div>
    <div id = 'histBtn'class='btn col-sm' style = 'border: none;'>
        <h2>History</h2><br>
        <img src="https://png.icons8.com/color/50/000000/archeology.png">
      </div>
      <div id = 'englBtn'class='btn col-sm' style = 'border: none;'>
          <h2>English</h2><br>
          <img src="https://png.icons8.com/color/50/000000/literature.png">
    </div>
    <div id = 'bioBtn'class='btn col-sm' style = 'border: none;'>
        <h2>Biology</h2><br>
        <img src="img/microscope.png">
    </div>
    <div id = 'langBtn'class='btn-sm col-sm' style = 'border: none;'>
        <h2>Language</h2><br>
        <img src="https://png.icons8.com/color/50/000000/language.png">
    </div>
  </div><br><br>
  <div class='row'>
    <div id = 'chemBtn' class='btn col-sm' style = 'border: none;'>
      <h2 style = 'margin-left: 20px;'>Chemistry</h2><br>
      <img style = 'margin-left: 20px;' src="img/test-tube.png">
    </div>
    <div id = 'physBtn'class='btn col-sm' style = 'border: none;'>
        <h2>Physics</h2><br>
        <img src="img/physics.png">
      </div>
    <div id = 'geogBtn' class='btn col-sm' style = 'border: none;'>
        <h2>Geography</h2><br>
        <img src="img/earth-planet.png">
    </div>
    <div id = 'psycBtn'class='btn col-sm' style = 'border: none;'>
        <h2>Psychology</h2><br>
        <img src="img/brain.png">
    </div>
</div>
</div>

<br> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<p>
</p>
</div>
</body>
