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
  <title>PROMOTION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <script type="text/javascript" src="JS/script.js"></script>

<style>
	.grid > article{
		width: 350px;
	}

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }

  .home {
    position: relative;
    text-align: center;
    color: white;
  }

  .home img {
    width: 100%;
    max-height: 700px;
    object-fit: cover;
  }

  .home-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  .home-content h1 {
    font-size: 50px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
  }

  .home-content p {
    font-size: 20px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
  }

  .home-content button {
    padding: 10px 20px;
    font-size: 18px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #000000;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    transition: background-color 0.3s;
  }

  .home-content button:hover {
    background-color: #000000;
  }
</style>
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

<!-- Home Section -->
<div class="home">
  <img src="images/homepage.jpeg" alt="Homepage">
  <div class="home-content">
    <h1>PROMOTION</h1>
    <p>Enjoy exclusive monthly and seasonal promotions with special discounts and limited-time deals. Check back often for fresh offers!</p>
    <button onclick="location.href='Shop.php'">MONTHLY PROMOTION</button>
    <button onclick="location.href='aboutUs.php'">SEASONAL PROMOTION</button>
  </div>
</div>
  
  <!-- Categories Section-->
  <div class="container-1">
      <br>
      <main class="grid">
        <article>
        <a href="chipsmore.php">
        <img height="500px"src="images/chipsmore.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Chipsmore</button>
          </div>
        </article>
  
        <article>
        <a href="cola.php">
        <img height="500px"src="images/cola.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Cola</button>
          </div>
        </article>
  
        <article>
        <a href="heaven2.php">
        <img height="500px"src="images/h&e2.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Heaven & Earth</button>
          </div>
        </article>

        <article>
        <a href="meesedap.php">
        <img height="500px"src="images/meesedap.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Mee Sedap</button>
          </div>
        </article>
  
        <article>
        <a href="mister.php">
        <img height="500px"src="images/mister.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Mister Potato</button>
          </div>
        </article>
  
        <article>
        <a href="munchys.php">
        <img height="500px"src="images/munchys.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Munchys</button>
          </div>
        </article>

        <article>
        <a href="oden.php">
        <img height="500px"src="images/oden.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Oden</button>
          </div>
        </article>
  
        <article>
        <a href="pepsi.php">
        <img height="500px"src="images/pepsi.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Pepsi</button>
          </div>
        </article>
  
        <article>
        <a href="Waffle.php">
        <img height="500px"src="images/waffle.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button href="">Waffle</button>
          </div>
        </article>
      </main>
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