<?php
    include("dbconn.php"); //$conn
    session_start();
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
    <h1>Promotion</h1>
    <p>Enjoy exclusive monthly and seasonal promotions with special discounts and limited-time deals. Check back often for fresh offers!</p>
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
            <button onclick="location.href='chipsmore.php'">Chipsmore</button>
          </div>
        </article>
  
        <article>
        <a href="cola.php">
        <img height="500px"src="images/cola.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='cola.php'">Cola</button>
          </div>
        </article>
  
        <article>
        <a href="heaven2.php">
        <img height="500px"src="images/h&e2.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='heaven2.php'">Heaven & Earth</button>
          </div>
        </article>

        <article>
        <a href="meesedap.php">
        <img height="500px"src="images/meesedap.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='meesedap.php'">Mee Sedap</button>
          </div>
        </article>
  
        <article>
        <a href="mister.php">
        <img height="500px"src="images/mister.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='mister.php'">Mister Potato</button>
          </div>
        </article>
  
        <article>
        <a href="munchys.php">
        <img height="500px"src="images/munchys.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='munchys.php'">Munchys</button>
          </div>
        </article>

        <article>
        <a href="oden.php">
        <img height="500px"src="images/oden.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='oden.php'">Oden</button>
          </div>
        </article>
  
        <article>
        <a href="pepsi.php">
        <img height="500px"src="images/pepsi.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='pepsi.php'">Pepsi</button>
          </div>
        </article>
  
        <article>
        <a href="Waffle.php">
        <img height="500px"src="images/waffle.jpg" alt="" width="100%">
        </a>
          <div class="texts">
            <h3></h3>
            <button onclick="location.href='waffle.php'">Waffle</button>
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

<!--Footer-->
<div id="footer-frame"></div>

<script>
$(function(){
  $("#footer-frame").load("footer.html");
});
</script>
<!--end of Footer-->
</body>
</html>