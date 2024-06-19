jQuery(document).ready(function ($) {
    // Check for saved mode in localStorage
    if (localStorage.getItem('mode') === 'dark') {
        $('body').addClass('dark-mode');
    }

    // Toggle mode on button click
    $('.ldm-toggle').on('click', function () {
        $('body').toggleClass('dark-mode');
        if ($('body').hasClass('dark-mode')) {
            localStorage.setItem('mode', 'dark');
        } else {
            localStorage.removeItem('mode');
        }
    });
});
