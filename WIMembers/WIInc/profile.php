<?php 

$userId = WISession::get('user_id'); 
?>

<script src="WICore/WIJ/interactive_profile.js" type="text/javascript"></script>
<div class="container">
<div class="row">
<div class="user-profile-header">
<img class="proheader" src="WIMedia/Img/worldmap.jpg">
<div class="profile_picture">
<img class="profile" <?php 
echo $user_pic  = $profile->User_pic($userId); ?></div>
</div><!--user-profile-header-->
</div>
<aside>
<?php include_once 'WIInc/sidebar.php';
 ?>
</aside>


<div class="prof_main">
<div class="boxing">
<?php include_once 'WIInc/tabbed_content.php';



 ?>
      </div><!-- end boxing-->

</div><!-- end prof_main0-->
</div>
</div>

