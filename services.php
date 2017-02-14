<?php

define("INCLUDE_CHECK", true);
include_once 'WICore/init.php';
include_once 'WIInc/start_up.php';
?>

<?php 
 //include_once 'WIInc/panel.php';
 include_once 'WIInc/top_head.php'; 

		
$web->header();			


 ?>

 <!-- content-->
		
	
<!--Start TITLE PAGE-->		
<section class="title_page bg_3">		
<div class="container">			
 <div class="row">				
<div class="col-lg-12 col-md-12 col-sm-12">	
<h2>Services</h2>			
<nav id="breadcrumbs">
<ul>
<li><a href="index.php">Home</a></li>								
<li><a href="index.html">Pages</a></li>								
<li>Services</li>						
</ul>						
</nav>				
</div>				
</div>			
 </div>		
</section>	
<!--End TITLE PAGE-->	
<!-- Start Service Page -->	
<section class="content service_page">			
<div class="container">				
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12" data-effect="slide-bottom">	
<div class="title">						
<h2>Our Core services</h2>			
<p>
Are you in a situation where you feel you may be facing domestic violence or abuse, and want to talk things over and get some advice? Call Janet Wong or Lydia Chan in confidence on 0161 1371 5522 to arrange an appointment.
</p>
</div>					
</div>		

<a href="#"><div class="col-md-4 col-lg-4 col-sm-4" data-effect="slide-left" >						
<div class="services">							
<div class="icon">								
<i class="fa fa-laptop"></i>							
</div>							
<div class="serv_detail">								
<h3>Painting</h3>								
<p>We run a house painting services for people who are trying to re-build their lives after escaping domestic violence. If you need help or want to volunteer in this area, please contact us. </p>							
</div>						
</div>
</div>
</a>

<a href="#">
<div class="col-md-4 col-lg-4 col-sm-4" data-effect="slide-bottom">			
<div class="services">							
<div class="icon">	
<i class="fa fa-trophy"></i>		
</div>							
<div class="serv_detail">								
<h3>Clean City</h3>		
<p>We take pride in the city we live in and we run a clean city project to clean up our local area and community. This happens bi-monthly.</p>							
</div>						
</div>				
</div>
</a>

<a href="#">
<div class="col-md-4 col-lg-4 col-sm-4" data-effect="slide-right">						
<div class="services">							
<div class="icon">								
 <i class="fa fa-cogs"></i>							
 </div>						
<div class="serv_detail">						
<h3>Helplines</h3>	
<p>Domestic Violence helplines for the manchester and tameside area.</p>		
</div>						
</div>	
</div>		
</a>

<a href="#">
<div class="col-md-4 col-lg-4 col-sm-4" data-effect="slide-left">			
<div class="services">							
<div class="icon">	
<i class="fa fa-folder-o"></i>			
</div>		
	<div class="serv_detail">			
		<h3>Collections</h3>		
	<p>We can collect large individual items in safe and saleable conditions, such as furniture, fridges, or large consignments(if your having a real good clear out), on our regular van runs, if you need good collecting.</p>	
</div>						
</div>					
</div>	
</a>

<a href="#">
<div class="col-md-4 col-lg-4 col-sm-4" data-effect="slide-left">			
<div class="services">							
<div class="icon">	
<i class="fa fa-folder-o"></i>			
</div>		
	<div class="serv_detail">			
		<h3>Basic IT courses</h3>		
	<p>We provide a basic IT course and a free facility with the local housing provider to support their tenants to get online. Our internet zone is available to the public and is maintained by volunteers, Derek and his IT team.</p>	
</div>						
</div>					
</div>	
</a>						

					
</div>				
</div>		
</div>		
</section>		

<!-- End Service Page -->	

<!-- end of content-->



	
		<?php



		 include_once 'WIInc/footer.php'; ?>
		
	<!--End Wrapper-->

		<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>vendor/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>vendor/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>jquery.cookie.js"></script> <!-- jQuery cookie --> 
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>styleswitch.js"></script> <!-- Style Colors Switcher -->
	 
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>plugin/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>plugin/jquery.plugin.js"></script>
	<script type="text/javascript" src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_site'] ?>main.js"></script>


	<!-- Start Style Switcher -->
	<div class="switcher"></div>
	<!-- End Style Switcher -->
	
</body>
</html>
