<!DOCTYPE html>
<?php
include('config.php');
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    header {
      background: #03a9f4;
    }
  </style>
  <body>
  <?php
	include('header.php');
	include('sidenav.php');
  ?>
    <div class="main">
      <section class="filler top-fix" id="gallery">
        <div class="titlecontainer">
          <div class="title">
            <p>GALLERY</p>
          </div>
          <hr>
        </div>
        <div class="container showcase-pg">
    			<div class='item' onclick="openModal();currentSlide(1)">
    				<img src='/img/gallery/jhoothewadein/1.jpg'/>
    			</div>
    			<div class='item' onclick="openModal();currentSlide(1)">
    				<img src='/img/gallery/jhoothewadein/2.jpg'/>
    			</div>
          <div class='item' onclick="openModal();currentSlide(1)">
    				<img src='/img/gallery/jhoothewadein/1.jpg'/>
    			</div>
          <div class='item' onclick="openModal();currentSlide(1)">
    				<img src='/img/gallery/jhoothewadein/4.jpg'/>
    			</div>
  		  </div>
      </section>    
   	  <section id="myModal" class="fullscreen-player">
    		<div class="modal-content">
    			<div class="mySlides">
    				<img src="/img/gallery/jhoothewadein/1.jpg">
    			</div>
    			<div class="mySlides">
    				<img src="/img/gallery/jhoothewadein/2.jpg">
    			</div>
                <div class="mySlides">
            <img src="/img/gallery/jhoothewadein/1.jpg">
          </div>
          <div class="mySlides">
            <img src="/img/gallery/jhoothewadein/4.jpg">
          </div>
          <div class="nav-modal-content">
            <div class="nav-button">
              <i class="material-icons button" onclick="$('.fullscreen-player').css('display', 'none');" style="font-size: 1.4rem; padding: 0.8em;">close</i>
            </div>
            <div class="nav-button">
              <i class="material-icons button" onclick="plusSlides(-1)">chevron_left</i>
              <i class="material-icons button" onclick="plusSlides(1)">chevron_right</i>
            </div>
            <div class="nav-button">
              <i class="material-icons button" style="color: #f0f8ff00; cursor: none;">close</i>
            </div>
          </div>
    		</div>
  	  </section>
    </div>
    <?php include('footer.php'); ?>
    <script>
		function openModal(){
			document.getElementById('myModal').style.display = "flex";
		}

		function closeModal(){
			document.getElementById('myModal').style.display = "flex";
		}

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
			var slides = document.getElementsByClassName("mySlides");
			if(n > slides.length) {slideIndex = 1}
			if(n < 1) {slideIndex = slides.length}
			for(i = 0; i < slides.length; i++){
				slides[i].style.display = "none";
			}
			slides[slideIndex-1].style.display = "flex";
		}
	</script>
  </body>
</html>
