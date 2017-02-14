<?php

define("INCLUDE_CHECK", true);
include_once 'WICore/init.php';
include_once 'WIInc/wi_start_up.php';
?>


<?php 



		
 //include_once 'WIInc/header.php'; 
$web->header();		
if(!$user->isAdmin())
{
 include_once 'WIInc/sign_in.php';
}else{
	
}
 ?>

		<!--End Feature Services-->
		
		<!--Start Feature RECENT WORK-->
	<!-- our mission -->
		<!--End Feature RECENT WORK-->
		
		<!--Start Feature Extra-->
	
		<?php  include_once 'WIInc/footer.php';  ?>
		
	<!--End Wrapper-->

		<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>vendor/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>vendor/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>jquery.cookie.js"></script> <!-- jQuery cookie --> 
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>styleswitch.js"></script> <!-- Style Colors Switcher -->
	 
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>plugin/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>plugin/jquery.plugin.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>main.js"></script>


	<!-- Start Style Switcher -->
	<div class="switcher"></div>
	<!-- End Style Switcher -->
	
</body>
</html>
