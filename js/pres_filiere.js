$(document).ready(function () {
    
    $('#videoCarousel').carousel();

    
    $('#videoCarousel').on('slid.bs.carousel', function () {
        var currentIndex = $('#videoCarousel .carousel-item.active').index();
        var label = "";

        switch (currentIndex) {
            case 0:
                label = "RT";
                break;
            case 1:
                label = "GL";
                break;
            case 2:
                label = "IIA";
                break;
            case 3:
                label = "IMI";
                break;
            default:
                label = "RT";
        }

        $('#videoLabel').text(label);
    });
});
