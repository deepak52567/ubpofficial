<!DOCTYPE html>
  <?php
  include('config.php');
  $page_title = $tagline = "GALLERY";
  $gallery_dir = 'img/gallery/';
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
	include('sidenav.php');
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
          <?php
            foreach (new DirectoryIterator($gallery_dir) as $file) {
              if ($file->isDot()) continue;
              if ($file->isDir()) {
                echo "<a class='item' href='bts_main.php?bts_folder=" . $file->getFilename() . "'> <img src='img/gallery/" . $file->getFilename() . "/album_art.jpg'/> <div class='detail'> <div class='left-container'><p class='title'>" . $file->getFilename() . "</p></div></div></a>";
              }
            }
          ?>
  		  </div>
      </section>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
