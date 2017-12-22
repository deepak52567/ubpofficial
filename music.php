<!DOCTYPE html>
<?php
include('config.php');
$page_title = $tagline = "MUSIC PRODUCTION";
	$scrollheader = 'href="#services" data-scroll="services"';
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .fullscreen-background {
        /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
        background: #673ab7;
    }
    .filler .titlecontainer hr{
		    background: #673ab7;
	  }
  </style>
  <body>
    <?php
        include('header.php');
        include('sidenav.php');
    ?>
    <div class="main">
      <?php
        include('fullscreen-player.php');
		  ?>
      <?php
        include('backgroundvideooverlay.php');
      ?>
        <section class="filler" id="services" data-anchor="serivces">
            <div class="container service-pg">
              <div class='item music common-pg-layout'>
                  <div class="right-container">
                      <div class="service-provide">
                          <h2>We Create Artist</h2>
                          <p>Give your composition a new face with our the soulfull and geniune music. We can provide you the platform you needed to show the world your talent with help of working with our professionals. We guide the fresh artists step by step, to learn the process of song composition and we make sure its up-to-the-quality always. We provide all Genre of Music with live instruments like Guitar, Tabla, Tumbi, Violin and many more.</p>
                      </div>
                      <div class="service-provide">
                          <h4>Background Score For</h4>
                          <p>Documentary, Films, Vines, Daily Shows etc.</p>
                      </div>
                  </div>
                  <div class="left-container">
                      <img src="/img/We Create Artis 2t.png">
                  </div>
              </div>
              <div class='item music common-pg-layout straight'>
                  <div class="right-container">
                      <div class="service-provide">
                          <h2>We Work On Best</h2>
                          <p>Some of the best music production application available on the market right now is being used at our studio. So that you can get the best quality tracks for your composition.</p>
                      </div>
                      <div class="distributers no-top-margin">
                          <img src="/img/FLStudio_logo.png">
                          <img src="/img/Cubase_logo.png">
                          <img src="/img/ableton_logo.png">
                      </div>
                      <div class="service-provide">
                          <h4>Genres</h4>
                          <p>Hip-Hop | Bollywood | RnB | Trap | EDM & More</p>
                      </div>
                  </div>
                  <div class="left-container">
                      <img src="/img/We Work On Beat.png">
                  </div>
              </div>
            </div>
        </section>
        <section class="filler">            
            <div class="container service-pg">
              <div class='item music common-pg-layout'>
                  <div class="right-container">
                      <div class="service-provide">
                          <h2>Music Production Training</h2>
                      </div>
                      <div class="service-provide">
                          <h4>Platform</h4>
                          <p>FL STUDIO | CUBASE</p>
                      </div><br>
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
                    <p>For Music Samples Check Some Links Below</p>
                </div>
                <hr>
            </div>
            <div class="container">
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
                <div class="title" style="font-size: 1.5rem;">
                    <p>For Backgroud Score Quality Check</p>
                </div>
                <hr>
            </div>
            <div class="container">
            <?php $result=mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat = 'movie' ORDER BY id DESC");
              if($result) {
                while($rowval=mysqli_fetch_assoc($result)) {
                  $title=$rowval['title'];
                  $artist=$rowval['artist'];
                  $ytID=$rowval['ytID'];
                  echo "<div class='item'>
                            <img alt=$title src='//i1.ytimg.com/vi/$ytID/mqdefault.jpg'/>
                            <div class='detail'>
                                <div class='left-container'>
                                    <p class='title'>$title</p>
                                    <p class='sub-title'>$artist</p>
                                </div>
                                <a class='button' id='latest-button-play' onclick=testfunc('$ytID')>
                                    <i class='material-icons'>play_circle_filled</i>
                                    <p>PLAY</p>
                                </a>
                            </div>
                        </div>";
    
                }
              }
            ?></div>
        </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
  <script>
    $(window).scroll(function() {
      var windscroll = $(window).scrollTop();
      if(windscroll >= 400){
        $('header').css('background', '#673ab7');
      }
      else{
        $('header').css('background', 'none');
      }
    });
  </script>
</html>
