
<!DOCTYPE html>

<html>
<style>
    * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
<head>

</head>
<body>
<?php include "registerCode.php" ; ?>
    <h1>Varsity Books </h1>

    <h2> Register Here</h2>
	<form method="POST" >

   
		
		<label> Name: </label> <input type="text" name="Name" value="<?php echo $stickyName ?>"><span style="color:red"> <?= $nameError?> </span>
        </br></br>
		<label> Surname: </label><input type="text" name="Surname" value="<?= $stickySurname ?>" ><span style="color:red"><?= $surnameError?> </span>
        </br></br>
        <label> Email: </label><input type="text" name="Email" value="<?= $stickyEmail ?>"><span style="color:red"><?= $emailError?> </span>
        </br></br>
        <label> Student No: </label><input type="text" name="StudentNo" value="<?= $stickyStudentNo ?>" ><span style="color:red"><?= $studentNoError?> </span>
        </br></br>
        <label> Password: </label><input type="text" name="Password" value="<?= $stickyPassword ?>"><span style="color:red"><?= $passwordError?> </span>
        </br></br>
        <label> Confirm Password: </label><input type="text" name="ConfirmPassword" value="<?= $stickyConfirmPassword ?>"><span style="color:red"><?= $confirmPasswordError?> </span>
        </br></br>
        <p> <?= $registrationSuccess?></p>
        </br></br>

       
        
    <button type="submit" class="signupbtn" > Register</button></br><a href="login.php">  Back to login page </a>

  

        
		
</form>	

</body>
</html>
