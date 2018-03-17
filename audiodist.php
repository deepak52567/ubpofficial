<!DOCTYPE html>
<?php
  include('config.php');
  $page_title = $tagline = "AUDIO DISTRIBUTION";
	$scrollheader = 'href="#services" data-scroll="services"';
?>
<script> var headerColor = '#e91e63'; </script>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
  .fullscreen-background {
      /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
      background: #e91e63;
  }
	.filler .titlecontainer hr{
		background: #e91e63;
	}
  </style>
  <body>
    <?php
  	include('header.php');
    ?>
    <div class="main">
      <?php
        include('backgroundvideooverlay.php');
      ?>
      <section class="filler" id="services" data-anchor="serivces" style="background-image: url('img/for_bg.jpg') no-repeat cover">
        <div class="container service-pg">
          <div class='item'>
			      <h2>Worldwide With Us</h2><br>
  					<p>We provide audio distribution globally makes it easy to get your
              music into iTunes, Savan, Amazon, Spotify, Shazaam and many digital
              store partners in minimal charges of Rs.500/-.<br><br>Content Copyright facility also included in this audio distribution package for your content Security and Rights.</p>
  					<div class="distributers">
  						<img src="img/itunes-logo-transparent.png">
  						<img src="img/Saavn-Logo.png">
  						<img src="img/amazon-music-logo.png">
  					</div>
				  </div>
        </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>

</html>
