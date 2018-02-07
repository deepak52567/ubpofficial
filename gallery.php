<!DOCTYPE html>
  <?php
  include('config.php');
  $page_title = $tagline = "GALLERY";
  $dir = "bts_gallery/";
?>
<html lang="en">
  <?php include('head.php'); ?>
  <style>
    header {
      background: #03a9f4;
    }
  </style>
  <body>
  <?php
	include('header.php');
  ?>
    <div class="main">
      <section class="filler top-fix" id="gallery">
        <div class="titlecontainer">
          <div class="title">
            <p><?php echo $tagline; ?></p>
          </div>
          <hr>
        </div>
        <div class="container showcase-pg">
        <?php include 'gallery_item.php'; ?>
  		  </div>
      </section>    
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
