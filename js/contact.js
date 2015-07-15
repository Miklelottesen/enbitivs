$(document).ready(function() {
    var par = $('#form-container');
    var thank = $('#thanks');
    $(thank).hide();
    $(".errorMessage").css('display', 'none');

    console.log('miklelottesen@gmail'.split('@')[1].split('.').length);

    $('#submit_message').click(function(e) {
        if(formCheckValid()) {
            email = $("#youremail").val();
            name = $("#yourname").val();
            phone = $("#yournumber").val();
            message = $("#textinput").val();
            callme = $("#callme").prop('checked');
        //    sendMail(email,name,message,callme,phone);
            $(par).slideToggle('slow');
            $(thank).slideToggle('slow');
            $(thank).css('opacity',0);
            $(thank).animate({
                opacity:1
            },500, function(){});
        } else {
            $("#form-container").effect("shake",{'direction':'down'});
        }
        e.preventDefault();
    });
});

function formCheckValid () {
    var formValid = true;
    var emailValid;
    var nameValid;
    // Email field
        // Check if mail characters live up to standards
    if($("#youremail").val() === '' || !isEmail($("#youremail").val())) {
        $("#youremail").addClass('formError');
        emailValid = false;
    } else {
        $("#youremail").removeClass('formError');
        emailValid = true;
    }
        // Check if mail address has '@' followed somewhere by '.'
    if ($("#youremail").val().split('@').length == 2 && emailValid) {
        if ($("#youremail").val().split('@')[1].split('.').length > 1) {
            emailValid = true;
            $("#youremail").removeClass('formError');
        } else {
            emailValid = false;
            $("#youremail").addClass('formError');
        }
    } else {
        emailValid = false;
        $("#youremail").addClass('formError');
    }

    if($("#yourname").val() == '') {
        nameValid = false;
        $("#yourname").addClass('formError');
    } else {
        $("#yourname").removeClass('formError');
        nameValid = true;
    }

    if (emailValid && nameValid)
        formValid = true;
    else 
        formValid = false;

    // Return
    return formValid;
}
function isEmail(email){
        return /^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$/.test( email );
}

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


window.fbAsyncInit = function() {
    FB.init({
        appId      : '1633550523587502',
        xfbml      : true,
        version    : 'v2.4'
    });
};

