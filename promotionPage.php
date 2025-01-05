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
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<style>
	.grid > article{
		width: 350px;
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