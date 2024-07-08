<?php
  
  include "dbconn.php";

  $isbn = $_GET['param'];

  $sql = "DELETE FROM book WHERE Book_ISBN = '{$isbn}'";

  $result = mysqli_query($dbconnect, $sql);

  if($result === FALSE){
      echo "DB Error - " . mysqli_connect_error();
      exit();
  }else{
      //The record has been successfully deleted
      session_start();
      $_SESSION['message'] = "Book has been successfully deleted.";
      $_SESSION['msg_type'] = "danger";
      header('location:viewBooks.php');
  }

  //closing the connection
  mysqli_close($dbconnect);
  $dbconnect = FALSE;
