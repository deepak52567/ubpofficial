<!DOCTYPE html>
<?php
include('config.php');
$page_title = "MUSIC PRODUCTION";
$tagline = "MUSIC<br>PRODUCTION";
$scrollheader = 'href="#services" data-scroll="services"';
?>
<script> var headerColor = '#673ab7'; </script>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .filler .titlecontainer hr{
      background: #673ab7;
    }
    .filler .tagline{
		  color: #673ab7;
    }
    @media (max-width: 768px) {
      .filler {
        background-position: center !important;
      }
    }
  </style>
  <body>
    <?php
        include('header.php');
    ?>
    <div class="main">
      <?php
        include('fullscreen-player.php');
		  ?>
      <?php
        include('backgroundvideooverlay.php');
      ?>
      <section class="filler service-pg" id="services" data-anchor="serivces" style="background: url('img/for_bg_4.jpg'); background-position: right; background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
        <div class="tagline" style="color: #4DD0E1;"><h2>We Create Artist</h2></div>
        <div class="hero-detail">
          <p>Give your composition a new face with our the soulfull and geniune music. We can provide you the platform you needed to show the world your talent with help of working with our professionals. We guide the fresh artists step by step, to learn the process of song composition and we make sure its up-to-the-quality always. We provide all Genre of Music with live instruments like Guitar, Tabla, Tumbi, Violin and many more.</p>
          <br>
          <p>Background Score Production Also Available For Documentary, Films, Vines, Daily Shows etc.</p>
        </div>
      </section>
      <section class="filler service-pg" style="background: url('img/music_bg_fl.png') #9e9e9e; background-position: left; background-size: contain; background-attachment: fixed; background-repeat: no-repeat; align-items: flex-end;">
        <div class="tagline" style="color: #ffbd22;"><h2>We Work On Best</h2></div>
        <div class="hero-detail">
          <p>Some of the best music production application available on the market right now is being used at our studio. So that you can get the best quality tracks for your composition.</p>
          <br><br>
          <div class="service-provide">
            <h4>Genres</h4>
            <p>Hip-Hop | Bollywood | RnB | Trap | EDM & More</p>
          </div>
        </div>
      </section>
      <section class="filler service-pg" style="background: url('img/music_bg(edit).jpg'); background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
        <div class="tagline" style="color: #58f599;"><h2>Training</h2></div>
        <div class="hero-detail">
          <p>We also facilitate Music Production Training. And how are we different from others?<br>Music have its emotional value first. You have to feel it before creating it and by awaring you about the rythem and patterns of music. We make you understarnd the core of it.</p>
          <br><br>
          <div class="service-provide">
            <h4>Platform</h4>
            <p>FL STUDIO & CUBASE | <b>Duration</b> - 12 Classes for 1 month</p>
          </div>
        </div>
        <!-- <div class="titlecontainer" style="margin-top: 3em;">
          <div class="title" style="font-size: 1.5rem;">
            <p>For Music Samples Check Some Links Below</p>
          </div>
          <hr>
        </div>
        <div class="container">
          <?php
              $result=mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
              include 'projects_item.php';
          ?>
        </div> -->
        <!--
        <div class="titlecontainer" style="margin-top: 5%;">
              <div class="title" style="font-size: 1.5rem;">
                  <p>For Backgroud Score Quality Check</p>
              </div>
              <hr>
          </div>
          <div class="container">
              <?php
                  $result=mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat = 'movie' ORDER BY id DESC");
                  include 'projects_item.php';
              ?>
          </div> -->
      </section>
      <section class="filler service-pg" style="padding-bottom: 0; background: url('img/cover.jpg'); background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; justify-content: flex-end;">
        <a class="view-all-button" style="align-self:center; background: #2f3541;" href="projects">Contact Us</a>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
