<!DOCTYPE html>
<?php
  include('config.php');
  $tagline = "ABOUT<br>OUR PRODUCTION";
  $scrollheader='href="#about" data-scroll="services"';
?>
<script> var headerColor = '#03a9f4'; </script>
<html lang="en">
  <?php include('head.php'); ?>

  <body>
    <?php include('header.php'); ?>
    <div class="main">
      <?php include 'backgroundvideooverlay.php'; ?>
        <section class="filler" id="about">
          <div class="titlecontainer">
            <div class="title">
              <p>ABOUT</p>
            </div>
            <hr>
          </div>
            <div class="container about">
              <div class="quote">
                <p>"Music is Not what I Do, It's Who I am"</p>
                <img src="img/logo-about.jpg">
              </div>
              <div class="main-about">
                <p>Urban Blue is a production house best known for its Music and video production.
                  <br>
                  <br>It was founded by Mr. Vishal Kumar(LATx) in July 2014 and since then we have produced more than 100 hit
                  music tracks and videos one after another. We believe in supporting great talents with our outstanding
                  quality of work to make their talent more effective and more visible to the audience. Our only aim is to
                  take the quality of music and video production to the next level in affordable price! Apart from producing
                  complete music tracks and video projects we also provide different services like mixing-mastering, photo/video
                  editing, recording studio, Online promotion, Audio distribution, training in music production and sound
                  engineering.
                  <br>
                  <br>We have a hardworking and talented team of writers, music composers, editors, cameramen and recordists
                  who work to provide our clients the best quality work under the direction of the founder of Urban Blue
                  production, Mr. Vishal Kumar(LATx) who himself is a master in the field of music and video production!
                  </p>
              </div>
            </div>
          </section>
      </div>
      <?php include('footer.php'); ?>
  </body>

</html>
