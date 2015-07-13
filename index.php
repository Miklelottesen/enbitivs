<?php
	include 'resources/paths.php';
	include 'resources/langdetect.php';
	include 'resources/strings.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $la; ?>">
  <head>
    <?php include $views.'head.php'; ?>
  </head>
  <body>
    <?php include $views.'body.php'; ?>
  </body>
</html>