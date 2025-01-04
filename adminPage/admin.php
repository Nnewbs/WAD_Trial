<?php
    include("dbconn.php"); //$conn
?>
<?php
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE email = '$id'";
    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
    $row = $query -> fetch_assoc();
?>
<html>
<title>Admin's Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">


<body style="background-image: url('images/background.jpg');">
		<!-- Header -->
<div id="navbar" style="padding: 35px 10px;">
  <a href="userhome.php?id=<?php echo $row['email']; ?>" id="logo">LAZORA</a>
  <div id="navbar-right">
      <a href="logout.php">Logout</a>
    </div>
  </div>
  </div>
</div>
<!-- End Header -->
<div style="margin-top:190px;padding:15px 15px;font-size:30px">

		<center>
		<?php
		$sql = "SELECT id, username, email, level FROM users";
		$result = $dbconn->query($sql);
		?>


		<table class="tuser" border="1px solid black">
			<caption><h2 style="color: white" align="center">Admin's View</h2></caption>
		<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Email</th>
		<th>Level</th>
		<th>Delete User</th>
		</tr>

		<?php
		while($row = mysqli_fetch_array($result))
		{
		?>
		 <tr>
		 <td><?php echo $row['id']; ?></td>
		 <td><?php echo $row['username']; ?></td>
		 <td><?php echo $row['email']; ?></td>
		 <td><?php echo $row['level']; ?></td>
		 <td><a href="deleteuser.php?id=<?php echo $row['id']; ?>">Delete</a>
		 </tr>
		 <?php
		}
		?>
		</table>
		</center>
	</div>

	<style>
		table{
			background-color: white;
  			box-shadow: 5px 10px #888888;
			width: 80%;
		}
	</style>

	</body>
</html>