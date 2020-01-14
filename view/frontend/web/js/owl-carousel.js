define([
    "jquery",
    "Xlab_Banner/js/owl.carousel.min"
], function($){
    return function (config, element) {
        return $(element).owlCarousel(config);
    }
});