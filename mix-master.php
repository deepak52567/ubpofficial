<!DOCTYPE html>
<?php
  require_once 'config.php';
  $tagline = "MIXING & MASTERING";
  $scrollheader = 'href="#services" data-scroll="services"';
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .fullscreen-background {
        /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
        background: #8bc34a;
    }
    .filler .titlecontainer hr{
      background: #8bc34a;
    }
    .view-all-button{
        background: #8bc34a !important;
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
      <?php
        include('fullscreen-player.php');
      ?>
        <section class="filler" id="services" data-anchor="serivces">
            <div class="container service-pg">
                <div class='item mix-master common-pg-layout'>
                    <div class="right-container">
                        <div class="service-provide">
                            <h2>The Soul Of Audio</h2>
                            <p>A song is produced in two parts. First half is your music, instrument and other effects. Then second half is your Mixing Mastering layer.
                              <br><br>Without it your audio will sound rough, boxy, tight and type of noisy which will drastically affect your song in a negative way.
                              <br><br>By Mixing and Mastering your audio, we will give his own space to every instrument, vocals and sounds.
                              <br><br><b>Humor me please, we are the Sherlock Holmes of Mixing Mastering.</b></p>
                        </div>
                    </div>
                    <div class="left-container">
                        <img src="/img/We Create Artis 2t.png">
                    </div>
                </div>
            </div>
            <div class="container service-pg">
                <div class='item mix-master common-pg-layout straight'>
                    <div class="right-container">
                        <div class="service-provide">
                            <h2>What You Need?</h2>
                            <p>We do the mixing-mastering on the audio as per the artist requirements. But above all, quality is our priority.
                              <br><br>Mixing & Mastering is included in all our combos of audio and video production FOC.
                              <br><br><b>For seperate Mixing & Mastering on your track:</b></p>
                        </div>
                        <a class="view-all-button" href="/projects.php">Contact Us</a>
                    </div>
                    <div class="left-container">
                        <img src="/img/We Create Artis 2t.png">
                    </div>
                </div>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>Training</p>
                </div>
                <hr>
            </div>
            <div class="container service-pg">
              <div class='item mix-master common-pg-layout'>
                  <div class="right-container">
                      <div class="service-provide">
                          <h2>Mixing Mastering Training</h2>
                      </div>
                      <div class="service-provide">
                        <p>Become a master in Mixing & Mastering with our
                          all-in-one affordable course package. For any further
                          queries you are always welcome to contact us.</p>
                      </div><br>
                      <div class="service-provide">
                          <h4>Platform</h4>
                          <p>FL STUDIO | CUBASE</p>
                      </div>
                      <div class="service-provide">
                          <h4>Course Fee</h4>
                          <p>Rs. 30,000/-<br><br>12 Classes<br><br>1 Month</p>
                      </div>
                  </div>
                  <div class="left-container">
                      <img src="/img/Music Production(Corrected).png">
                  </div>
              </div>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>Wanna Experience The Difference By Youself?</p>
                </div>
                <hr>
            </div>
            <div class="container audio-sam">
              <div class='item mix-master'>
                <div class="detail service" style="color: #212121; background: #8bc34a; color: white;"><p><b>UN-MIXED & UN-MASTERED</b><br>SONG: Fire Jatti</p></div>
                <div class="icon">
                  <i class="material-icons">music_note</i>
                </div>
                <div class='detail service' style="background: white;">
    			  		  <audio controls>
                    <source src="/audio/SampleAudio.mp3">
                  </audio>
                </div>
              </div>
              <div class='item mix-master'>
                <div class="detail service" style="color: #212121; background: #8bc34a; color: white;"><p><b>MIXED & MASTERED</b><br>SONG: Fire Jatti</p></div>
                <div class="icon">
                  <i class="material-icons">music_note</i>
                </div>
                <div class='detail service' style="background: white;">
    			  		  <audio controls>
                    <source src="/audio/SampleAudio.mp3">
                  </audio>
                </div>
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
        $('header').css('background', '#8bc34a');
      }
      else{
        $('header').css('background', 'none');
      }
    });
  </script>
</html>
