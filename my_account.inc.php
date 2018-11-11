<?php
session_start();
include_once 'dbh.inc.php';


if (isset($_POST['delete_account'])) {
  $id = $_SESSION['u_id'];
  $sql = "DELETE FROM users WHERE user_id = '$id';";
  mysqli_query($conn, $sql);
  session_start();
  session_unset();
  session_destroy();
  header("Location:  ../index.php?delete=success");
  exit();
}
