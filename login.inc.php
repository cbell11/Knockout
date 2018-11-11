<?php
session_start();

if (isset($_POST['submit'])) {
    include 'dbh.inc.php';
    //Safety Net for people entering code
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error Handlers
    //Check if inputs are empty

    if (empty($uid) || empty($pwd)) {
      header("Location: ../signup.php?signup=empty");
      exit();
    } else {
        //Check if uid exists in database
        $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
          header("Location: ../index.php?login=error");
          exit();
        }else {
          //Check if password matches with $uid
          //Finds row of the result/user in database
          if ($row = mysqli_fetch_assoc($result)) {
            //dehashing the password
            $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
            //Check if password is correct
            if ($hashedPwdCheck == false) {
              header("Location: ../index.php?login=error");
              exit();
            }elseif ($hashedPwdCheck == true) {
              //Login the user HERE
              $_SESSION['u_id']=$row['user_id'];
              $_SESSION['u_first']=$row['user_first'];
              $_SESSION['u_last']=$row['user_last'];
              $_SESSION['u_email']=$row['user_email'];
              $_SESSION['u_uid']=$row['user_uid'];
              header("Location: ../home.php?login=success");
              exit();
            }
          }
        }

    }
}else {
  header("Location: ../index.php?login=error");
  exit();
}
