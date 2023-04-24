<?php
	
	define("TITLE", "Our Prices | Spring Flowers");
	
	include('includes/header.php');
	
	?>
	
	<div id="prices">


	                            <h1>Bouquet Prices</h1>
	              <p>If you don't have time to plant a garden of flowers but would love them in your home, office, or to send as a gift we have you covered! We offer these beautiful flowers in bouquets.</p>
	                  <p><em>Click any item for more information.</em></p>

     	<ul>
		            <?php foreach ($prices as $bouquet => $item) { ?>

			                  <li><a href="bouquet.php?item=<?php echo $bouquet; ?>"><?php echo $item["title"]; ?></a><sup>$</sup><?php echo $item["price"]; ?></li>
			                  
							  


			                   <?php } ?>
	    </ul>














	</div><br><br><br><br>







	



	
	
	

	
	
		
	
			
<?php include('includes/footer.php'); ?>
