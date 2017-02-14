<?php

class WIProfile
{
	 private $WIdb;
	 private $userId;


	 public function __construct()
	 {
	 	$this->WIdb = WIdb::getInstance();
	 	//$this->getInfo($userId, $column);
	 }

	public function userDetails($userId, $column)
	 {
	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:userId');
	 	$query->bindParam(':userId', $userId, PDO::PARAM_INT);
	 	$query->execute();

		$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	 }


	 public function getInfo($userId, $column)
	 {

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_Members` WHERE `user_id` =:userId');
	 	$query->bindParam(':userId', $userId, PDO::PARAM_INT);
	 	$query->execute();

		$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
      }
      

	 public function Friends_Array($userId, $column)
	 {

	 	$query = $this->WIdb->prepare('SELECT friend_array FROM `WI_user_details` WHERE `user_id` =:userId');
	 	$query->bindParam(':userId', $userId, PDO::PARAM_INT);
	 	$query->execute();

	 	$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	 }

	 public function PMList($my_id, $column)
	 {
	 	$rep = 0;

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_private_messages` WHERE `to_id`=:userId AND `recipientDelete`= :rep ORDER BY id DESC LIMIT 10');
	 	$query->bindParam(':userId', $my_id, PDO::PARAM_INT);
	 	$query->bindParam(':rep', $rep, PDO::PARAM_INT);
	 	$query->execute();

	    $res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	 }

	 public function PMListUsernames($fr_id, $column)
	 {

	 	$query = $this->WIdb->prepare('SELECT `user_id`, `username` FROM `WI_Members` WHERE `user_id` =:fr_id LIMIT 10');
	 	$query->bindParam(':fr_id', $fr_id, PDO::PARAM_INT);
	 	$query->execute();

	    $res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	 }


	 public function PMSentList($from_id, $column)
	 {

	 	$del = 0;

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_private_messages` WHERE `from_id` =:userId AND `senderDelete` =:del ORDER BY id DESC LIMIT 100');
	 	$query->bindParam(':userId', $from_id, PDO::PARAM_INT);
	 	$query->bindParam(':del', $del, PDO::PARAM_INT);
	 	$query->execute();

	 	$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];

	 }


		 public function PMSentUsernames($to_id, $column)
	 {

	 	$query = $this->WIdb->prepare('SELECT `user_id`, `username` FROM `WI_Members` WHERE `user_id` =:to_id LIMIT 10');
	 	$query->bindParam(':to_id', $to_id, PDO::PARAM_INT);
	 	$query->execute();

	    $res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	 }	 


	 public function interactionBox($userId, $profile_page_id)
	 {

       if(isset($userId) && $userId != $profile_page_id)
       {

  $thisRandNum = rand(9999999999999,999999999999999999);
	 	$profile_page_id =  preg_replace('#[^0-9]#i', '', $_GET['id']); // filter everything but numbers
//	 	$friend_array =  userDetails($userId, 'friend_array');
	 	$value = $userId;
	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:value LIMIT 1');
	 	$query->bindParam(':value', $value, PDO::PARAM_INT);
	 	$query->execute();

	   $res = $query->fetch(PDO::FETCH_ASSOC);

		$friends = $res['friend_array'];
         $iFriend_array = explode(",", $friends);
		if (in_array($profile_page_id, $iFriend_array)) 
		{ 

		$friendLink = '<a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers(\'remove_friend\');">Remove Friend</a>';
	} else {
	    	$friendLink = '<a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers(\'add_friend\');">Add as Friend</a>';
	}

	 	 $interactionBox = '<div class="interactionLinksDiv">
       ' . $friendLink . ' 
           <a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers(\'private_message\');">Private Message</a>
          </div>';
      $the_blab_form = '<div style="background-color:#BDF; border:#999 1px solid; padding:8px;">
      <form action="" method="post" enctype="multi+part/form-data" name="blab_from">
          <textarea name="blab_field" rows="3" style="width:99%;"></textarea>
          <input name="blabWipit" type="hidden" value="' . $thisRandNum . '" />
          <strong>Write on ' . $username . '\'s Profile Wall</strong><input name="submit" type="submit" value="Blab" />
          </form></div>';
  }if (isset($userId) && $userId == $profile_page_id)
  { // If SESSION id is set, AND it does equal the profile owner's ID
  $thisRandNum = rand(9999999999999,999999999999999999);
  $interactionBox = '<div class="interactionLinksDiv">
           <a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers(\'friend_requests\');">Friend Requests</a>
          </div>';
      $the_blab_form = '
          <div style="background-color:#BDF; border:#999 1px solid; padding:8px;">
          <form action="" method="post" enctype="multi+part/form-data" name="blab_from">
          <textarea name="blab_field" rows="3" style="width:99%;"></textarea>
      <input name="blabWipit" type="hidden" value="' . $thisRandNum . '" />
          <strong>Talk away ' . $this->getInfo($userId,'username') . '</strong> (220 char max) <input name="submit" type="submit" value="Blab" />
          </form></div>';
} else { // If no SESSION id is set, which means we have a person who is not logged in
  $interactionBox = '<div style="border:#CCC 1px solid; padding:5px; background-color:#E4E4E4; color:#999; font-size:11px;">
           <a href="#">Sign Up</a> or <a href="#">Log In</a> to interact with ' . getInfo($userId, $username) . '
          </div>';
      $the_blab_form = '<div style="background-color:#BDF; border:#999 1px solid; padding:8px;">
          <textarea name="blab_field" rows="3" style="width:99%;"></textarea>
          <a href="#">Sign Up</a> or <a href="#">Log In</a> to write on ' . $username . '\'s Board
          </div>';


}
	 }


	 public function FriendsPopUp($userId, $profile_page_id)
	 {
	 	$value = $userId;
	 	$profile_page_id =  preg_replace('#[^0-9]#i', '', $_GET['id']); // filter everything but 

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:value LIMIT 1');
	 	$query->bindParam(':value', $value, PDO::PARAM_INT);
	 	$query->execute();

	 	$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res['friend_array'];
	 }
	 
	 public function User_pic($userId)
	 {
	 	//mechaninism to display picture either uploaded or default
	 	$value = $userId;

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:value LIMIT 1');
	 	$query->bindParam(':value', $value, PDO::PARAM_INT);
	 	$query->execute();

	   $res = $query->fetch(PDO::FETCH_ASSOC);

	   $default = "<img src='avatars/image01.jpg' width='218px' />"; 
	   $db_pic = '<img src=' . $res['avatar'] . '.jpg width="218px" />'; 

		if($res['avatar'] == "")
		{
			$msg = $default;
		} 

		else 
		{
		   $msg = $db_pic;
		}

		return($msg);


	 }


	 public function Display_name($userId)
	 {

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:value LIMIT 1');
	 	$query->bindParam(':value', $value, PDO::PARAM_INT);
	 	$query->execute();

	   $res = $query->fetch(PDO::FETCH_ASSOC);

	   $first_name = $res['first_name'];
				$last_name = $res['last_name'];

		if ($first_name != "" && $last_name != "")
			{

 $mainNameLine = "$first_name $last_name";
		$username = $first_name;
} else 
{
	$username = $this->getInfo('user_id', 'username');
		$mainNameLine = $username;
}
		if($mainNameLine == $first_name)

		{
			echo '<div class="name">Name: ' . $mainNameLine .'</div>
    <div class="username">Username: '. $username . '</div>';
		} 

		else 
		{
		   echo  '<div class="name">Name: ' . $mainNameLine . '</div>';
		}

	 }


	 public function LocationInfo($userId)
	 {

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:value LIMIT 1');
	 	$query->bindParam(':value', $value, PDO::PARAM_INT);
	 	$query->execute();

	   $res = $query->fetch(PDO::FETCH_ASSOC);

	   $country = $res['country'];
	   $state   = $res['state'];
	   $city    = $res['city'];
	   if ($country == "" && $state == "" && $city == "") 
	   {
    $locationInfo = "";
  } else {
  $locationInfo = "$city &middot; $state<br />$country ".'<a href="#" onclick="return false" onmousedown="javascript:toggleViewMap(\'google_map\');">view map</a>'; 
  }
	 }


	 public function Social_Profile($userId)
	 {

	 	$query = $this->WIdb->prepare('SELECT * FROM `WI_user_details` WHERE `user_id` =:value LIMIT 1');
	 	$query->bindParam(':value', $value, PDO::PARAM_INT);
	 	$query->execute();

	   $res = $query->fetch(PDO::FETCH_ASSOC);
	   $youtube = $res['youtube'];
	   $facebook = $res['facebook'];
	   $website = $res['website'];
	   $twitter = $res['twitter'];

	   if($youtube == "")
		{
			  $youtube = "";
			} else 
			{
			  $youtube = '<br /><br /><img src="WIInc/img/social_info/youtubeIcon.jpg" width="18" height="12" alt="Youtube Channel for ' . $username . '" /> <strong>YouTube Channel:</strong><br /><a href="http://www.youtube.com/user/' . $youtube . '" target="_blank">youtube.com/' . $youtube . '</a>';
			}

			///////  Mechanism to Display Facebook Profile link or not  //////////////////////////
			  if ($facebook == "") {
			    $facebook = "";
			  } else {
			  $facebook = '<br /><br /><img src="WIInc/img/social_info/facebookIcon.jpg" width="18" height="12" alt="Facebook Profile for ' . $username . '" /> <strong>Facebook Profile:</strong><br /><a href="http://www.facebook.com/profile.php?id=' . $facebook . '" target="_blank">profile.php?id=' . $facebook . '</a>';
			  }
			  ///////  Mechanism to Display Twitter Tweet Widget or not  //////////////////////////
			  if ($twitter == "") {
			    $twitterWidget = "";
			  } else {
			  $twitterWidget = "<script src=\"http://widgets.twimg.com/j/2/widget.js\"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 5,
			  interval: 6000,
			  width: 218,
			  height: 160,
			  theme: {
			    shell: {
			      background: '#BDF',
			      color: '#000000'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#000000',
			      links: '#0066FF',
			    }
			  },
			  features: {
			    scrollbar: true,
			    loop: false,
			    live: false,
			    hashtags: true,
			    timestamp: true,
			    avatars: false,
			    behavior: 'all'
			  }
			}).render().setUser('$twitter').start();
			</script>";
			  }
			    ///////  Mechanism to Display Website URL or not  //////////////////////////
			  if ($website == "") {
			    $website = "";
			  } else {
			  $website = '<br /><br /><img src="WIInc/img/social_info/websiteIcon.jpg" width="18" height="12" alt="Website URL for ' . $username . '" /> <strong>Website:</strong><br /><a href="http://' . $website . '" target="_blank">' . $website . '</a>'; 
			  }

			//mechanism to show all 4
			  if ($youtube != "" && $facebook != "" && $twitter != "" && $website != "")
			{
			  $Social_profile = '<div class="web">' . $website . '</div>
			              <div class="yout">' . $youtube . '</div>
			              <div class="fb">' . $facebook . '</div>
			              <div class="twit">' . $twitterWidget . '</div>';
			}else
			{
			  $Social_profile = '$website, $facebook, $twitter, $youtube';
			}

	 }


	 public function Detect_user_device()
	 {
	 	// ------- DETECT USER DEVICE ----------
$user_device = "";
$agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/iPhone/", $agent)) {
   $user_device = "iPhone Mobile";
} else if (preg_match("/Android/", $agent)) {
    $user_device = "Android Mobile";
} else if (preg_match("/IEMobile/", $agent)) {
    $user_device = "Windows Mobile";
} else if (preg_match("/Chrome/", $agent)) {
    $user_device = "Google Chrome";
} else if (preg_match("/MSIE/", $agent)) {
    $user_device = "Internet Explorer";
} else if (preg_match("/Firefox/", $agent)) {
    $user_device = "Firefox";
} else if (preg_match("/Safari/", $agent)) {
    $user_device = "Safari";
} else if (preg_match("/Opera/", $agent)) {
    $user_device = "Opera";
}
$OSList = array
(
        // Match user agent string with operating systems
        'Windows 3.11' => 'Win16',
        'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)',
        'Windows 98' => '(Windows 98)|(Win98)',
        'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
        'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
        'Windows Server 2003' => '(Windows NT 5.2)',
        'Windows Vista' => '(Windows NT 6.0)',
        'Windows 7' => '(Windows NT 6.1)|(Windows NT 7.0)',
        'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'Windows ME' => 'Windows ME',
        'Open BSD' => 'OpenBSD',
        'Sun OS' => 'SunOS',
        'Linux' => '(Linux)|(X11)',
        'Mac OS' => '(Mac_PowerPC)|(Macintosh)',
        'QNX' => 'QNX',
        'BeOS' => 'BeOS',
        'OS/2' => 'OS/2',
		'Mac OS' => 'Mac OS',
        'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
);
 
// Loop through the array of user agents and matching operating systems
foreach($OSList as $CurrOS=>$Match) {
        // Find a match
        if (preg_match('/[regex]/i' ,$Match, $agent)) {
                break;
        } else {
			$CurrOS = "Unknown OS";
		}
}
$device = "$user_device : $CurrOS";
// ------- END DETECT USER DEVICE ----------

	 }

	 /*
	 public function WIChat($userId)
	 {

	 	if(isset($_POST['blab_field']) && $_POST['blab_field'] != "" && $_POST['blab_field'] != " ")
	 	{

	 	$blabWipit = $_POST['blabWipit'];
	 	$sessWipit = base64_decode(WISession::get('wipit')); 

	 	if(!isset(WISession::get('wipit')))
	 	{

	 	}elseif ($blabWipit == $sessWipit)
	 	{
	 		$query = $this->WIdb->prepare('SELECT * FROM `WI_blabbing` WHERE `mem_id` =:userId ORDER BY blab_date DESC LIMIT 50');
	 		$query->bindParam(':userId', $userId, PDO::PARAM_INT);
	 		$query->execute();

	 		$bi = 1;

	 		while($res = $query->fetch(PDO::FETCH_ASSOC))
	 		{
	 			$blab_id = $res['id'];

	 			if($bi > 20)
	 			{
	 				$query = $WIdb->prepare('DELETE FROM `WI_blabbing` WHERE `id` =:blab_id');
	 				$query->bindParam(':blab_id', $blab_id, PDO::PARAM_INT);
	 				$query->execute();
	 			}
	 			$bi++;
	 		}

	 		$blab_field = $_POST['blab_field'];
	 	 $blab_field = stripslashes($blab_field);
	 	 $blab_field = strip_tags($blab_field);
	 	 $blab_field = mysqli_real_escape_string($blab_field);
	 	 $blab_field = str_replace("'", "&#39;", $blab_field);

	 	 $id = $blab_id;
	 	 $blab_date = now();
	 	 $blab_type = 'a';
	 	 $device = "$user_device : $CurrOS";


	 	 $query = $WIdb->prepare('INSERT INTO `WI_blabbing` (mem_id, the_blab, blab_date, blab_type, device) VALUES(:id,:blab_field, :blab_date, :blab_type, :device)')
	 	 $query->bindParam(':id', $id, PDO::PARAM_INT);
	 	 $query->bindParam(':blab_field', $blab_field, PDO::PARAM_STR);
	 	 $query->bindParam(':blab_date', $blab_date, PDO::PARAM_STR);
	 	 $query->bindParam(':blab_type', $blab_type, PDO::PARAM_STR);
	 	 $query->bindParam(':device', $device, PDO::PARAM_STR);
	 	 $query->execute();

	 	 $blab_outout_msg = "";

	 	}	
	 	

	 	
	   }


	 } 
	 */



}