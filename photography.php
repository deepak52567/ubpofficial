<!DOCTYPE html>
<?php
include('config.php');
$page_title = $tagline = "PHOTOGRAPHY";
$scrollheader = 'href="#services" data-scroll="services"';
?>
<script> var headerColor = '#ff5722'; </script>
<html lang="en">
<?php include('head.php'); ?>
<style>
    .fullscreen-background {
        /*background: url('/img/cover.jpg') center center / cover no-repeat;*/
        background: #ff5722;
    }

    .filler .titlecontainer hr {
        background: #ff5722;
    }

    .view-all-button {
        background: #ff5722 !important;
    }
</style>

<body>
    <?php include('header.php'); ?>
    <div class="main">
        <?php include('backgroundvideooverlay.php'); include('fullscreen-player.php'); ?>
        <section class="filler" id="services" data-anchor="serivces">
            <div class="container service-pg">
                <div class='item photography common-pg-layout'>
                    <div class="right-container">
                        <div class="service-provide">
                            <h2>Paint Your Imagination</h2>
                            <p>We provide some of the best and specialised photographers in respective fields like
                                portfolio shoots (both indoor & outdoor), weeding shoots, pre-wedding shoots
                                and many more.</p>
                        </div>
                        <br>
                        <a class="view-all-button" href="projects">Contact Us</a>
                    </div>
                    <div class="left-container">
                        <img src="img/Video Production.png">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
