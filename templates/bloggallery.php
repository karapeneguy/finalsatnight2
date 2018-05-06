<?php include "templates/header.php"; 

$gallery = array(
    array("the intro", "bluewallfull.jpg", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).", "postone.php" ), 
    array("idk JACK", "cactus.jpg", ),
    array("The Difference", "loyolasunset.jpg"),
 

    
    
);
    
    



?>

<h1>Blog</h1>

<?php 

///php here
foreach($gallery as $item){
    ?>

<!-- now plain html here -->

<div  class="gallery-item">
    
<!-- 1. Song Title -->   
<h3><?php echo $item[0]; ?></h3>
    
    <!-- 2. Image --> 
    <img width="300" src="assets/images/<?php echo $item[1] ?>">
    
   <!-- Paragrah -->
<P><?php echo $item[2] ?> </P>
    
    <!-- Read More --> 
     <button><a href="<?php echo $item[3] ?>" >Read More</a></button>

  
</div>
<hr>

<?php 
//back to php
    

}?>
    
 


<?php include "templates/footer.php"; ?>






<?php

 //echo "<h2>". $item . "<h2>";   
   // echo "<h2>Name of Song:</h2>";
   // echo $item;

?>



<!-- 3. Youtube 
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $item[2] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --> 