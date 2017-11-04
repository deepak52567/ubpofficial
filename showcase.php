<!DOCTYPE html>
<?php
include('config.php');
?>
<html lang="en">
  <?php include('head.php'); ?>
  <body>
  <?php
	include('header.php');
	include('sidenav.php');
  ?>
    <div class="main">
      <section class="filler top-fix" id="gallery">
        <div class="showcase-con">
          <div class="image-crousal">
            <div class="crousal-slide fade">
              <img id="image-showcase" src="/img/gallery/jhoothewadein/1.jpg" />
              <div class="numberText">1/4</div>
            </div>
            <div class="crousal-slide fade">
              <img id="image-showcase" src="/img/gallery/jhoothewadein/2.jpg" />
              <div class="numberText">2/4</div>
            </div>
            <div class="crousal-slide fade">
              <img id="image-showcase" src="/img/gallery/jhoothewadein/3.jpg" />
              <div class="numberText">3/4</div>
            </div>
            <div class="crousal-slide fade">
              <img id="image-showcase" src="/img/gallery/jhoothewadein/4.jpg" />
              <div class="numberText">4/4</div>
            </div>
          </div>
          <div class='detail'>
            <div class='left-container'>
              <p class='title'>Sadda Sach</p>
              <p class='sub-title'>Rajat Dhir RD</p>
            </div>
            <div class="right-container">
              <div class="arrow" onclick="plusSlides(-1)"><i class="material-icons">chevron_left</i></div>
              <div class="arrow" onclick="plusSlides(1)"><i class="material-icons right">chevron_right</i></div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript">
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n){
        showSlides(slideIndex += n);
      }
      function currentSlide(n){
        showSlides(slideIndex = n);
      }
      function showSlides(n){
        var i;
        var slides = (document.getElementsByClassName("crousal-slide"));
        if(n > slides.length){slideIndex = 1}
        if(n < 1){slideIndex = slides.length}
        for(i=0; i < slides.length; i++){
          slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "flex";
      }
    </script>
  </body>
</html>
