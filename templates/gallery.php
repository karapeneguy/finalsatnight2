<?php include "templates/header.php"; 

$gallery = array(
      array("In My Place", "filllater", "inmyplace.php" ),
    array("idk JACK", "440227089%3Fsecret_token%3DsJt9md&color=%231b1b1b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true", "idkjack.php" ),
    array("Unfortunate Affair", "filllater", "unfortunateaffair.php" ), 
);
    

?>

<h1>Music</h1>

<?php 

///php here
foreach($gallery as $item){
    ?>

<!-- now plain html here -->

<div  class="gallery-item">
    
<!-- 1. Song Title -->   
<h3><?php echo $item[0]; ?></h3>
    
  
    
   
   
    <!-- 2. Soundcloud --> 
   <iframe id="soundcloudplayer" width="60%"  height="166"  scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $item[1] ?>"></iframe>
    
    <br>
    
    <!-- 3. Lyrics --> 
     <button class="lyrics"><a href="<?php echo $item[2] ?>">Download Lyrics</a></button>
  
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