<!DOCTYPE html>
<?php
include('config.php');
  $page_title = $tagline = "PROJECTS";
  $scrollheader = 'href="#projects" data-scroll="projects"';
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    .fullscreen-background {
        /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
        background: #03a9f4;
    }
    .filler .titlecontainer hr{
		    background: #03a9f4;
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
      <section class="filler" id="projects" data-anchor="projects">
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
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
  <script>
    $(window).scroll(function() {
      var windscroll = $(window).scrollTop();
      if(windscroll >= 400){
        $('header').css('background', '#03a9f4');
      }
      else{
        $('header').css('background', 'none');
      }
    });
  </script>
</html>
