<?php include "templates/header.php"; 

$gallery = array(
    array("In My Place", "bluewallfull.jpg", "https://www.spotify.com", "artist/1cozCwdlKSBmz3pjz7rr5S"), 
    array("idk JACK", "cactus.jpg"),
    array("The Difference", "loyolasunset.jpg"),
    array("Icarus", "chandeleir.jpg"),
    array("Rolling (All my girls)", "oldtheater.jpg"),
    array("Drag Me Down", "marketamsterdam.jpg"),
    array ("Lord, Can you?", "calisunset.jpg"),
    array("Hide & Seek", "edittap.jpg"), 
    array("Unfortunate Affair", "oldcar.jpg"), 
    array ("Scar Tissue", "staringinbed.jpg"),

    
    
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
    
    <!-- 2. Image --> 
    <img width="300" src="assets/images/<?php echo $item[1] ?>">
    
    <!-- 3. Spotify -->  
    
      <a href="https://open.spotify.com/<?php echo $item[2] ?>" target ="_blank">
    <img src="assets/badges/Spotify-Badge.png" href>
        </a>
    
    <!-- 4. Apple Music -->  
       <a href="https://www.apple.com/apple-music/<?php echo $item[3] ?>" target ="_blank">
    <img src="assets/badges/Apple_Music_Store_Small_Badge_RGB.svg" href>
        </a>
   
    <!-- 5. Google Play Music --> 
     <a href="https://play.google.com/music/listen<?php echo $item[4] ?>" target ="_blank">
    <img src="assets/badges/google-play-badge.png" href>
    
    <!-- 6. Soundcloud --> 
           <a href="  https://soundcloud.com/<?php echo $item[5] ?>" target ="_blank">
    <img src="assets/badges/soundcloud.png" href>
         
       
    
    <!-- 7. Lyrics --> 
     <button><a href="<?php echo $item[6] ?> target ="_blank"">Download Lyrics</a></button>
  
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