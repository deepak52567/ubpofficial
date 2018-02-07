<!DOCTYPE html>
<?php
include('config.php');
  $page_title = $tagline = "PROJECTS";
  $scrollheader = 'href="#projects" data-scroll="projects"';
?>
<script> var headerColor = '#03a9f4'; </script>
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
            $result=mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
            include 'projects_item.php';
          ?>
        </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
