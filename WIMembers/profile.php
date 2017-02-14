<?php

define("INCLUDE_CHECK", true);
include_once 'WICore/init.php';

 if($login->isLoggedIn()){
include_once 'WIInc/start_up.php';
 include_once 'WIInc/panel.php';

$web->header();	

 include_once 'WIInc/profile.php'; 
	
 include_once 'WIInc/footer.php'; 
 ?>
 	<!--End Wrapper-->
	<!-- Start Style Switcher -->
	<div class="switcher"></div>
	<!-- End Style Switcher -->
	<script type="text/javascript" src="WIInc/js/styleswitch.js"></script>


	
</body>
</html>
<?php
}else{
header("location:../index.php");
            }
?>




<?php 

		

