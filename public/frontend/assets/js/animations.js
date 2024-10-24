$(document).ready(function() {
    $('.trigger-animation').on('click', function(e) {
        e.preventDefault();
        var $element = $(this).closest('.feature-item');
        var animationType = $(this).data('animation');

        switch(animationType) {
            case 'slide-in-right':
                $element.slideInRight();
                break;
            case 'fade-in':
                $element.fadeIn();
                break;
            case 'pop-up':
                $element.popUp();
                break;
        }
    });
});

// Animation helper methods
$.fn.slideInRight = function(speed) {
    speed = speed || 300;
    return this.css({
        transform: 'translateX(100%)',
        opacity: 0
    }).animate({
        transform: 'translateX(0)',
        opacity: 1
    }, speed);
};

$.fn.fadeIn = function(speed) {
    speed = speed || 300;
    return this.css({opacity: 0}).animate({opacity: 1}, speed);
};

$.fn.popUp = function(speed) {
    speed = speed || 300;
    return this.css({
        transform: 'scale(0.8)',
        opacity: 0
    }).animate({
        transform: 'scale(1)',
        opacity: 1
    }, speed);
};
