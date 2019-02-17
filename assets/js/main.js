$(document).ready(function () {
    $(".animated").inViewport(function (px) {
        if (px > 140) {
            $(this).transition({
                opacity: 1,
                y: 0,
            }, 1000, 'ease');
        }
    });
});