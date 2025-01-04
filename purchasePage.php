<?php
    include("dbconn.php"); //$conn
?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE email = '$id'";
    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
    $row = $query -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
  <!-- nav bar -->
  <div id="navbar" style="padding: 35px 10px;">
    <a href="userhome.php?id=<?php echo $row['email']; ?>" id="logo">LAZORA</a>
    <div id="navbar-right">
      <a href="product.php?id=<?php echo $row['email']; ?>">Products</a>
      <a href="loginabout.php?id=<?php echo $row['email']; ?>">About</a>
      <a href="logout.php">logout</a>
    </div>
  </div>

<!-- End Header -->
<div class="tymessage" style="text-align: center; margin-top: 20%;">
  <h3 style="color: #ffff;">Thank you for purchasing!</h3>
</div>
</body>
</html>
