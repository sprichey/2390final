

<?php
define("TITLE", "Spring | Spring Flowers");
   include('includes/header.php');
   ?>

   <div id="spring" class="cf">

   <h1>Spring Flowers</h1>
   <p>As the winter frosts fade and the days get longer, it’s time to start preparing and planning your gardens for spring. If you plan ahead, you can have flowers pop up starting in these still chilly months all the way through the dog days of summer. Whether you prefer annuals to replant each year or perennials for a consistent return, these bold blooms will bring you springtime cheer after this long, dark winter.</p>

   <hr>

   <?php
     foreach ($spring as $flower){
 ?>


  <div class="flower">

  <img src="img/<?php echo $flower[img]; ?>.png" alt="<?php echo $flower[name]; ?>">
  <h2><?php echo $flower[name]; ?></h2><br>
  <p><?php echo $flower[month];?></p>
</div><!--flower div --><br><br><br><br>





 <?php
     }
     ?>

</div> <!--spring div-->



<?php
   include('includes/footer.php');
   ?>

