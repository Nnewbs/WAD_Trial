<?php
// Include database connection
include("dbconn.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        .chart-container {
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#dashboard">Dashboard</a>
        <a href="#menu-management">Menu Management</a>
        <a href="#order-management">Order Management</a>
        <a href="#transaction-summary">Transaction Summary</a>
        <a href="#registered-members">Registered Members</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">

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