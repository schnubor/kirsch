function animateBoxes () {
    $.each( $("#intro .box") , function(index) {
        $(this).delay(250 * index).transition({
            opacity: 1,
            y: 0,
        }, 1000, 'ease');
    });   
}

$(document).ready(function () {
    $(".animated").inViewport(function (px) {
        if (px > 100) {
            $(this).transition({
                opacity: 1,
                y: 0,
            }, 1000, 'ease');
        }
    });

    $(window).scroll(function () {
        const scrollTop = $(this).scrollTop();

        if (scrollTop > 600) {
            $(".scrollToTop").fadeIn();
        } else {
            $(".scrollToTop").fadeOut();
        }
    })

    animateBoxes();
});
