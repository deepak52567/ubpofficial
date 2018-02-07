<!DOCTYPE html>
<?php
include('config.php');
$page_title = $tagline = "VIDEO PRODUCTION";
$scrollheader = 'href="#services" data-scroll="services"';
?>
<script> var headerColor = '#009688'; </script>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .filler {
      padding-bottom: 0;      
    }
    .filler.service-pg .tagline {
      color: #009688;
    }
  </style>
  <body>
    <?php
        include('header.php');
    ?>
    <div class="main">
      <?php include('backgroundvideooverlay.php'); include('fullscreen-player.php'); ?>
      <section class="filler service-pg" id="services" data-anchor="serivces"  style="background: url('img/video_prod_3.jpg'); background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
        <div class="tagline" style="width: 50%;"><h2>Art Through Lense</h2></div>
        <div class="hero-detail" style="width: 50%;">
          <p>We provide the shoots in almost every field like Music Video, Short Film, Documentary, BTS(Behind The Scene), Pre-Wedding, Wedding, etc. We cover all the field where you need a cinematographer at affordable bundles & Combos.</p>
          <br><br>
        </div>
          <!-- <div class="titlecontainer" style="margin-top: 5%;">
              <div class="title" style="font-size: 1.5rem;">
                  <p>For Samples Check Some Links Below</p>
              </div>
              <hr>
          </div>
          <div class="container">
              <?php
                  $result = mysqli_query($db_con, "SELECT * FROM video_gallery ORDER BY id DESC");
                  include 'projects_item.php';
              ?>
          </div> -->
      </section>
      <section class="filler service-pg" style="background: url('img/cover.jpg'); background-position: center; background-size: cover; background-attachment: fixed; background-repeat: no-repeat; justify-content: flex-end;">
        <a class="view-all-button" style="align-self:center; background: #2f3541;" href="/projects">Contact Us</a>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
