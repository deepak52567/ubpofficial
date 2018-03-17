<!DOCTYPE html>
<?php
  require_once 'config.php';
  $page_title = $tagline = "MIXING<br>&<br>MASTERING";
  $scrollheader = 'href="#services" data-scroll="services"';
?>
<script> var headerColor = '#8bc34a'; </script>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .filler .titlecontainer hr{
      background: #8bc34a;
    }
    .view-all-button{
        background: #009688 !important;
    }
  </style>
  <body>
    <?php
        include('header.php');
    ?>
    <div class="main">
      <?php
        include('backgroundvideooverlay.php');
        include('fullscreen-player.php');
      ?>
      <section class="filler service-pg" id="services" data-anchor="serivces" style="background: url('img/for_bg_4.jpg'); background-position: right; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; align-items: flex-end;">
        <div class="tagline" style="width: 50%; color: #4DD0E1;"><h2>The Soul Of Audio</h2></div>
        <div class="hero-detail" style="width: 50%;">
          <p>A song is produced in two parts. First half is your music, instrument and
          other effects. Then second half is your Mixing Mastering layer.<br><br>Without it your audio will sound
          rough, boxy, tight and type of noisy which will drastically affect your song in a negative way.
          By Mixing and Mastering your audio, we will give his own space to every instrument, vocals and sounds.
          <br><br><b>Humor us please, we are the Sherlock Holmes of Mixing Mastering.</b></p>
        </div>
      </section>
      <section class="filler service-pg" id="services" data-anchor="serivces" style="background: url('img/for_bg_4.jpg'); background-position: right; background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
        <div class="tagline" style="width: 50%; color: #4DD0E1;"><h2>What You Need?</h2></div>
        <div class="hero-detail" style="width: 50%;">
          <p>We do the mixing-mastering on the audio as per the artist requirements. But above all, quality is our priority.
          <br><br>Mixing & Mastering is included in all our combos of audio and video production FOC.
          <br><br><b>For seperate Mixing & Mastering on your track:</b></p>
        </div>
        <a class="view-all-button" href="projects">Contact Us</a>
      </section>
      <section class="filler service-pg" id="services" data-anchor="serivces" style="background: url('img/for_bg_4.jpg'); background-position: right; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; align-items: flex-end;">
        <div class="tagline" style="width: 50%; color: #4DD0E1;"><h2>Mixing Mastering<br>Training</h2></div>
        <div class="hero-detail" style="width: 50%;">
          <p>Become a master in Mixing & Mastering with our
          all-in-one affordable course package. For any further
          queries you are always welcome to contact us.</p>
          <div class="service-provide">
            <h4>Platform</h4>
            <p>FL STUDIO | CUBASE</p>
          </div>
        </div>
        <a class="view-all-button" href="projects">Contact Us</a>
      </section>
      <section class="filler">
          <div class="titlecontainer" style="margin-top: 5%;">
              <div class="title" style="font-size: 1.5rem;">
                  <p>Wanna Experience The Difference By Youself?</p>
              </div>
              <hr>
          </div>
          <div class="container audio-sam">
              <div class='item mix-master'>
                  <div class="detail service" style="color: white;"><p><b>UN-MIXED & UN-MASTERED</b><br>SONG: Fire Jatti</p></div>
                  <div class="icon">
                  <i class="material-icons">music_note</i>
                  </div>
                  <div class='detail service' style="background: white;">
                          <audio controls>
                      <source src="audio/SampleAudio.mp3">
                  </audio>
                  </div>
              </div>
              <div class='item mix-master'>
                  <div class="detail service" style="color: white;"><p><b>MIXED & MASTERED</b><br>SONG: Fire Jatti</p></div>
                  <div class="icon">
                  <i class="material-icons">music_note</i>
                  </div>
                  <div class='detail service' style="background: white;">
                          <audio controls>
                      <source src="audio/SampleAudio.mp3">
                  </audio>
                  </div>
              </div>
          </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
