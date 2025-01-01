<?php
	session_start();
	include("dbconn.php");

	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btnsignup'])){
	   $username = trim($_POST['username']);
	   $email = trim($_POST['email']);
	   $password = trim($_POST['password']);
	   $confirmpassword = trim($_POST['confirmpassword']);

	   $isValid = true;

	   // Check fields are empty or not
	   if($username == '' || $email == '' || $password == '' || $confirmpassword == ''){
		 $isValid = false;
		 $error_message = "Please fill all fields.";
	   }

	   // Check if confirm password matching or not
	   if($isValid && ($password != $confirmpassword) ){
		 $isValid = false;
		 echo "<script>alert('Password does not match');</script>";
	   }

	   // Check if Email-ID is valid or not
	   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 $isValid = false;
		 $error_message = "Invalid Email-ID.";
	   }

	   if($isValid){

		 // Check if Email-ID already exists
		 $stmt = $dbconn->prepare("SELECT * FROM users WHERE email = ?");
		 echo "1";
		 $stmt->bind_param("s", $email);
		 //echo "1";
		 $stmt->execute();
		 //echo "1";
		 $result = $stmt->get_result();
		 //echo "1";
		 $stmt->close();
		 //echo "1";
		 if($result->num_rows > 0){
			 //echo "1";
		   $isValid = false;
		   //echo "1";
		   $error_message = "Email-ID is already existed.";
		 }

	   }

	   // Insert records
	   if($isValid){
		   //echo "1";
		 $insertSQL = "INSERT INTO users(username,email,password) values(?,?,?)";
		 //echo "1";
		 $stmt = $dbconn->prepare($insertSQL);
		 //echo "1";
		 $stmt->bind_param("sss",$username,$email,$password);
		 //echo "1";
		 $stmt->execute();
		 //echo "1";
		 $stmt->close();

		  //$success_message = "Account created successfully.";
      if($insertSQL){
        echo "<script>alert('Account Created Successfully'); window.location='loginPage.php';</script>";
       }

	   }
	}
?>



<!DOCTYPE html>
<html lang="en">
<title>Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body style="background-image: url('images/background.jpg');">
  <!-- nav bar -->
  <div id="navbar" style="padding: 35px 10px;">
  <a href="index.php" id="logo">LAZORA</a>
  <div id="navbar-right">
    <a href="#about">Products</a>
    <a href="about.php">About</a>
    <div class="dropdown">
    <button class="dropbtn">My Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="login.php">Login</a>
    </div>
  </div>
  </div>
</div>


<form method='post' action='register.php'>

  <?php
    // Display Error message
    if(!empty($error_message)){
  ?>
  <div class="alert alert-danger">
    <strong>Error!</strong> <?= $error_message ?>
  </div>

  <?php
  }
  ?>

  <?php
    // Display Success message
  if(!empty($success_message)){
  ?>
  <div class="alert alert-success">
    <strong>Success!</strong> <?= $success_message ?>
  </div>

    <?php
  }
    ?>

  <!-- Form Container -->
  <div style="margin-top:150px;padding:15px 15px 100px;font-size:30px">
  <div class="containerreg">
    <div class="title">Registration</div>
      <div class="form">
        <div class="textbox">
          <label for="uname">Username</label>
          <input type="username" class="input" name="username" id="username" required="required">
        </div>
        <div class="textbox">
          <label for="email">Email</label>
          <input type="email" class="input" name="email" id="email" required="required">
        </div>
        <div class="textbox">
          <label for="password">Password</label>
          <input type="password" class="input" name="password" id="password" required="required">
        </div>
        <div class="textbox">
          <label for="pwd">Confirm Password</label>
          <input type="password" class="input" name="confirmpassword" id="confirmpassword" onkeyup=' ' required="required">
        </div>
    <br><input type="submit" name="btnsignup" class="btn btn-default" value="Register" >
      </form>
  </div>
</div>


  <!-- Script Section -->
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "45px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
</body>
</html>