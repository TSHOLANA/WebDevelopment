<?php   
   $dbName = "bookstore";
   $server = "localhost";
   $username = "root";
   $pswd = "";
 
   $dbconnect = @mysqli_connect($server, $username, $pswd, $dbName);

   if($dbconnect === FALSE){
       echo "<p>Connection error: " . mysqli_error($dbConnect) . "</p>";
       @mysqli_close($dbConnect);
       $dbconnect = FALSE;
   }else{
    //echo "<p>Successfiul Connection</p>";
   }

?>