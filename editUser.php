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
<?php include "editUserCode.php" ; ?>
    <h1>Varsity Books </h1>

   
	<form method="POST" >

   
		
		<label> Name: </label> <input type="text" name="Name" value="<?= $name?>"><span style="color:red"> <?= $name_error?> </span>
        </br></br>
		<label> Surname: </label><input type="text" name="Surname" value="<?= $surname ?>" ><span style="color:red"><?= $surname_error?> </span>
        </br></br>
        <label> Email: </label><input type="text" name="Email" value="<?= $email ?>"><span style="color:red"><?= $email_error?> </span>
        </br></br>
        <label> Student No: </label><input type="text" name="StudentNo" value="<?= $studentNo ?>" ><span style="color:red"><?= $studentNo_error?> </span>
        </br></br>
        <label> Password: </label><input type="text" name="Password" value="<?= $password ?>"><span style="color:red"><?= $password_error?> </span>
        </br></br>
      
        <label> Verified: </label><input type="text" name="Verified" value="<?= $verified?>"><span style="color:red"><?= $verified_error?> </span>
        </br></br>
        
        </br></br>

        
    <button type="submit" class="signupbtn"name="Update"> Update</button><button class="cancelbtn" type="button" ><a href="viewUsers.php">  Back to view Users </a></button>

  

        
		
</form>	

</body>
</html>
