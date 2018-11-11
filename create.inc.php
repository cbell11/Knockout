<?php
session_start();
if (isset($_POST['submit'])) {


  include_once 'dbh.inc.php';
//  $questions = array();
//  $answers = array();
  $ko_name= mysqli_real_escape_string($conn, $_POST['title']);
  $ko_uid = $_SESSION['u_uid'];
  $ko_user_id_num = $_SESSION['u_id'];
  $subject = $_POST['subject'];
  $sql = "INSERT INTO knockouts (ko_name, ko_uid, ko_user_id_num, ko_sub)
  VALUES ('$ko_name','$ko_uid','$ko_user_id_num', '$subject')";
  mysqli_query($conn, $sql);

 $questions = $_POST['questions'];
 $answers = $_POST['answers'];

 for($i=0;$i<count($questions);$i++)
 {
  if($questions[$i]!="" && $answers[$i]!="")
  {
    $result = mysqli_query($conn, "SELECT ko_id FROM knockouts WHERE ko_user_id_num = '$ko_user_id_num' AND ko_name = '$ko_name'"); // figure out why an existing tag gets the ID zero instead of 'tagID'
    $row = mysqli_fetch_assoc($result);
    $ko_id = $row["ko_id"];
    $sql = "INSERT INTO qna(qna_q, qna_a, ko_name, ko_id)
    VALUES ('$questions[$i]','$answers[$i]','$ko_name','$ko_id')";
    mysqli_query($conn, $sql);
  }
 }


  header("Location: ../myKnockouts.php?title=".$ko_name."&create=success");
  exit();
}
