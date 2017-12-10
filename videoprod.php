<!DOCTYPE html>
<?php
include('config.php');
$page_title = $tagline = "VIDEO PRODUCTION";
	$scrollheader = 'href="#services" data-scroll="services"';
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .fullscreen-background {
        /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
        background: #009688;
    }
	  .filler .titlecontainer hr{
		    background: #009688;
	  }
    .view-all-button{
        background: #009688 !important;
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
                <div class='item video common-pg-layout straight' style="box-shadow: none; background: none;">
                    <div class="right-container">
                        <div class="service-provide">
                            <h2>Art Through Lense</h2>
                            <p>We provide the shoots in almost every field like Music Videos shoot, Short Film Shoot, Documentary Shoot, Behind the scene shoot, Pre-Wedding Shoot, Wedding Shoot, etc. We cover all the field where you need a cinematographer. We have affordable bundles & Combos for video shoots.</p>
                        </div>
                    </div>
                    <div class="left-container">
                        <img src="/img/Video Production.png">
                    </div>
                </div>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>For Samples Check Some Links Below</p>
                </div>
                <hr>
            </div>
            <div class="container projects-pg">
                <?php
                    $result = mysqli_query($db_con, "SELECT * FROM video_gallery ORDER BY id DESC");
                    if($result){
                        while($rowval = mysqli_fetch_assoc($result)){
                            $title = $rowval['title'];
                            $artist = $rowval['artist'];
                            $ytID = $rowval['ytID'];
                            echo "<div class='item'>
                                    <img src='//i1.ytimg.com/vi/" . $ytID . "/mqdefault.jpg'/>
                                    <div class='detail'>
                                        <div class='left-container'>
                                            <p class='title'>" . $title . "</p>
                                            <p class='sub-title'>" . $artist . "</p>
                                        </div>
                                        <a class='button' id='latest-button-play' onclick=testfunc('" . $ytID . "')>
                                        <i class='material-icons'>play_circle_filled</i><p>PLAY</p>
                                        </a>
                                    </div>
                                </div>";
                        }
                    }
                ?>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title">
                    <p>CONTACT US</p>
                </div>
                <hr>
            </div>
            <div class="container service-pg">
                <div class='item video common-pg-layout'>
                    <div class="right-container" style="text-align: center;">
                        <div class="service-provide">
                            <h2>On Bundles Information</h2>
                            <p><i><b>*LIMITED OFFER - </b>Music Video Bundle Start from Rs.20,000(Video Shoot + Video Editing + Album/Cover Art + Makeup + Haristyle + YouTube Promotion upto 10000+ Views(Only For First Time), Full HD Shoot with Canon 80D(You can check 80D Sample in SAALA MC! A Short Movie))</i></p>
                        </div>
                    </div>
                    <div class="right-container" style="text-align: center;">
                        <div class="service-provide">
                            <h2>For Internship?</h2>
                            <p>We provide the shoots in almost every field like Music Videos shoot, Short Film Shoot, Documentary Shoot, Behind the scene shoot, Pre-Wedding Shoot, Wedding Shoot, etc. We cover all the field where you need a cinematographer. We have affordable bundles & Combos for video shoots.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="view-all-button" href="/projects.php">Contact Us</a>
        </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
  <script>
    $(window).scroll(function() {
      var windscroll = $(window).scrollTop();
      if(windscroll >= 400){
        $('header').css('background', '#009688');
      }
      else{
        $('header').css('background', 'none');
      }
    });
  </script>
</html>
