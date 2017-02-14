<?php  

$userId = WISession::get('user_id'); 

?>

  <div class="bio">
  <div class="titleP">Bio:<a href="javascript:void(0);" class="btn" onclick="WIProfile.bio(<?php echo $userId?>)">Edit</a></div>
  <div id="bio"></div>
  <?php echo $bio_body = $profile->userDetails($userId, 'bio_body');
; ?>
  </div>
  <div class="User-Info">
<div class="titleP">
<?php echo $username  = $profile->getInfo($userId, 'username');
 ;?>'s Info: <a href="javascript:void(0);" class="btn" onclick="WIProfile.details(<?php echo $userId?>)">Edit</a> </div>
 <div id="details"></div>
<?php  echo $userinfo = $profile->Display_name($userId); ?>
    </div><!-- end of userinfo-->

    <div class="user_location">
       <div class="titleP">user Location : <a href="javascript:void(0);" class="btn" onclick="WIProfile.location(<?php echo $userId?>)">Edit</a></div>
       <div id="location"></div>
         <?php echo $locationInfo = $profile->LocationInfo($userId); ?>
          
          
         
          <div class="google_map" id="google_map">
          <div  class="google_inner_map"><a href="#" onclick="return false" onmousedown="javascript:toggleViewMap('google_map');">close map</a></div>
<iframe class="where_i_live" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo "$city,+$state,+$country";?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo "$city,+$state,+$country";?>&amp;z=12&amp;output=embed"></iframe>
<div align="left" style="padding:4px; background-color:#D2F0D3;"><a href="#" onclick="return false" onmousedown="javascript:toggleViewMap('google_map');">close map</a></div>
          </div>

    </div>

    <div class="social_profile">
    <div class="titleP">Social Info: <a href="javascript:void(0);" class="btn" onclick="WIProfile.social(<?php echo $userId?>)">Edit</a></div>
    <?php  echo $Social_profile = $profile->Social_Profile($userId); ?>

    </div><!-- end social profile-->
  
  <div class="stats">
  <div class="friends">
  <div class="friends_bar">
  <div class="titleP">Friends:</div>
  <div class="friend1">
    <?php echo $friendList = $profile->FriendsPopUp($userId); ?>
          <div id="view_all_friends">Friends
              <div class="friending">
                       <div class="friends_box">All Friends</div> 
                       <a href="#" onclick="return false" onmousedown="javascript:toggleViewAllFriends('view_all_friends');">close </a>
              </div>
              <div class="WIFriends">
                   <?php echo $friendPopBoxList; ?>
              </div>
              <div style="padding:6px; background-color:#000; border-top:#666 1px solid; font-size:10px; color: #0F0;">
                       Temporary programming shows 50 maximum. Navigating through the full list is coming soon.
              </div>
              <?php echo $twitterWidget; ?>
              <div class="infoBody" style="border-bottom:#999 1px solid;"></div>  
<?php echo $blabberDisplayList; ?>
</div>
</div>
</div><!-- end stats-->