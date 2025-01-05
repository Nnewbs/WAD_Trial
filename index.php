<?php
	session_start();
	include("dbconn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAVI MART</title>
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
  $("#navbar-frame").load("navbar1.html");
});
</script>
<!--end of Navigation bar-->

<!-- Home Section -->
<div class="home">
  <img src="images/homepage.jpeg" alt="Homepage">
  <div class="home-content">
    <h1>PAVI MART</h1>
    <p>Your one-stop convenience store offering delicious oden, quick instant meals, 
      and all the essentials you need. From snacks to necessities, 
      we’re here to make your day easier and more satisfying</p>
    <button onclick="location.href='shopPage.php'">VIEW MENU CARD</button>
    <button onclick="location.href='aboutUs.php'">OPENING HOURS</button>
  </div>
</div>
  
  <!-- Categories Section-->
  <div class="container-1">
      <br><br>
      <p class="middle"> Categories </p>
      <main class="grid">
        <article>
        <img height="500px"src="images/mister.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="">Snack</button>
          </div>
        </article>
  
        <article>
        <img height="500px"src="images/waffle.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="product.php">Fresh Food</button>
          </div>
        </article>
  
        <article>
          <img height="500px"src="images/cola.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button>Drinks</button>
          </div>
        </article>
      </main>
  </div>

  <!-- Promotion Section-->
  <div class="container-1">
    <br><br>
    <p class="middle"> Promotion </p>
    <main class="grid">
      <article>
      <img height="500px"src="images/oden.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="">Oden Combo Set</button>
        </div>
      </article>

      <article>
      <img height="500px"src="images/chipsmore.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="product.php">Breakfast Pack</button>
        </div>
      </article>

      <article>
        <img height="500px"src="images/mister.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button>Snack Bundle Deals</button>
        </div>
      </article>
    </main>
</div>

  <!-- Student's Favourite Section -->
  <div class="container-1">
    <br><br>
    <p class="middle"> Student's Favourite </p>
    <main class="grid">
      <article>
      <img height="500px"src="images/oden.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="">Oden's Cup</button>
        </div>
      </article>

      <article>
      <img height="500px"src="images/pepsi.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="product.php">Pepsi</button>
        </div>
      </article>

      <article>
        <img height="500px"src="images/meesedap.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button>Mee Sedap Original Cup 70g</button>
        </div>
      </article>
    </main>
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