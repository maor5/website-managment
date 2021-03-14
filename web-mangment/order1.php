


    <?php
		include("products.php");
		
		$p = array();
		foreach($_POST as $k=>$v){
			$productID = str_replace('product_','',$k);
			foreach($products as $_p){
				if($_p['id'] == $productID){
					$item = $_p;
					$item['count'] = $v;
					
					$p[] = $item;
				}
			}
		}
		
		$checkout = true;
        include('./header1.php');
		
		$total = 0;
        ?>
		<section>
			<h1>Your Order:</h1>
			<table class="table">
				<tr><th>Name</th><th>Price</th><th>Count</th><th>Total</th></tr>
			<?php foreach($p as $_p){ $total += $_p['count']*$_p['price']; ?>
				<tr><td><?php echo $_p['name'] ?></td><td><?php echo $_p['price'] ?>$</td><td><?php echo $_p['count'] ?></td><td><?php echo $_p['count']*$_p['price'] ?>$</td></tr>
			<?php } ?>
				<tr><th></th><th></th><th>Count</th><th><?php echo $total; ?></th></tr>
			</table>
    <?php
      include('./footer1.php');
        ?>






      
    
  
