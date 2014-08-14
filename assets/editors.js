$(function() {
    var unsaved_changes = false;

    $('textarea').on('change', function() {
        unsaved_changes = true;
    });

    $('button[type=submit]').on('click', function() {
        unsaved_changes = false;
    });

    window.onbeforeunload = function() {
        if (unsaved_changes) {
            return "You have unsaved changes";
        }
    };
});
