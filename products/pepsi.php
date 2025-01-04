<!doctype html>
<html>
   <head>
	   <title>Pepsi</title>
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
<!-- Product Details -->
<div class="row" style="margin-top: 150px; margin-bottom: 20px; display: flex; justify-content: center;">
    <table style="width: 80%; border-collapse: collapse;">
    <tr>
        <!-- Product Image Column -->
        <td style="width: 50%; text-align: center; vertical-align: top; padding: 20px;">
            <img class="product" src="images/pepsi.jpg" alt="Pepsi" style="max-width: 100%; height: auto;">
        </td>
        <!-- Product Details Column -->
        <td style="width: 50%; vertical-align: top; padding: 20px;">
            <form>
            <span style="font-size: 18px; color: gray;">Drink / Soda</span>
            <h1 style="font-size: 28px; margin: 10px 0;">Pepsi</h1>
            <p style="font-size: 24px; font-weight: bold; margin: 10px 0; color: #444;">RM3.00</p>
            <br>
            <h3 style="font-size: 22px; margin-bottom: 10px;">Ingredients Details</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
            - 41 grams of carbohydrates<br>
            - 30 mg of sodium<br>
            - 38 mg of caffiene<br>
            - 150 calories<br>
            - 0 gram of protien
            </p>
            </form>

            <button onclick="location.href='shopPage.php'">SHOP</button>
        </td>
    </tr>
    </table>
</div>


</body>
</html>