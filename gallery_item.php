<?php
  foreach (new DirectoryIterator($dir) as $file) {
    if ($file->isDot()) continue;
    if ($file->isDir()) {
      echo "<a class='item' href='/bts_main.php?folder=" . $file->getFilename() . "'>
              <img src='/.././bts_gallery/" . $file->getFilename() . "/album_art.jpg'/>
              <div class='detail'>
                <div class='left-container'>
                  <p class='title'>" . $file->getFilename() . "</p>
                </div>
              </div>
            </a>";
    }
  }
?>