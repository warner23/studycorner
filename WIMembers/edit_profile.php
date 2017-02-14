<?php
define("INCLUDE_CHECK", true);
include 'WICore/init.php';
include 'WIInc/backend_edit_profile.php';
if(!$WIUserRole->signed_in()) {
	header('Location: index.php');
	die();
}

?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php  $web->Meta($page);  ?>
  <meta name="author" content="">
<title><?php echo  $WI['site_name']?></title>
<?php 
include_once 'WIInc/start_up.php';
?>

</head>
<body>
<!-- Panel -->
<?php include_once 'WIInc/panel.php'; ?>
<!--panel -->
<div class="gridContainer clearfix">
  <div id="LayoutDiv1">
   <?php include_once 'WIInc/LandSheading.php'; ?>
    <?php  $web->header(); ?>


<div class="col-menu"><?php 
include_once 'WIInc/menu.php';
?></div><!-- end col-head-->

<div class="col-content"><?php 
include_once 'WIInc/edit_profile.php';
?></div><!-- end col-head-->

<footer>
<?php 
include_once 'WIInc/footer.php';
?>
</footer>
  </div><!-- end of layoutdiv1-->
</div><!-- end of gridcontainer clearfix-->
</body>
</html>
