<!DOCTYPE html>
<?php
  require_once 'config.php';
  $page_title = 'COMPANY PORTAL';
  $tagline = 'REMEMBER<br>WE ARE MAKING IT BIG.';
  $scrollheader = 'href="#projects" data-scroll="projects"';
?>
<html lang="en">
  <?php include('head.php'); ?>
  <body>
    <?php
        include('header.php');
        include('sidenav.php');
    ?>
    <div class="main">
      <?php
        include('fullscreen-player.php');
        include('backgroundvideooverlay.php');
      ?>
      <section class="filler" id="projects">
        <div class="titlecontainer">
          <div class="title">
            <p>COMPANY PORTAL</p>
          </div>
          <hr>
        </div>
        <div class="container audio-sam">
          <div class="item mix-master">
            <div class="detail service" style="background: #8bc34a; color: white;"><p><b>OTHERS</b></div>                        
            <div class="icon">
              <i class="material-icons">email</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">ACCESS EMAIL</p>
              </div>
            <a class='button' id='latest-button-play' href='https://mail.ubpofficial.com'>
              <i class="material-icons">open_in_new</i>
            </a>
            </div>                        
          </div>
          <div class="item promotion">
            <div class="detail service" style="background: #ff9800; color: white;"><p><b>ADMIN</b></div>            
            <div class="icon">
              <i class="material-icons">folder</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">UPDATE GALLERY (BTS)</p>
              </div>
            <a class='button' id='latest-button-play' href='https://www.ubpofficial.com/filemanager'>
              <i class="material-icons">open_in_new</i>
            </a>
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
        $('header').css('background', '#03a9f4');
      }
      else{
        $('header').css('background', 'none');
      }
    });
   </script> 
</html>
