<!DOCTYPE html>
<?php require_once 'config.php';
$tagline = 'MAKE YOUR RELEASE <br>MORE VISIBLE';
$page_title = 'HOME';
$scrollheader='href="#projects" data-scroll="projects"';
$dir='bts_gallery/';
?>
<script> var headerColor = '#03a9f4'; </script>
<html lang="en">
  <?php
    include 'head.php';
  ?>
<body>
  <header>
    <a href="/" class="top-header-logo">
      <img src="/img/logo_main_white.png" />
      <div class="ub-text">
        <p>URBAN BLUE</p>
        <p>PRODUCTION</p>
      </div>
    </a>
    <nav>
      <div class="nav-link">
        <a href="#projects" data-scroll="projects">PROJECTS</a>
      </div>
      <div class="nav-link service-hover" href="#services" onclick="">
        <div>SERVICES</div>
        <div class="dropdown-content">
          <a href="/music" title="">
            <p>
              <b>MUSIC</b>
              <br>PRODUCTION</p>
          </a>
          <a href="/videoprod" title="">
            <p>
              <b>VIDEO</b>
              <br>PRODUCTION</p>
          </a>
          <a href="/studio" title="">
            <p>
              <b>RECORDING</b>
              <br>STUDIO</p>
          </a>
          <a href="/mix-master" title="">
            <p>
              <b>MIXING</b>
              <br>MASTERING</p>
          </a>
          <a href="/photography" title="">
            <p>
              <b>PHOTOGRAPHY</b>
            </p>
          </a>
          <a href="/promotion" title="">
            <p>
              <b>PROMOTION</b>
            </p>
          </a>
          <a href="/audiodist" title="">
            <p>
              <b>AUDIO</b>
              <br>DISTRIBUTION</p>
          </a>
        </div>
      </div>
      <div class="nav-link">
        <a href="#gallery" data-scroll="gallery">GALLERY</a>
      </div>
      <div class="nav-link service-hover">
        <div>MORE</div>
        <div class="dropdown-content">
          <a href="/about" title="">
            <p>
              <b>ABOUT US</b>
            </p>
          </a>
          <a href="/contact" title="" style="border-bottom: 1px solid #cccccc;">
            <p>
              <b>CONTACT US</b>
            </p>
          </a>
        </div>
      </div>
      <!-- <div class="nav-link">
        <script>
          (function() {
            var cx = '007402177613045494252:vbo9ujpkysg';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:search></gcse:search>
      </div> -->
    </nav>
    <div class="hamburger-menu" onclick="openCloseMenu()">
      <i class="material-icons" id="open-button-ham" style="display: inline-block; font-size: 2rem;">menu</i>
    </div>
  </header>
  <nav class="sidenavdrawer" id="sidenavdrawer">
    <div class="hamburger-menu" onclick="openCloseMenu()">
      <i class="material-icons md-2" id="close-button-ham" style="display: inline-block; font-size: 2rem; color: #545454;">close</i>
    </div>
    <div class="navlinkcontainer">
      <a href="/">
        <i class="material-icons">home</i>
        <p>HOME</p>
      </a>
      <a href="/projects">
        <i class="material-icons">view_carousel</i>
        <p>PROJECTS</p>
      </a>
      <a href="/">
        <i class="material-icons">work</i>
        <p>SERVICES</p>
      </a>
      <a href="/gallery">
        <i class="material-icons">photo</i>
        <p>GALLERY</p>
      </a>
      <a href="/about">
        <i class="material-icons">info</i>
        <p>ABOUT</p>
      </a>
    </div>
  </nav>
  <div class="main">
    <?php
      include 'backgroundvideooverlay.php';
      include 'fullscreen-player.php';
    ?>
    <section class="filler" id="projects">
      <div class="titlecontainer">
        <div class="title">
          <p>PROJECTS</p>
        </div>
        <hr>
      </div>
      <div class="container">
        <?php
          $result=mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
          include 'projects_item.php';
        ?>
      </div>
      <a class="view-all-button" href="/projects">
        <p>VIEW ALL PROJECTS</p>
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
        <?php include 'gallery_item.php'; ?>
      </div>
      <br>
      <a class="view-all-button" href="/gallery">VIEW ALL</a>
    </section>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>
