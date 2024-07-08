<?php
  
  include "dbconn.php";

  $price = $_GET['param'];
  $ref=$_GET['ref'];
  $uId=$_GET['userId'];
  
 
  $quantity=$_GET['tQuantity'];

  $sql = "INSERT INTO orderline(email,refNo,total_Price,total_Quantity) VALUES('{$uId}','{$ref}','{$price}','{$quantity}')";

  $result = mysqli_query($dbconnect, $sql);

  if($result === FALSE){
      echo "DB Error - " . mysqli_connect_error();
      exit();
  }else{
      //The record has been successfully added
      session_destroy();
      session_start();
      $_SESSION['message'] = "order has been successfully added.";
      $_SESSION['msg_type'] = "warning";
      header('location:login.php');
  }

  //closing the connection
  mysqli_close($dbconnect);
  $dbconnect = FALSE;