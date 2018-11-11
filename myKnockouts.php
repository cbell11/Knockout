<?php
include_once 'headerHome.php';
 ?>
<html>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Makes current page active on navbar-->
<script> document.getElementById('navMyKnockouts').classList.remove('active'); </script>
<header>
  <div class = 'primary-color jumbotron'>
    <div class = 'koLibrary'>
      Your Knockout Library
    </div>
  </div>
</header>

  <body>
  <div class = 'container'>
    <?php
    include 'includes/dbh.inc.php';

    if (isset($_SESSION['u_uid'])) {
       $ko_uid =  $_SESSION['u_uid'];
       $ko_user_id_num = $_SESSION['u_id'];

       $sql = "SELECT * FROM knockouts WHERE ko_user_id_num = '$ko_user_id_num'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                echo
                "<div class = 'my_ko_module dark-text'>
                <span class = 'btn' style = 'margin-top: 10px; float: right;'><a class= 'link' href = 'delete.php?ko_id=".$row["ko_id"]."&ko_name=".$row["ko_name"]."' id = 'delete_ko'>Delete</a></span>
                    <a class = 'link' href = 'knockoutpage.php?id=".$row['ko_id']."'><h3 id = 'title'>".$row["ko_name"]."</a>
                    <p style = 'margin-left: 5px; margin-bottom: 5px; color: #333a40'> Creator: <a href = '' class = 'link'>". $row["ko_uid"].
                    "</a><br></p></h3><br>
                </div>";
            }
        } else {
            echo '<div style = "text-align: center;"> <h2> Oh no! You don\'t have any Knockouts yet! Create one <a href = "create.php">here!</a></h2></div>';
        }
    }?>
    <!--<div class="">
      <p id = 'target1'> Container 1</p>
    </div><br>
    <div class="">
      <p id = 'target1'> Container 2</p>
    </div><br>
    <div class="">
      <p id = 'target1'> Container 3</p>
    </div><br>-->
  </div><br>
