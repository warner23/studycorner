<?php

define("INCLUDE_CHECK", true);
include_once 'WICore/init.php';
include_once 'WIInc/wi_start_up.php';
?>

  <body class="skin-blue">
     <?php include 'WIInc/wi_header.php';?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
           <?php include 'WIInc/wi_sidebar.php';?>
            <!-- Right side column. Contains the navbar and content of the page -->
              <?php 
            
              include 'WIInc/cochlear_implant.php';
           
            ?>
          
        </div><!-- ./wrapper -->
		<?php  include_once 'WIInc/footer.php';  ?>
		
	<!--End Wrapper-->
	
</body>
</html>
