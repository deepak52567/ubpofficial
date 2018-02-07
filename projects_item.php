<?php
    if($result) {
    while($rowval=mysqli_fetch_assoc($result)) {
      $title=$rowval['title'];
      $artist=$rowval['artist'];
      $ytID=$rowval['ytID'];
      echo "<div class='item' onclick=testfunc('$ytID')>
              <img alt=$title src='//i1.ytimg.com/vi/$ytID/mqdefault.jpg'/>
              <div class='detail'>
                <div class='left-container'>
                  <p class='title'>$title</p>
                  <p class='sub-title'>$artist</p>
                </div>
                <a class='button' id='latest-button-play'>
                  <i class='material-icons'>play_circle_filled</i>
                </a>
              </div>
            </div>";

    }
  }
?>
