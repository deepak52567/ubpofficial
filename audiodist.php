<!DOCTYPE html>
<?php
  include('config.php');
  $page_title = $tagline = "AUDIO DISTRIBUTION";
	$scrollheader = 'href="#services" data-scroll="services"';
?>
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
  	include('sidenav.php');
    ?>
    <div class="main">
      <?php
        include('backgroundvideooverlay.php');
      ?>
      <section class="filler" id="services" data-anchor="serivces">
        <div class="container service-pg">
          <div class='item audio-dist common-pg-layout'>
			<div class="right-container">
				<div class="service-provide">
					<h2>Worldwide With Us</h2>
					<p>We provide audio distribution globally makes it easy to get your
            music into iTunes, Savan, Amazon, Spotify, Shazaam and many digital
            store partners in minimal charges of Rs.500/-.<br><br>Content Copyright facility also included in this audio distribution package for your content Security and Rights.</p>
					<div class="distributers">
						<img src="/img/itunes-logo-transparent.png">
						<img src="/img/Saavn-Logo.png">
						<img src="/img/amazon-music-logo.png">
					</div>
				</div>
			</div>
		  <div class="left-container">
				<img src="/img/Audio Distribution.png">
			</div>
          </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
  <script>
    $(window).scroll(function() {
      var windscroll = $(window).scrollTop();
      if(windscroll >= 400){
        $('header').css('background', '#e91e63');
      }
      else{
        $('header').css('background', 'none');
      }
    });
  </script>
</html>
