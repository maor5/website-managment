<!doctype html>
<html lang="en">
  <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title class="our"> Shoes store </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css" >
    <script src="javas1.js"></script>
    
  </head>		
  <body>
	<section>
	<header>
			<nav class="nav" class="navbar navbar-light" style="background-color: #e3f2fd;">
				  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Shoes store</a>
					<img class="logo_pic" src="https://image.flaticon.com/icons/svg/69/69986.svg"  alt="logo";>
					<div class="popup"><ul> <li class="double"><p class="adi-idea">name:<span class="product-name"></span>price:<span class="price-product"></span>amount:<span class="amount-product"></span> <button class="remove_button">remove</button><span class="product-id" style="display:none;"></span></p></li></ul><span class="output"></span>
						total: <span class="total-price">0</span>$ <span> 
							
						
						<form action="order1.php" method="post" id="form">
						<!-- <label>first name: <input name="FirstName " type="text" /></label> -->
						<input id="order-button" disabled type="submit" value="place order"/>
						</form>
						<button id="close"> close</button></span>
				   </div>
				   
				   <?php if(isset($checkout) && $checkout){ ?>
				   <a class="nav-link active" href="main.php">Back to home</a>
				   <?php } else{ ?>
				  <a class="nav-link active" href="#">Home</a>
				  
				  <a class="nav-link" href="#about">About</a>
				  <a class="nav-link" href="#contact_us">Contact</a>
				   <?php } ?>
			</nav>
		</header>