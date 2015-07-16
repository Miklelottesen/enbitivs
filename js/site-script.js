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
            sendMail(email,name,message,callme,phone);
            $(par).slideToggle('slow');
            $(thank).slideToggle('slow');
            $(thank).css('opacity',0);
            $(thank).animate({
                opacity:1
            },500, function(){});
        } else {
            $(".formError").effect("shake",{'direction':'left'});
        }
        e.preventDefault();
    });
    // P2 SERVICES transition on click
    $(".p2-transition").click(function(e){
        console.log('Clicked service link..');
        e.preventDefault();
        e.stopImmediatePropagation();
        $("#p2-switch-one").animate({
            'opacity': 0
        },500, function(){
            $("#p2-switch-one").css('display','none');
            $("#p2-switch-two").css({
                'opacity':0,
                'display':'block'
            });
            $("#p2-switch-two").animate({
                'opacity':1
            },500);
        });
        return false;
    });
    // Triggers for service buttons
    $(".p2-trigger").on('click',function(e){
        var triggerName = $(this).attr('data-pii');
        var triggerShortName = triggerName.split('-trigger')[0];
        var triggerSection = triggerShortName+'-section';
        $(".active-p2").removeClass('active-p2');
        console.log('Removing current class');
        $("."+triggerName).parent().addClass('active-p2');
        console.log($(this).parent().hasClass('p2-transition'));

        $("#serviceDescription").animate({
            'opacity':0
        },250, function(){
            $("#serviceDescription").empty();
            $( "#serviceDescription" ).load( "resources/views/articles/layout.php?id="+triggerShortName );
            $("#serviceDescription").animate({
                'opacity':1
            },250);
        });
        

        if(!$(this).parent().hasClass('p2-transition')) {
            e.preventDefault();
            return false;
        }
    });
    $("#articleNavMobile").on('focus',function(){
        $("#servicesList").css('z-index',2);
        $("#servicesList").animate({
            'height':450
        },300);
    });
    $("#articleNavMobile").on('focusout',function(){
        $("#servicesList").animate({
            'height':50
        },300);
        $("#servicesList").css('z-index',0);
    });

// Hide elements with .hideme class
    $(".hideme").attr('aria-hidden', 'true');
    $(".hideme").css('display', 'none');

    // ScrollTo click handlers
    $(".navbar-brand").click(function(){
        $("#introHeader").ScrollTo();
        console.log('Feel the burn');
        return false;
    });
    $("#topLink").click(function(){
        $("#introHeader").ScrollTo();
        return false;
    });
    $("#servicesLink").click(function(){
        $("#services").ScrollTo();
        return false;
    });
    $("#portfolioLink").click(function(){
        $("#portfolio").ScrollTo();
        return false;
    });
    $("#aboutLink").click(function(){
        $("#about_us").ScrollTo();
        return false;
    });
    $("#contactLink").click(function(){
        $("#contactForm").ScrollTo();
        return false;
    });
    $("#calltoaction").click(function(){
        $("#contactForm").ScrollTo();
        return false;
    });
});

// Set active handlers
$(document).scroll(function(){
    dActive = 'topLink';
    dScrollPos = $(document).scrollTop();
    servicesScrollPos = Math.floor($("#services").position().top);
//  portfolioScrollPos = Math.floor($("#portfolio").position().top);
    aboutScrollPos = Math.floor($("#about_us").position().top);
    contactScrollPos = Math.floor($(".contact").position().top);
    if(dScrollPos >= servicesScrollPos - 15) {
        dActive = 'servicesLink';
    }
/*  if(dScrollPos >= portfolioScrollPos) { // Reenable when portfolio is there!!!
        dActive = 'portfolioLink';
    }*/
    if(dScrollPos >= aboutScrollPos - 15) {
        dActive = 'aboutLink';
    }
    if(dScrollPos >= contactScrollPos - 15) {
        dActive = 'contactLink';
    }

    if($(".active > a").attr('id') != dActive) {
        console.log('New active');
        $('.active').removeClass('active');
        $("#"+dActive).parent('li').addClass('active');
    }
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
        // This function is disabled, cause it IS in fact possible to have a mail adress without TLD!!
/*    if ($("#youremail").val().split('@').length == 2 && emailValid) {
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
    }*/

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



$(function(){
    $("#calltoaction").hover(
        function(){
            $(".intro_hr2").animate({ "width" : "20%" },300);
            $(".intro_hr1").animate({ "width" : "20%" },500);
        },
        function(){
            $(".intro_hr1").animate({ "width" : "5%"},500);
            $(".intro_hr2").animate({ "width" : "5%"},300);
        }
    );
});
$(function(){
    var isHovering = false;
    $(".p2-trigger").hover(
        function(){
            isHovering = true;
            $(".p2-hr").animate({'width' : '20%'},300);
        },
        function(){
            isHovering = false;
            setTimeout(function(){
                if(!isHovering) {
                    $(".p2-hr").animate({'width' : '5%'},300);
                }
            },100);
        }
    );
});