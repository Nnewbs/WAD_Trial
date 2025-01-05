<?php
    include("dbconn.php"); //$conn
?>
<?php
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE email = '$id'";
    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
    $row = $query -> fetch_assoc();
?>

<!doctype html>
<html>
   <head>
        <title>Waffle</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

		<!-- Icon -->
		<link rel="shortcut icon" href="images/icon.jpg" type="image/jpg">
		<style>
			span, td, h1, h3, p, li{
				color: black;
				text-align: left;
			}
			row{
				display: flex;
				height: 88%;
			}

			col{
				flex-basis: 50%;
			}

			img{
				width: 340px;
				height: 470px;
			}
			body{
				background-color: white;
			}
		</style>

	</head>

<body>

<!--Top Navigation Bar-->
<div id="navbar-frame">

</div>

<script>
$(function(){
  $("#navbar-frame").load("navbar2.html");
});
</script>
<!--end of Navigation bar-->

<!-- Product Details -->
<div class="row" style="margin-top: 150px; margin-bottom: 20px; display: flex; justify-content: center;">
    <table style="width: 80%; border-collapse: collapse;">
    <tr>
        <!-- Product Image Column -->
        <td style="width: 50%; text-align: center; vertical-align: top; padding: 20px;">
            <img class="product" src="images/waffle.jpg" alt="Waffle" style="max-width: 100%; height: auto;">
        </td>
        <!-- Product Details Column -->
        <td style="width: 50%; vertical-align: top; padding: 20px;">
            <form>
            <span style="font-size: 18px; color: gray;">Snack / Savory</span>
            <h1 style="font-size: 28px; margin: 10px 0;">Waffle</h1>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0; color: #444;">RM4.00</p>
            <br>
            <h3 style="font-size: 22px; margin-bottom: 10px;">Ingredients Details</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
            - Wheat Flour<br>
            - Sugar<br>
            - Baking Powder<br>
            - Egg<br>
            - Salt
            </p>
            </form>

            <button onclick="location.href='shopPage.php'">SHOP</button>
        </td>
    </tr>
    </table>
</div>

<!--Footer -->
<footer class="footer">
    <div class="container-footer">
       <div class="row">
           <div class="footer-col">
               <h4>Company</h4>
               <ul>
                   <li><a href="aboutUs.php">about us</a></li>
               </ul>
           </div>
           <div class="footer-col">
               <h4>Get Help</h4>
               <ul>
                   <li><a href="#">FAQ</a></li>
                   <li><a href="#">returns</a></li>
               </ul>
           </div>
           <div class="footer-col">
               <h4>Shop</h4>
               <ul>
                   <li><a href="promotionPage.php">Promotion</a></li>
                   <li><a href="shopPage.php">Shop</a></li>
               </ul>
           </div>
           <div class="footer-col">
               <h4>follow us</h4>
               <div class="social-links">
                   <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                   <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                   <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
               </div>
           </div>
       </div>
    </div>
 </footer>
 <!--End Footer-->

</body>
</html>