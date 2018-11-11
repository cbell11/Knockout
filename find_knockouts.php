<?php
include_once 'headerHome.php';
 ?>
<html>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Makes current page active on navbar-->
<script> document.getElementById('navFindKnockouts').classList.remove('active'); </script>
<header>
  <div class='primary-color jumbotron'>
    <form id = 'search_form' class = "search-container" method = 'get' action = 'find_knockouts.php'>
    <input type="text" name = 'search' id = "search-bar" placeholder="Search our database..." value = "<?php if (isset($_GET['search'])){ $search = $_GET['search']; echo $search;} ?>" >
    <a onclick="document.getElementById('search_form').submit();"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>
  </div>
</header>
<?php
include_once 'includes/dbh.inc.php';
if (isset($_GET['search'])) {
   if(preg_match("/^[  a-zA-Z]+/", $_GET['search'])){
   $search = $_GET['search'];
   $ko_uid =  $_SESSION['u_uid'];
   $ko_user_id_num = $_SESSION['u_id'];
   $qna_count = 0;

   $sql="SELECT * FROM knockouts WHERE ko_name LIKE '%" . $search .  "%' OR ko_uid LIKE '%" . $search ."%' OR ko_sub LIKE '%" . $search ."%'";
   $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        echo "<br>";
        while($row = $result->fetch_assoc()) {

            echo
            "<div class = 'my_ko_module dark-text'>
            <span class = 'btn' style = 'margin-top: 10px; float: right;'><a class= 'link' href = 'copy.php?ko_id=".$row["ko_id"]."&ko_name=".$row["ko_name"]."' id = 'delete_ko'>View</a></span>
                <a class = 'link' href = 'knockoutpage.php?id=".$row['ko_id']."'><h3 id = 'title'>".$row["ko_name"]."</a>
                <p style = 'margin-left: 5px; color: #333a40'> Creator: <a href = '' class = 'link'>". $row["ko_uid"].
                "</a></p></h3>
            </div>";
        }
    } else {
        echo "<h2 style = 'text-align: center;'>No results found!</h2>";
    }
  }

}?>
