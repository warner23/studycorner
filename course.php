<?php

define("INCLUDE_CHECK", true);
include_once 'WICore/init.php';
include_once 'WIInc/start_up.php';
?>

<?php 
 include_once 'WIInc/panel.php';
 include_once 'WIInc/top_head.php'; 		
$web->header();	
 ?>
 <!-- content-->
        <?php include_once 'WIInc/course.php'; ?>
<!-- end of content-->

		<?php
		 include_once 'WIInc/footer.php'; ?>
		
	<!--End Wrapper-->

	              	   	 <script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>jquery.cookie.js"></script>
	              	     <!-- jQuery cookie --> 
	              	   	 <script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>styleswitch.js"></script> 
	              	   	 <!-- Style Colors Switcher -->	 



	<!-- Start Style Switcher -->
	<div class="switcher"></div>
	<!-- End Style Switcher -->
	
</body>
</html>
