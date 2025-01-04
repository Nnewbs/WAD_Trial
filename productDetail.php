<!doctype html>
<html>
   <head>
	   <title>Tie-detail sun hat</title>
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
        <img class="product" src="images/7.jpg" alt="Tie-detail sun hat" style="max-width: 100%; height: auto;">
      </td>
      <!-- Product Details Column -->
      <td style="width: 50%; vertical-align: top; padding: 20px;">
        <form>
          <span style="font-size: 18px; color: gray;">Accessories / Hat / Bucket</span>
          <h1 style="font-size: 28px; margin: 10px 0;">Tie-detail Sun Hat</h1>
          <p style="font-size: 24px; font-weight: bold; margin: 10px 0; color: #444;">RM39.95</p>
          <br>
          <h3 style="font-size: 22px; margin-bottom: 10px;">Product Details</h3>
          <p style="font-size: 16px; line-height: 1.6; color: #555;">
            - Solid tone towel fabric bucket hat<br>
            - Cotton<br>
            - Slip-on<br>
            - Inner lining<br>
            - Wide brim
          </p>
        </form>

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
      </td>
    </tr>
  </table>
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

    </script>

</body>
</html>