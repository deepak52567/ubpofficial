<!DOCTYPE html>
<?php
  include('config.php');
  $page_title = $tagline = "RECORDING STUDIO";
  $scrollheader = 'href="#services" data-scroll="services"';
?>
<script> var headerColor = '#f44336'; </script>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .filler .tagline {
      color: #03a9f4;
    }
    .view-all-button{
      background: #f44336 !important;
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
      <?php
        include('fullscreen-player.php');
      ?>
      <section class="filler service-pg" id="services" data-anchor="serivces" style="background: url(img/studio_bg.png) #6e6e6e; background-position: right; background-size: contain; background-attachment: fixed; background-repeat: no-repeat;">
        <div class="tagline" style="width: 50%;"><h2>Foley Sound<br>Vocals<br>Instruments</h2></div>
        <div class="hero-detail" style="width: 50%;">
          <p><b>(Vocals Recording Charges - Rs.1000* Per Artist)
          </b><br><br><b>*</b>&nbsp;Instuments Recording charges
          based on Instruments and the mics requirements.
          <br><b>*</b>&nbsp;Foley Sounds Package Price based
          on a duration and requirement of your short movie, documentary, etc.</p>
        </div>
        <!-- <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>Quality Check of Recording Vocals</p>
                </div>
                <hr>
            </div>
            <div class="container">
                <?php
                    $result = mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
                    include 'projects_item.php';
                ?>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>Quality Check for Instrument Recording</p>
                </div>
                <hr>
            </div>
            <div class="container">
                <?php
                    $result = mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat = 'instrument' ORDER BY id DESC");
                    include 'projects_item.php';
                ?>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>Quality Check for Foley</p>
                </div>
                <hr>
            </div>
            <div class="container">
                <?php
                    $result = mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat = 'movie' ORDER BY id DESC");
                    include 'projects_item.php';
                ?>
            </div> -->
        </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
