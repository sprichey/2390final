<?php
define ("TITLE", "Our Prices | Spring Flowers");

include('includes/header.php');



if (isset($_GET['item'])) {

    $prices =  $_GET['item'];

    $bouquet = $prices [$price];
}









?>

<div id="bouquet">

 
               <h1><?php echo $bouquet["title"]; ?><span class="price"><sup>$</sup><?php echo $bouquet["price"]; ?></span></h1>
               <p><?php echo $bouquet["blurb"]; ?></p>


</div>








<a href="prices.php" class="button previous">&laquo; Back to Prices</a>

<?php include('includes/footer.php'); ?>