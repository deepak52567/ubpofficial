<!DOCTYPE html>
<?php
include('config.php');
$page_title = $_GET['bts_folder'];
$bts_folder = 'img/gallery/' . $_GET['bts_folder'] . '/';
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
            <p><?php echo $_GET['bts_folder']; ?></p>
          </div>
          <hr>
        </div>
        <div class="container showcase-pg">
          <?php 
            foreach (new DirectoryIterator($bts_folder) as $file) {
              if ($file->isDot()) continue;
              echo 
                "<a class='item' onclick='openModal();currentSlide(1)'>
                  <img src='" . $bts_folder . $file->getFilename() . "'/>
                </a>";
            }
          ?>
        </div>        
      </section>    
   	  <section id="myModal" class="fullscreen-player">
    		<div class="modal-content">    		
          <?php 
            foreach (new DirectoryIterator($bts_folder) as $file) {
              if ($file->isDot()) continue;
              echo 
                "<div class='mySlides'>
                  <img src='" . $bts_folder . $file->getFilename() . "'/>
                </div>";
            }
          ?>          
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
