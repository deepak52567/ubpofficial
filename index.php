<!DOCTYPE html>
<?php
	require_once 'config.php';
	$tagline = "MUSIC IS NOT WHAT I DO<br>IT'S WHO I AM";
	$scrollheader = 'href="#projects" data-scroll="projects"';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URBAN BLUE PRODUCTION</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://use.fontawesome.com/ae8122e5b2.js"></script>
  <link href="/style/main.css" rel="stylesheet" type="text/css"/>
  <link href="/style/mediaquery.css" rel="stylesheet" type="text/css"/>
</head>
    <style>
        .filler .container .item.music:hover{
          color: #9575CD;
        }
        .filler .container .item.video:hover{
        	color: #4DB6AC;
        }
        .filler .container .item.studio:hover{
          color: #f16e65;
        }
        .filler .container .item.photography:hover{
          color: #FF8A65;
        }
        .filler .container .item.promotion:hover{
          color: #FFB74D;
        }
        .filler .container .item.audio-dist:hover{
          color: #F06292;
        }
        .filler .container .item.mix-master:hover{
          color: #AED581;
        }
        .filler:nth-child(2n) {
          background: <script type="text/javascript">document.write(hexcol);</script>;
        }
    </style>
  <body>
    <header>
          <div class="hamburger-menu" onclick="openCloseMenu()">
            <i class="material-icons md-2" id="open-button-ham" style="display: inline-block; font-size: 2rem;">menu</i>
            <i class="material-icons md-2" id="close-button-ham" style="display: none; font-size: 2rem;">close</i>
          </div>
          <a href="/" class="top-header-logo">
            <p class="ub">UB</p>
            <div class="ub-full">
              <p class="first">URBAN BLUE</p>
              <p class="last">PRODUCTION</p>
            </div>
          </a>
          <nav>
              <a href="#projects" data-scroll="projects">PROJECTS</a>
              <a href="#services" data-scroll="services">SERVICES</a>
              <a href="#gallery" data-scroll="gallery">GALLERY</a>
              <a href="#about" data-scroll="about">ABOUT US</a>
          </nav>
          <a href="#subscribe" data-scroll="contactus" class="top-header-subs">
            <i class="material-icons" style="color: #ffffff; font-size: 2rem;">inbox</i>
            <div class="subs-full">
              <p class="first">SUBSCRIBE</p>
              <p class="last">US</p>
            </div>
          </a>
        </header>
    <?php
  	include('sidenav.php');
    ?>
    <div class="main">
      <?php
        include('backgroundvideooverlay.php');
      ?>
	  	<?php
				include('fullscreen-player.php');
      ?>
      <section class="filler" id="projects">
        <div class="titlecontainer">
          <div class="title">
            <p>PROJECTS</p>
          </div>
          <hr>
        </div>
        <div class="container">
          <?php
                $result = mysqli_query($db_con, "SELECT * FROM video_gallery WHERE cat != 'instrument' ORDER BY id DESC");
              if($result){
                while($rowval = mysqli_fetch_assoc($result)){
                  $title = $rowval['title'];
                  $artist = $rowval['artist'];
                  $ytID = $rowval['ytID'];
                  echo "<div class='item'>
															<img alt=$title src='//i1.ytimg.com/vi/$ytID/mqdefault.jpg'/>
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
        <a class="view-all-button" href="/projects/">VIEW ALL PROJECTS</a>
      </section>
      <section class="filler" id="services">
        <div class="titlecontainer">
          <div class="title">
            <p>SERVICES WE PROVIDE</p>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class='item music'>
            <div class="icon">
              <i class="material-icons">music_note</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">MUSIC PRODUCTION</p>
              </div>
			  		<a class='button' id='latest-button-play' href='/music/'>
							<i class="material-icons">chevron_right</i><p>More</p>
			  		</a>
            </div>
          </div>
          <div class='item video'>
            <div class="icon">
              <i class="material-icons">camera_roll</i>
             </div>
              <div class='detail service'>
                  <div class='left-container'>
                     <p class="title">VIDEO PRODUCTION</p>
                  </div>
					<a class='button' id='latest-button-play' href="/videoprod/">
						<i class="material-icons">chevron_right</i><p>More</p>
					</a>
              </div>
          </div>
          <div class='item studio'>
            <div class="icon">
               <i class="material-icons">mic</i>
            </div>
             <div class='detail service'>
                 <div class='left-container'>
                    <p class="title">RECORDING STUDIO</p>
                 </div>
				<a class='button' id='latest-button-play' href="/studio/">
					<i class="material-icons">chevron_right</i><p>More</p>
				</a>
             </div>
           </div>
           <div class='item mix-master'>
             <div class="icon">
              <i class="material-icons">equalizer</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">MIXING & MASTERING</p>
              </div>
			  <a class='button' id='latest-button-play' href="/mix-master/">
				<i class="material-icons">chevron_right</i><p>More</p>
			  </a>
            </div>
          </div>
          <div class='item photography'>
            <div class="icon">
              <i class="material-icons">photo_camera</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">PHOTOGRAPHY</p>
              </div>
			  <a class='button' id='latest-button-play' href="/photography/">
				<i class="material-icons">chevron_right</i><p>More</p>
			  </a>
            </div>
          </div>
          <div class='item promotion'>
            <div class="icon">
              <i class="material-icons">grade</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">PROMOTION</p>
              </div>
              <a class='button' id='latest-button-play'>
                <i class="material-icons">chevron_right</i><p>More</p>
              </a>
            </div>
          </div>
          <div class='item audio-dist'>
            <div class="icon">
              <i class="material-icons">public</i>
            </div>
            <div class='detail service'>
              <div class='left-container'>
                <p class="title">AUDIO DISTRIBUTION</p>
              </div>
			  <a class='button' id='latest-button-play' href='/audiodist/'>
				<i class="material-icons">chevron_right</i><p>More</p>
			  </a>
            </div>
          </div>
        </div>
      </section>
      <section class="filler" id="gallery">
        <div class="titlecontainer">
          <div class="title">
            <p>GALLERY</p>
          </div>
          <hr>
        </div>
        <div class="container showcase-pg">
			<div class='item'>
				<img src='/img/tunahitohimg.jpg'/>
					<div class='detail'>
						<div class='left-container'>
							<p class='title'>Tu nahi toh</p>
                            <p class='sub-title'>Jeffrin</p>
						</div>
					</div>
			</div>
			<div class='item'>
				<img src='/img/hqdefault.jpg'/>
					<div class='detail'>
						<div class='left-container'>
							<p class='title'>Tu nahi toh</p>
                            <p class='sub-title'>Jeffrin</p>
						</div>
					</div>
			</div>
		</div>
      <br>
      <a class="view-all-button" href="/gallery_cat/">VIEW ALL</a>
	  </section>
      <section class="filler" id="about">
        <div class="titlecontainer">
          <div class="title">
            <p>ABOUT</p>
          </div>
          <hr>
        </div>
        <div class="container about">
          <div class="quote">
            <p>"Music is Not what I Do, It's Who I am"</p>
            <img src="/img/logo-about.jpg">
          </div>
          <div class="main-about">
            <p>
              Urban Blue is a production house best known for its Music and video production.<br><br>It was founded by Mr. Vishal Kumar(LATx) in July 2014 and since then we have produced more than 100 hit music tracks and videos one after another.
              We believe in supporting great talents with our outstanding quality of work to make their talent more effective and more visible to the audience. Our only aim is to take the quality of music and video production to the next level in affordable price!              Apart from producing complete music tracks and video projects we also provide different services like mixing-mastering, photo/video editing, recording studio,Online promotion, Audio distribution, training in music production and sound engineering.<br><br>We have a hardworking and talented team of writers, music composers, editors, cameramen and recordists who work to provide our clients the best quality work under the direction of the founder of Urban Blue production, Mr. Vishal Kumar(LATx) who himself is a master in the field of music and video production!
            </p>
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
