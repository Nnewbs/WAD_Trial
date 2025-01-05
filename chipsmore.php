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
	   <title>Chipsmore</title>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	   <script type="text/javascript" src="JS/script.js"></script>

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

<!-- Product Details -->
<div class="row" style="margin-top: 150px; margin-bottom: 20px; display: flex; justify-content: center;">
    <table style="width: 80%; border-collapse: collapse;">
    <tr>
        <!-- Product Image Column -->
        <td style="width: 50%; text-align: center; vertical-align: top; padding: 20px;">
            <img class="product" src="images/chipsmore.jpg" alt="Tie-detail sun hat" style="max-width: 100%; height: auto;">
        </td>
        <!-- Product Details Column -->
        <td style="width: 50%; vertical-align: top; padding: 20px;">
            <form>
            <span style="font-size: 18px; color: gray;">Snack / Packet</span>
            <h1 style="font-size: 28px; margin: 10px 0;">Chipsmore</h1>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0; color: #444;">RM5.00</p>
            <br>
            <h3 style="font-size: 22px; margin-bottom: 10px;">Ingredients Details</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
            - Wheat Flour<br>
            - Sugar<br>
            - Chocolate chips<br>
            - Cocoa powder<br>
            - Milk Powder
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