$(document).ready(function() {
    var par = $('#form-container');
    var thank = $('#thanks');
    $(thank).hide();
    $('#submit_message').click(function(e) {
        $(par).slideToggle('slow');
       $(thank).slideToggle('slow');
        $(thank).css('opacity',0);
        $(thank).animate({
            opacity:1
        },500, function(){});
        e.preventDefault();
    });
});


