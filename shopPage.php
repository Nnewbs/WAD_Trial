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
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="JS/script.js"></script>

    <style>
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
    
      td{
        color: white;
      }

      img {
          width: 100% !important;
          height: 150px !important;
          object-fit: contain
      }

    /*responsive*/
      @media(max-width: 581px){
        .row{
          margin-top: 25px;
        }
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

  <div class="container">
    <div class="row">
      <div class="col-md-7" style="margin-top: 130px;">
        <div class="row">
          <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($dbconn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            // echo $row['id'] ." ". $row['name'] ." ". $row['image'] ." ". $row['price']."<br>";
          ?>


          <div class="col-md-3 text-center mt-5">
            <img src="images/<?php echo $row['filename']?>" alt="">
            <h6 style="color: #ffff; overflow: hidden;"><?php echo $row['name']?></h6>
            <p style="color: #ffff;">Price: <?php echo $row['price']?></p>
            <div class="form-group">
              <label style="color: #ffff;">Select list:</label>
              <select class="form-control" id="quantity<?php echo $row['id']?>">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              
              <input type="hidden" id="name<?php echo $row['id']?>" value='<?php echo $row['name']?>'>
              <input type="hidden" id="price<?php echo $row['id']?>" value='<?php echo $row['price']?>'>
              <button class='btn btn-danger add' data-id="<?php echo $row['id']?>">Add to Cart</button>
          </div>
</div>

<?php
}

?>

</div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4" style="color: #ffff;">
            <h3 class='text-center' style="color: #ffff; margin-top: 45%;"> Checkout</h3>
            <div id="displayCheckout">
            <?php
                if(!empty($_SESSION['cart'])){
                    $outputTable = '';
                    $total = 0;
                    $outputTable .= "<table class='table table-bordered'>
                    <thead>
                      <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Action</td>
                      </tr>
                    </thead>";
                    foreach($_SESSION['cart'] as $key => $value){
                        $outputTable .= "<tr><td>".$value['p_name']."</td><td>".($value['p_price'] * $value['p_quantity']) ."</td><td>".$value['p_quantity']."</td><td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button></td></tr>";
                        $total = $total + ($value['p_price'] * $value['p_quantity']);
                    }
                    $outputTable .= "</table>";
                    $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";
                    echo $outputTable;
                }
?>
            </div>
            </div>
        </div>
    </div>


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

    $(document).ready(function() {
         alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })

function deleteINsession(){
    removable_id = this.id;
    $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{
                      id_to_remove:removable_id,
                      action:'remove'
                },
                success:function(data){
                        $('#displayCheckout').html(data);
           alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });

}


        $('.add').click(function() {
            id = $(this).data('id');
            name = $('#name' + id).val();
            price = $('#price' + id).val();
            quantity = $('#quantity' + id).val();
              $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{
                      cart_id : id,
                      cart_name : name,
                      cart_price : price,
                      cart_quantity : quantity,
                      action:'add'
                },
                success:function(data){
                        $('#displayCheckout').html(data);
                        alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });

        })
    })
    </script>

</body>

</html>
