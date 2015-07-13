<?php include $components.'navbar.php'; ?>
<?php include $components.'p1_header.php'; ?>
<?php include $components.'p1_intro.php'; ?>
<?php include $components.'p2_services.php'; ?>
<?php // include $components.'p3_portfolio.php'; ?>
<?php include $components.'p4_about.php'; ?>
<?php include $components.'footer.php'; ?>
<script>
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
</script>