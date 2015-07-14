<?php include $components.'navbar.php'; ?>
<?php include $components.'p1_header.php'; ?>
<?php include $components.'p1_intro.php'; ?>
<?php include $components.'p2_services.php'; ?>
<?php // include $components.'p3_portfolio.php'; ?>
<?php include $components.'p4_about.php'; ?>
<?php include $components.'p5_contact.php'; ?>
<?php // include_once("resources/analyticstracking.php") ?>
<?php include $components.'footer.php'; ?>
<script>
	$(document).ready(function(){
		// Hide elements with .hideme class
		$(".hideme").attr('aria-hidden', 'true');
		$(".hideme").css('display', 'none');
	});

	// ScrollTo click handlers
	$(".navbar-brand").click(function(){
		$("#introHeader").ScrollTo();
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

	// Set active handlers
	$(document).scroll(function(){
		dActive = 'topLink';
		dScrollPos = $(document).scrollTop();
		servicesScrollPos = Math.floor($("#services").position().top);
	//	portfolioScrollPos = Math.floor($("#portfolio").position().top);
		aboutScrollPos = Math.floor($("#about_us").position().top);
		if(dScrollPos >= servicesScrollPos - 15) {
			dActive = 'servicesLink';
		}
	/*	if(dScrollPos >= portfolioScrollPos) { // Reenable when portfolio is there!!!
			dActive = 'portfolioLink';
		}*/
		if(dScrollPos >= aboutScrollPos - 15) {
			dActive = 'aboutLink';
		}
		if($(".active > a").attr('id') != dActive) {
			console.log('New active');
			$('.active').removeClass('active');
			$("#"+dActive).parent('li').addClass('active');
		}
	});
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=1633550523587502";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>