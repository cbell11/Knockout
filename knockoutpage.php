<?php
include_once 'headerHome.php';
 ?>
<html>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<header>
  <div class = 'primary-color jumbotron'>
    <div class = 'koLibrary'>
    </div>
  </div>
</header>

<?php
include_once 'includes/dbh.inc.php';
if (isset($_GET['id'])) {
   $ko_id = $_GET['id'];
   $ko_uid =  $_SESSION['u_uid'];
   $ko_user_id_num = $_SESSION['u_id'];



   $sql = "SELECT * FROM knockouts WHERE ko_id= '$ko_id'";
   $result = $conn->query($sql);
   while ($row = $result->fetch_assoc()) {
    $ko_name = $row['ko_name'];
    echo "<div style = 'text-align: center;' class = 'dark-text'>
            <h1 style = 'margin-left: 1px;'>".$row['ko_name']."<br></h1>
          </div><br><br>";
  }}
?>

<div style = 'text-align: center;'>
  <form class="" target = 'blank' action="http://127.0.0.1:5000/">
    <button class = 'btn btn-success btn-lg'  type = 'submit' name = "GoLive" value = "<?php echo $ko_id; ?>"> Go Live</button>
  </form>
</div>
<br><br>
<?php
  $sql2 = "SELECT * FROM qna WHERE ko_id= '$ko_id'";
  $result = $conn->query($sql2);
  $count = 1;
  while ($row = $result->fetch_assoc()) {
    if ($result->num_rows > 0) {
        // output data of each row
     echo "<div style = 'text-align: left; margin-left: 10%;'>
           <h6><strong>Question ".$count.":  </strong> ".$row['qna_q']."<br><strong>Answer ".$count.":</strong>  ".$row['qna_a']."</h6>
          <br></div>";
         $count++;
       }

   else {
             echo "0 results";
         }
       }
?>
