$(document).ready(function () {
    $("a[href^='#']").on("click", function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $("html, body").animate({
            "scrollTop": $target.offset().top
        }, 800, "swing");
    });
});

function openCloseMenu() {
    var m = document.getElementById('sidenavdrawer');
    m.classList.toggle('reveal');
}

function testfunc(id) {
    $('.fullscreen-player').css('display', 'flex');
    $('.fullscreen-player').append("<iframe class='main-player' src='https://www.youtube.com/embed/" + id + "' frameborder='0' allowfullscreen></iframe>");
}

function galleryShow() {
    $.ajax({
        url: '/showcase.php',
        success: function (html) {
            $(".main").append(html);
        }
    });
}
