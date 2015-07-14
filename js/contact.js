$(document).ready(function() {
    var par = $('#form-container');
    var thank = $('#thanks');
    $(thank).hide();
    $(".errorMessage").css('display', 'none');
    $('#submit_message').click(function(e) {
        email = $("#youremail").val();
        name = $("#yourname").val();
        phone = $("#yournumber").val();
        message = $("#textinput").val();
        callme = $("#callme").prop('checked');
        sendMail(email,name,message,callme,phone);
        $(par).slideToggle('slow');
        $(thank).slideToggle('slow');
        $(thank).css('opacity',0);
        $(thank).animate({
            opacity:1
        },500, function(){});
        e.preventDefault();
    });
});

function sendMail (mail,name,message,callme,phone) {
    var subMail = btoa(mail);
    var subName = btoa(name);
    var subMessage = btoa(message);
    console.log('http://enbit.dk/res/sendmail.php?callback=?&email='+subMail+'&name='+subName+'&message='+subMessage+'&callme='+callme);
    $.ajax({
        url : 'http://enbit.dk/res/sendmail.php?callback=?&email='+subMail+'&name='+subName+'&message='+subMessage+'&callme='+callme+'&phone='+phone,
        type: 'GET',
        async: false,
        jsonpCallback: 'jsonCallback',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function(e){
            console.log('Got return from script.. '+e);
            if(e == false) {
                console.log('PHP sendscript failed');
            } else {
                console.log('PHP script succeeded');
            }
        },
        error: function(e) {
            console.log('There was an error in the form..');
            $(".successMessage").css('display','none');
            $(".errorMessage").css('display', 'block');
        }
    });
}

