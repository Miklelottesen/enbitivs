<?php include $components.'navbar.php'; ?>
<?php include $components.'p1_header.php'; ?>
<?php include $components.'p1_intro.php'; ?>
<?php include $components.'p2_services.php'; ?>
<?php // include $components.'p3_portfolio.php'; ?>
<?php include $components.'p4_about.php'; ?>
<?php include $components.'p5_contact.php'; ?>
<?php // include_once("resources/analyticstracking.php") ?>
<?php include $components.'footer.php'; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>