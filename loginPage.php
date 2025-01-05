<?php
	include("dbconn.php");
	session_start();

	if(isset($_POST['email'])){
		//find email and password from database
		$sql = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
		$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
		$row = $query -> fetch_assoc();
		$num = $query -> num_rows;
		$id = $_POST['email'];

		//check if email and password are correct
		if($num == 1){
			$_SESSION['email'] = $row['email'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['id'] = $row['id'];
			$id = $_SESSION['id'];

			//Check the level whether it is a customer or an admin.
			if($row['level'] == "customer"){
				echo "<script> window.location='homePage.php?id=".$id."'</script>";
			} else{
				echo "<script> window.location='adminHome.php?id=".$id."'</script>";
			}
		} else {
			echo "<script>alert('You have entered a wrong email or password!'); window.location='index.php';</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Log In</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/boxForm.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
</head>

<body style="background-image: url('images/background.jpg');">

<!-- Nav bar --> 
<div id="navbar" style="padding: 35px 10px;">
    <a href="index.php" id="logo">PAVI MART</a>
    <div id="navbar-middle">
        <a href="index.php">Home</a>
        <a href="shopPage.php">Shop</a>
        <a href="promotionPage.php">Promotion</a>
        <a href="aboutUs.php">About Us</a>
    </div>
</div>
<!-- End Nav bar-->

<!--Log In Form-->
<div class="containerreg">
<form class="modal-content animate" method="post" action="loginPage.php">
	<div class="containerreg">
		<div class="title">Log In</div>
			<div class="form">
				<div class="textbox">
					<label>Email</label>
					<input type="email" class="input" name="email" id="email" required="required">
				</div>
				<div class="textbox">
					<label for="password">Password</label>
					<input type="password" class="input" name="password" id="password" required="required">
				</div>

				<input type="submit" name="submit" class="btn btn-default" value="Login" style="margin-bottom:15px;" >
				<div class="newmember">
					<p>Don't have an account?<a href="registrationPage.php" class="link"> Register here</a></p>
				</div>
				</form>
			</div>
	</div>
</body>
</html>