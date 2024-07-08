<?php
  
  include "dbconn.php";

  $email = $_GET['param'];

  $sql = "DELETE FROM tblUser WHERE email = '{$email}'";

  $result = mysqli_query($dbconnect, $sql);

  if($result === FALSE){
      echo "DB Error - " . mysqli_connect_error();
      exit();
  }else{
      //The record has been successfully deleted
      session_start();
      $_SESSION['message'] = "User has been successfully deleted.";
      $_SESSION['msg_type'] = "danger";
      header('location:viewUsers.php');
  }

  //closing the connection
  mysqli_close($dbconnect);
  $dbconnect = FALSE;

?>