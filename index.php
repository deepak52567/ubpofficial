<!DOCTYPE html>
<?php require_once 'config.php';
$tagline='MAKE YOUR RELEASE <br>MORE VISIBLE';
$scrollheader='href="#about" data-scroll="projects"';
$gallery_dir='img/gallery/';
?>
<html lang="en">
  <?php 
    include 'head.php';
  ?>
<body>
  <?php
    include 'header.php';
    include 'sidenav.php';
  ?>
  <div class="main">
    <?php
      include 'backgroundvideooverlay.php';
      include 'fullscreen-player.php';
    ?>
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
          <img src="/img/logo-about.jpg">
        </div>
        <div class="main-about">
          <p>Urban Blue is a production house best known for its Music and video production.
            <br>
            <br>It was founded by Mr. Vishal Kumar(LATx) in July 2014 and since then we have produced more than 100 hit music
            tracks and videos one after another. We believe in supporting great talents with our outstanding quality of work
            to make their talent more effective and more visible to the audience. Our only aim is to take the quality of
            music and video production to the next level in affordable price! Apart from producing complete music tracks
            and video projects we also provide different services like mixing-mastering, photo/video editing, recording studio,
            Online promotion, Audio distribution, training in music production and sound engineering.
            <br>
            <br>We have a hardworking and talented team of writers, music composers, editors, cameramen and recordists who work
            to provide our clients the best quality work under the direction of the founder of Urban Blue production, Mr.
            Vishal Kumar(LATx) who himself is a master in the field of music and video production! </p>
        </div>
      </div>
    </section>    
    <section class="filler" id="projects">
      <div class="titlecontainer">
        <div class="title">
          <p>PROJECTS</p>
        </div>
        <hr>
      </div>
      <div class="container">
        <?php $result=mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
          if($result) {
            while($rowval=mysqli_fetch_assoc($result)) {
              $title=$rowval['title'];
              $artist=$rowval['artist'];
              $ytID=$rowval['ytID'];
              echo "<div class='item' onclick=testfunc('$ytID')>
                      <img alt=$title src='//i1.ytimg.com/vi/$ytID/mqdefault.jpg'/>
                      <div class='detail'>
                        <div class='left-container'>
                          <p class='title'>$title</p>
                          <p class='sub-title'>$artist</p>
                        </div>
                        <a class='button' id='latest-button-play'>
                          <i class='material-icons'>play_circle_filled</i>
                        </a>
                      </div>
                    </div>";

            }
          }
        ?></div>
      <a class="view-all-button" href="/projects">
        <p>VIEW ALL PROJECTS</p>
        <i class="material-icons" style="font-size: 16px;">chevron_right</i>
      </a>
    </section>
    <section class="filler" id="services">
      <div class="titlecontainer">
        <div class="title">
          <p>SERVICES WE PROVIDE</p>
        </div>
        <hr>
      </div>
      <div class="container projects-pg">
        <a class='item music' href='/music' title="Music Production">
          <div class="icon">
            <i class="material-icons">music_note</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">MUSIC PRODUCTION</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
        <a class='item video' href="/videoprod" title="Video Production">
          <div class="icon">
            <i class="material-icons">camera_roll</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">VIDEO PRODUCTION</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
        <a class='item studio' href="/studio" title="Recording Studio">
          <div class="icon">
            <i class="material-icons">mic</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">RECORDING STUDIO</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
        <a class='item mix-master' href="/mix-master" title="Mixing & Mastering">
          <div class="icon">
            <i class="material-icons">equalizer</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">MIXING & MASTERING</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
        <a class='item photography' href="/photography" title="Photography">
          <div class="icon">
            <i class="material-icons">camera_alt</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">PHOTOGRAPHY</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
        <a class='item promotion' title="Promotion">
          <div class="icon">
            <i class="material-icons">grade</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">PROMOTION</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
        <a class='item audio-dist' href='/audiodist' title="Audio Distribution">
          <div class="icon">
            <i class="material-icons">public</i>
          </div>
          <div class='detail service'>
            <div class='left-container'>
              <p class="title">AUDIO DISTRIBUTION</p>
            </div>
            <div class='button' id='latest-button-play'>
              <i class="material-icons">arrow_forward</i>
            </div>
          </div>
        </a>
      </div>
    </section>
    <section class="filler" id="gallery">
      <div class="titlecontainer">
        <div class="title">
          <p>GALLERY</p>
        </div>
        <hr>
      </div>
      <div class="container showcase-pg">
        <?php foreach (new DirectoryIterator($gallery_dir) as $file) {
          if ($file->isDot()) continue;
          if ($file->isDir()) {
            echo "<a class='item' href='/bts_main.php?bts_folder=" . $file->getFilename() . "'>
                  <img src='/img/gallery/" . $file->getFilename() . "/album_art.jpg'/><div class='detail'><div class='left-container'><p class='title'>" . $file->getFilename() . "</p></div></div></a>";
          }
        }
      ?>
      </div>
      <br>
      <a class="view-all-button" href="/gallery">VIEW ALL</a>
    </section>
  </div>
  <?php include('footer.php');
?>
</body>
<script>
  $(window).scroll(function () {
      var windscroll = $(window).scrollTop();
      var dispvalue = ($(window).height()) - 70;
      if (windscroll >= dispvalue) {
        $('header').css('background', '#03a9f4');
      } else {
        $('header').css('background', 'transparent');
      }
    }
  );
</script>

</html>