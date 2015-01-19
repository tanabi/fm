<?php 
include 'style/css_cookie_check.php'; // Check if the user has a style cookie set and access its value
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Furry Muck ℠</title>
<link href="style/<?php echo $styleChoice; ?>/style.css" rel="stylesheet" type="text/css" /></head>

<body>

<div id="wrapper">
	<?php include('includes/header.php'); ?>
	<div id="right">
		<?php include('includes/navigation.php'); ?>
		<?php include('includes/footer.php'); ?>
	</div>
	<div id="container">
		<?php include('includes/status.php'); ?>
	</div>
</div>

</body>

</html>
