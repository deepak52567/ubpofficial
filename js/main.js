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
    m = (document.getElementById("sidenavdrawer"));
    if (m.style.left === "0px") {
        m.style.left = "-100%";
    } else if (m.style.left === "-100%") {
        m.style.left = "0px";
    }
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
