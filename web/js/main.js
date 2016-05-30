$(document).ready(function() {
    $("#lightgallery").lightGallery();

    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 10, // MB
        clickable: false,
        dictDefaultMessage: "",
        previewTemplate: document.getElementById('preview-template').innerHTML,
        previewsContainer: ".new-content-upload",
        thumbnailWidth: 400,
        thumbnailHeight: 300,
        acceptedFiles: "image/*",
        dictResponseError: "test",
        dictInvalidFileType: "Es können nur Bilder hochgeladen werden. Bitte versuche es erneut."
    };
});



// Rechtsklick Men�

$('html')
    .delegate('[contextmenu]', 'contextmenu', function (e) {
        var contextmenu  = $(this).attr('contextmenu');
        var $contextmenu = $('#' + contextmenu);

        if ($contextmenu.length == 0) {
            return;
        }

        e.preventDefault();
        e.stopPropagation();

        $contextmenu.show();
        $contextmenu.css({
            'top' : (e.pageY - 18) + 'px',
            'left': e.pageX + 'px'
        });

        return false;
    })

    .on({
        'keydown' : function (e) {
            if (e.which == 27) {
                $('menu[type=context]').hide();
            }
        },

        'click' : function () {
            $('menu[type=context]').hide();
        }
    });