
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOP</title>
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
    
    .home-content h1 {
    margin-top: 10%;
    font-size: 50px;
    color: white;
    text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7);
    text-align: center;
    }

    .home-content p {
    font-size: 20px;
    color: white;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    text-align: center;
  }

  .form-container {
      display: flex;
      justify-content: center;
    }

    form.box {
      display: flex;
      max-width: 300px;
      width: 100%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    form.box input[type="text"] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      flex: 1;
      background: #f1f1f1;
    }

    form.box button {
      width: 20%;
      padding: 10px;
      background: #778899;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }

    form.box button:hover {
      background: #696969;
    }
  </style>
</head>
<body>

  <div class="home">
    <div class="home-content">
      <h1>SHOP</h1>
      <p>Affordable essentials and fresh finds, just for students. Shop smart, live easy!</p>
    </div>
    <div class="form-container">
      <form class="box" method="post" action="searchButton.php">
        <input type="text" name="search" placeholder="Search..">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>

  <!-- Categories Section-->
  <div class="container-1">
      <br>
      <main class="grid">
        <article>
        <img height="500px"src="images/men1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="">Snack</button>
          </div>

        </article>
  
        <article>
        <img height="500px"src="images/women1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="product.php">Fresh Food</button>
          </div>
        </article>
  
        <article>
          <img height="500px"src="images/acc1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button>Bake Goods</button>
          </div>
        </article>

        <article>
        <img height="500px"src="images/men1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="">Snack</button>
          </div>
        </article>
  
        <article>
        <img height="500px"src="images/women1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="product.php">Fresh Food</button>
          </div>
        </article>
  
        <article>
          <img height="500px"src="images/acc1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button>Bake Goods</button>
          </div>
        </article>

        <article>
        <img height="500px"src="images/men1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="">Snack</button>
          </div>
        </article>
  
        <article>
        <img height="500px"src="images/women1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="product.php">Fresh Food</button>
          </div>
        </article>
  
        <article>
          <img height="500px"src="images/acc1.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button>Bake Goods</button>
          </div>
        </article>
      </main>
  </div>

</body>
</html>