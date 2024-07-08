

	
   <?php
        include("dbconn.php");
        $userName="";
        $password="";
       
        $userNameError="";
        $passwordError="";
        
        

        $userNameValid=FALSE;
        $adminUserNameValid=FALSE;
        $passwordValid=FALSE;
    if(isset($_POST['Login'])){
        $stickyUserName=$_POST['userName'];
        $stickyPassword=$_POST['password'];
    }
    else
    {
        $stickyUserName=" ";
        $stickyPassword=" ";
    }
            if(isset($_POST["Login"])){

               
                $userCheck="";
               
                if (!empty($_POST['userName']) &&  !empty($_POST['password'])) {
                    $userName= filter_var($_POST['userName'], FILTER_SANITIZE_EMAIL);
                    $userCheck = mysqli_query($dbconnect, "SELECT * FROM tbladmin WHERE Admin_id = '{$userName}'");
                  
                        
                        
                           if($userCheck)
                           {
                               $userNameValid=True;
                               if($userNameValid )
                                    {
                       
                                        $row=mysqli_fetch_assoc($userCheck);
                                        $hashedPassword=$row['password'];
                                            if(password_verify($_POST['password'], $hashedPassword ))
                                                 {
                                                     $passwordValid=True;
                                                     session_start();
                                                     $_SESSION['message'] = "Admin rights are activated.";
                                                     $_SESSION['msg_type'] = "warning";
                                                     header('location:admin.php');
                                                 }
                                            else 
                                                {
                                                    echo "<p>Incorrect </p>";
                                                }
                                
                                    }
                             }
                             else
                             {
                                echo "<p>bull</p>";
                             }
                        
                    
                }
                else
                {
                    $userNameError="Please insert Username";
                }
               
           
                
                
                unset($_POST["Login"]);
                
            }

                 function cleanse($inpu )
                 {
                     $blue= trim($inpu);
                    $blue=stripslashes($blue);
                    $blue=htmlspecialchars($blue);

                    return $blue;
                 }
                 
 
    ?>