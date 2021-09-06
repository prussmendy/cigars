<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php include "header.php"; ?>
<script> $("#slideshow > div:gt(0)").hide();
$(document).ready(function(){
setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);}); 
        </script>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <h2>Mendy's Cigars</h2>
        <p>
          
        </p>
            <div id="slideshow">
   <div>
       <img src="cigar.jfif">
   </div>
   <div>
       <img src="cigar1.jfif">
   </div>
   <div>
       <img src="cigar2.jfif">
   </div>
</div>
        
<?php include "footer.php"; 