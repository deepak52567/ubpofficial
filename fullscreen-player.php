<?php
$srcPart1 = "<iframe id='vid_frame' src='http://youtube.com/embed/";
$srcPart2 = "?autoplay=0&rel=0&showinfo=0&autohide=1 frameborder='0' allowfullscreen></iframe>";
?>     
<section class="fullscreen-player">
        <div class="close-button">
			<i class="material-icons" onclick="$('iframe').remove('.main-player');$('.fullscreen-player').css('display', 'none');">close</i>
        </div>
</section>