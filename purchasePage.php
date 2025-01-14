<?php
    include("dbconn.php"); //$conn
    session_start();
?>
<?php
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM users WHERE email = '$id'";
    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
    $row = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>PURCHASE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <script type="text/javascript" src="JS/script.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
<!--Top Navigation Bar-->
<div id="navbar-frame"></div>

<script>
$(function(){
  $("#navbar-frame").load("navbar2.html");
});
</script>
<!--end of Navigation bar-->

<div class="tymessage" style="text-align: center; margin-top: 10%; color: white;">
  <h3>Thank you for purchasing!</h3>
  <p>Here are your purchase details:</p>
  <?php
    if (!empty($_SESSION['cart'])) {
        $outputTable = '';
        $total = 0;
        $outputTable .= "<table class='table table-bordered' style='margin: 0 auto; color: #ffff; width: 80%; border: 1px solid white;'>";
        $outputTable .= "
        <thead>
          <tr 'border-bottom: 1px solid white;'>
            <th>Name</th>
            <th>Price (RM)</th>
            <th>Quantity</th>
            <th>Subtotal (RM)</th>
          </tr>
        </thead>";
        foreach ($_SESSION['cart'] as $key => $value) {
            $subtotal = $value['p_price'] * $value['p_quantity'];
            $outputTable .= "
            <tr>
              <td>{$value['p_name']}</td>
              <td>{$value['p_price']}</td>
              <td>{$value['p_quantity']}</td>
              <td>{$subtotal}</td>
            </tr>";
            $total += $subtotal;
        }
        $outputTable .= "
        <tfoot>
          <tr 'border-top: 1px solid white;'>
            <td colspan='3' style='text-align: right;'><b>Total</b></td>
            <td><b>{$total}</b></td>
          </tr>
        </tfoot>";
        $outputTable .= "</table>";
        echo $outputTable;
    } else {
        echo "<p style='color: #ffff;'>Your cart is empty.</p>";
    }
  ?>
  <form method="post" action="generatePDF.php" style="margin-top: 20px;">
      <button type="submit" class="btn btn-primary">Download as PDF</button>
  </form>
</div>
</body>

</html>
