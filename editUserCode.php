<?php
    include("dbconn.php");

    $errorCount = 0;
    $name_error = $surname_error=$verified_error = $studentNo_error = $email_error = $password_error = "";
    $name = $surname = $StudentNo = $password= $email = "";
    $verified=0;

    $email = $_GET['param'];

    $sql = "SELECT * FROM tbluser WHERE email =  '{$email}'";

    if($dbconnect === FALSE){
        echo "DB Error - " . mysqli_connect_error();
        exit();
    }

    $result = mysqli_query($dbconnect, $sql);

    $row = mysqli_fetch_assoc($result);
        //Sticky values
    $name = $row['name'];
    $surname = $row['surname'];
    $email = $row['email'];
    $studentNo = $row['student_num'];
    $verified =$row['Verified'];
    $password= $row['password'];
  
    if(isset($_POST["Update"])){
        if(empty($_POST['Name'])){
            $name_error = "Please insert the first name.";
            $errorCount++;
        }else{

            $name = $_POST['Name'];
        }

        if(empty($_POST['Surname'])){
            $surname_error = "Please insert the last name.";
            $errorCount++;
        }else{
            $surname = $_POST['Surname'];
        }

        if(empty($_POST['Email'])){
            $email_error = "Please insert email address";
            $errorCount++;
        }else{
            $email = $_POST['Email'];
        }

        if(empty($_POST['StudentNo'])){

            $studentNo_error = "Please insert the Student Number.";
            $errorCount++;
        }else{
            $studentNo = $_POST['StudentNo'];
        }

        if(empty($_POST['Password'])){

            $password_error = "Please insert the password.";
            $errorCount++;
        }else{
            $password = $_POST['Password'];
        }

      

        if(empty($_POST['Verified'])){

            $verified_error = "Please enter a 0 or 1.";
            $errorCount++;
        }else{
            $verified = $_POST['Verified'];
        }
        

           
        if($errorCount == 0){
            //query for updating into a table
            $sql = "UPDATE tbluser 
                    SET name = '{$name}',
                        surname = '{$surname}',
                        email = '{$email}',
                        student_num = '{$studentNo}',
                        password ='{$password}',
                        Verified='{$verified}'
                    WHERE email = '{$email}'"; 
                   
                        

        //executing the query
        $dbResult = mysqli_query($dbconnect, $sql);

        if ($dbResult === FALSE) {
            echo "Error inserting details into the database: ". mysqli_connect_error();
        } else { 
            //echo "User details updated successfully.";
            session_start();
            $_SESSION['message'] = "User has been successfully updated.";
            $_SESSION['msg_type'] = "warning";
            header('location:viewUsers.php');
        }

            //closing the connection
            mysqli_close($dbconnect);
            $dbconnect = FALSE;
        }
        unset($_POST["Update"]);
    }


?>