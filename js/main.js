$(function () {
    $('.main-menu > li > a.dropdown').click(setActive);

    function setActive() {
        var item = $(this).parent(),
            mainMenu = item.closest('.main-menu');

        if (item.hasClass("active")) {
            item.removeClass("active");
            $(this).blur();
        } else {
            mainMenu.find('li > a.dropdown').each(function () {
                $(this).removeClass('active');
            });
            item.addClass('active');
        }
    }
});
