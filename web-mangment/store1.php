<article>
    <div class="products">
		<h1> our products </h1>
		<br>
		<div class="card-deck">
          <?php  $count=0; ?>
        <?php foreach($products as $key=>$value ) {
            if($count%3==0){?>
            </div>
                <br> <br>
                <div class="card-deck">
         <?php }?>
			  <div class="card" id="<?php echo $value['id'] ?>" >
				<img src="<?php echo $value['img'] ?>" class="card-img-top" alt="<?php echo $value['name'] ?>">
				<div class="card-body">
				  <h5 class="card-title"><?php echo $value['name'] ?> </h5>
				  <p class="card-text"> <?php echo $value['description'] ?></p>
				  <h6 class="price" > <?php echo $value['price'] ?> $</h6>
				</div>
				<button type="button" class="btn btn-outline-dark">add to cart</button>
              </div>
          <?php  $count++;?>
       <?php }?>

            </div>
            <!-- Button trigger modal -->

    </div>