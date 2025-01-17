<?php
    include("dbconn.php"); // Connection to the database if needed for dynamic content
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script type="text/javascript" src="JS/script.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .about-section {
            background: url('images/about-bg.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
            
        }

        .about-section h1 {
            color:black; 
        }

        .about-section p {
            color:black; 
        }

        .team-section {
            padding: 50px 0;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-member h5 {
            margin-top: 15px;
        }

        .values-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .values-section h3 {
            margin-bottom: 30px;
        }

        .values-section .value-box {
            text-align: center;
            padding: 20px;
        }

        .value-box i {
            font-size: 40px;
            color: #ff6347;
            margin-bottom: 15px;
        }

        .value-box h5 {
            margin-top: 15px;
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

<!-- About Section -->
<div class="about-section">
    <h1>About</h1>
    <p>Your one-stop shop for affordable essentials and fresh finds. Simplifying life for students.</p>
    <p><br><b>Opening Hours:</b></br>
    Monday - Sunday: 10:00AM - 10:00PM</p>

</div>

<!-- Values Section -->
<div class="values-section container text-center">
    <h3>Our Values</h3>
    <div class="row">
        <div class="col-md-4 value-box">
            <i class="fa fa-smile-o"></i>
            <h5>Customer Happiness</h5>
            <p>We prioritize making your shopping experience delightful and stress-free.</p>
        </div>
        <div class="col-md-4 value-box">
            <i class="fa fa-leaf"></i>
            <h5>Eco-Friendly</h5>
            <p>Committed to sustainable practices that support the planet.</p>
        </div>
        <div class="col-md-4 value-box">
            <i class="fa fa-heart"></i>
            <h5>Community Focus</h5>
            <p>Dedicated to helping students thrive with affordable essentials.</p>
        </div>
    </div>
</div>

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
