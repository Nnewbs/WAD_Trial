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
<!-- Nav bar --> 
<div id="navbar" style="padding: 35px 10px;">
    <a href="homePage.php" id="logo">PAVI MART</a>
    <div id="navbar-middle">
        <a href="homePage.php">Home</a>
        <a href="shopPage.php">Shop</a>
        <a href="promotionPage.php">Promotion</a>
        <a href="about.php">About Us</a>
    </div>

    <div id="navbar-right">
        <a href="shopPage.php">Cart</a>
        <a href="account.php">Account</a>
    </div>
</div>
<!-- End Nav bar-->

<div class="tymessage" style="text-align: center; margin-top: 20%;">
  <h3 style="color: #ffff;">Thank you for purchasing!</h3>
</div>
</body>
</html>
