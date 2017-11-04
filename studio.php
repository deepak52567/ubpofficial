<!DOCTYPE html>
<?php
  include('config.php');
  $tagline = "RECORDING STUDIO";
  $scrollheader = 'href="#services" data-scroll="services"';
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .fullscreen-background {
        /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
        background: #f44336;
    }
    .filler .titlecontainer hr{
		    background: #f44336;
    }
    .view-all-button{
        background: #f44336 !important;
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
                <div class='item studio common-pg-layout'>
                    <div class="right-container">
                        <div class="service-provide">
                            <h2>Foley Sound<br>Vocals<br>Instruments</h2>
                            <p><b>*</b>&nbsp;Instuments Recording charges based on Instruments
                              and the mics requirements.<br><b>*</b>&nbsp;Foley Sounds Package
                              Price based on a duration and requirement of your
                              short movie, documentary, etc.<br><br><b>Vocals
                              Recording Charges - Rs.1000 Per Artist.</b></p>
                        </div>
                    </div>
                    <div class="left-container">
                        <img src="/img/We Create Artis 2t.png">
                    </div>
                </div>
            </div>
            <div class="titlecontainer" style="margin-top: 5%;">
                <div class="title" style="font-size: 1.5rem;">
                    <p>Quality Check of Recording Vocals</p>
                </div>
                <hr>
            </div>
            <div class="container projects-pg">
                <?php
                    $result = mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
                    if($result){
                        while($rowval = mysqli_fetch_assoc($result)){
                            $title = $rowval['title'];
                            $artist = $rowval['artist'];
                            $ytID = $rowval['ytID'];
                            echo "<div class='item'>
                                    <img src='//i1.ytimg.com/vi/$ytID/mqdefault.jpg'/>
                                    <div class='detail'>
                                        <div class='left-container'>
                                            <p class='title'>$title</p>
                                            <p class='sub-title'>$artist</p>
                                        </div>
                                        <a class='button' id='latest-button-play' onclick=testfunc('$ytID')>
                                          <i class='material-icons'>play_circle_filled</i><p>PLAY</p>
                                        </a>
                                    </div>
                                </div>";
                        }
                    }
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
                <div class="title" style="font-size: 1.5rem;">
                    <p>Quality Check for Foley</p>
                </div>
                <hr>
            </div>
            <div class="container">
                <?php
                    $result = mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat = 'movie' ORDER BY id DESC");
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
        </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
  <script>
    $(window).scroll(function() {
      var windscroll = $(window).scrollTop();
      if(windscroll >= 400){
        $('header').css('background', '#f44336');
      }
      else{
        $('header').css('background', 'none');
      }
    });
  </script>
</html>
