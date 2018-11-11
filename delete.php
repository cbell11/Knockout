<?php
$ko_id = $_GET['ko_id'];
include_once 'includes/dbh.inc.php';
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM knockouts WHERE ko_id = $ko_id";
$sql2 = "DELETE FROM qna WHERE ko_id = $ko_id";

if (mysqli_query($conn, $sql)) {
      mysqli_query($conn,$sql2);
      mysqli_close($conn);
      header('Location: myKnockouts.php?delete=success');
      exit;


} else {
    echo "Error deleting record";
}
