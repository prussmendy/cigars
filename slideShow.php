
<!DOCTYPE html>
<html>
  <head>
    <title>JQSlider</title>
    <link rel="stylesheet" href="css/style1.css">
    <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
    
<script>
$(document).ready(function(){
  $('.next').on('click', function(){
    var currentImg = $('.active');
    var nextImg = currentImg.next();

    if(nextImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      nextImg.addClass('active').css('z-index', 10);
    }
  });

  $('.prev').on('click', function(){
    var currentImg = $('.active');
    var prevImg = currentImg.prev();

    if(prevImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      prevImg.addClass('active').css('z-index', 10);
    }
  });
});
</script>

  </head>
  <body>
    <div class="container">
      <h1>JQSlider</h1>
      <div class="slider-outer">
        <img src="images/arrow-left.png" class="prev" alt="Prev">
        <div class="slider-inner">
          <img src="images/image1.jpg" class="active">
          <img src="images/image2.jpg">
          <img src="images/image3.jpg">
          <img src="images/image4.jpg">
        </div>
        <img src="images/arrow-right.png" class="next" alt="Next">
      </div>
    </div>
  </body>
</html>







