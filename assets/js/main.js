jQuery(document).ready(function($) {
    $('[data-bs-toggle="slide-collapse"]').on('click', function() {
        let navMenuContent = $('.navbar-collapse');
        let mobileMenuOpened = navMenuContent.hasClass('opened');
        if (mobileMenuOpened) {
            navMenuContent.animate({'width': 'toggle'}, 350).removeClass('opened');
            $(this).removeClass('close');
        } else {
            navMenuContent.animate({'width': 'toggle'}, 350).addClass('opened');
            $(this).addClass('close');
        }

    });
});