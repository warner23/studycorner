<?php

define("INCLUDE_CHECK", true);
include_once 'WICore/init.php';
include_once 'WIInc/start_up.php';
?>

<?php 
 include_once 'WIInc/panel.php';
 include_once 'WIInc/top_head.php'; 		
$web->header();	
            if(!$user->isStudent()){
               include_once 'WIInc/sign_in.php';
            }else{
             include_once  dirname(dirname(__FILE__)) .'/WICourses/Mathematics/algebra.php';
            // print_r( $WI['site_url'] . 'WICourses/Human_body.php');

         }
            ?>
          
        </div><!-- ./wrapper -->
		<?php  include_once 'WIInc/footer.php';  ?>
		
	<!--End Wrapper-->
	
</body>
</html>
