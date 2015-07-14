$(document).ready(function() {
    var par = $('#form-container');
    var thank = $('#thanks');
    $(thank).hide();
    $('#form-container').click(function(e) {
        $(par).slideToggle('slow');
        $(thank).slideToggle('slow');
        e.preventDefault();
    });
});


