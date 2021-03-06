$(function () {
    $('.main-menu > li > a.dropdown').click(setActive);
    $('.upload').click(addFile);
    $('.refrecconv').click(refreshDiv);
    $('.document:not(.buzz)').click(openpdf);

    $(".nicer-table").each(function() {

        var trs = $("tr", this);

        trs.click(function() {

            trs.removeClass("active");
            $(this).addClass("active");

        });

    });

    function refreshDiv() {
        $('#convo').load(document.URL +  ' #convo');
        return false;
    }

    function openpdf(e){
        e.preventDefault();
        window.location = "example.pdf";
    }

    function addFile() {
        var file = document.getElementById("selected-file").value;
        setTimeout(function () {
            document.getElementById('placeholder').innerHTML = '<a href="#" class="document"><span class="glyphicon glyphicon glyphicon-file"></span><br><p>' + file + '</p>';
        }, 200)
    }

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

    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready(function () {
        $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) alert(log);
            }

        });
    });

});
