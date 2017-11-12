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
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
