<script src="WIInc/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="WIInc/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<div class="user-profile-header">
<img class="proheader" src="WIInc/img/worldmap.jpg">
<div class="profile_picture">
<?php echo $user_pic; ?>
<form method="post" enctype="multipart/form-data">
<input class="upload" type="file" name="file" size="25" />
<input type="submit" name="submit_a" value="upload" />
</form>
</div>
</div><!--user-profile-header-->

<aside>
<div class="button"><a href="profile.php?id=<?php echo $_SESSION['id']?>">Profile</a></div>
	<div class="bio">
	<div class="title">Bio:</div>
	<div class="bio_body">
	<form action="" method="post">
	<textarea  name="bio_b" class="bio"><?php echo $bio_body?></textarea> 
	<input type="submit" name="submit_b" class="button" value="Save">
	</form>
	</div>


	
	<div class="User-Info">
   <div class="title"><?php echo $username ;?>'s Info</div>
   <form action="" method="post">
<label for="First Name">First Name: </label>
<input type="text" name="first_name" class="form-control" placeholder="First name" value="<?php echo $firstname; ?>">
<label for="Last Name">Last Name: </label>
<input type="text" name="last_name" class="form-control" placeholder="Last name" value="<?php echo $lastname; ?>">
<label for="User Name">User Name: </label>
<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
<label for="Dragon Name">Dragon Name: </label>
<input type="text" name="dragon_name" class="form-control" placeholder="Dragon name" value="<?php echo $DragonName; ?>">
<input type="submit" name="submit_u" class="button" value="Save">
</form>
		</div><!-- end of userinfo-->

    <div class="user_location">
       <div class="title">user Location</div>
       <form action="" method="post">
        <label for="state">State: </label>
<input type="text" name="state" class="form-control" placeholder="state" value="<?php echo $state; ?>">
<label for="Country">Country: </label>
<input type="text" name="country" class="form-control" placeholder="country" value="<?php echo $country; ?>">
<label for="City">City: </label>
<input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $city; ?>">
<input type="submit" name="submit_l" class="button" value="Save">
	</form>
    </div><!-- end of user location-->

		<div class="social_profile">
    <div class="title">Social Info</div>
    <form action="" method="post">
<label for="Website">Website: </label>
<input type="text" name="Website" class="form-control" placeholder="Website" value="<?php echo $website; ?>">
<label for="Youtube">Youtube: </label>
<input type="text" name="Youtube" class="form-control" placeholder="Youtube" value="<?php echo $youtube; ?>">
<label for="facebook">facebook: </label>
<input type="text" name="facebook" class="form-control" placeholder="facebook" value="<?php echo $facebook; ?>">
<label for="Twitter">Twitter: </label>
<input type="text" name="Twitter" class="form-control" placeholder="Twitter" value="<?php echo $twitter; ?>">
<input type="submit" name="submit_s" class="button" value="Save">
	</form>
		</div><!-- end social profile-->
	<div class="stats">
	<div class="friends">
	<div class="friends_bar">
	<div class="title">Friends:</div>
	<div class="friend">
   
          <div id="view_all_friends">Friends
              <div class="friending">
                       <div class="friends_box">All Friends</div> 
                       <a href="#" onclick="return false" onmousedown="javascript:toggleViewAllFriends('view_all_friends');">close </a>
              </div>
              <div class="WIFriends">
                  
              </div>
              <div style="padding:6px; background-color:#000; border-top:#666 1px solid; font-size:10px; color: #0F0;">
                       Temporary programming shows 50 maximum. Navigating through the full list is coming soon.
              </div>
             
              <div class="infoBody" style="border-bottom:#999 1px solid;"></div>  

</div>
</div>
</div><!-- end stats-->
</aside>

<div class="prof_main">
<div class="boxing">
	<div id="TabbedPanels1" class="TabbedPanels">
	  <ul class="TabbedPanelsTabGroup">
	    <li class="TabbedPanelsTab" tabindex="0">Profile Wall</li>
	    <li class="TabbedPanelsTab" tabindex="0">Gamer Info</li>
        <li class="TabbedPanelsTab" tabindex="0">Interests</li>
        <li class="TabbedPanelsTab" tabindex="0">Somethign</li>
        <li class="TabbedPanelsTab" tabindex="0">Messages</li>
        <li class="TabbedPanelsTab" tabindex="0">Wallet</li>
      </ul>
	  <div class="TabbedPanelsContentGroup">
	    <div class="TabbedPanelsContent">
    Profile wall
	    </div>
	    <div class="TabbedPanelsContent">Gamer Info</div>
        <div class="TabbedPanelsContent">Interests</div>
        <div class="TabbedPanelsContent">
        	
        </div><!-- end of TabbedPanelsContent-->
        <div class="TabbedPanelsContent">
        <!-- start of messages tab -->
           <?php if($id == $profile_page_id)
            {?>
<!-- start off tabs 2  -->
<div id="TabbedPanels2" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab active" tabindex="0">Inbox</li>
            <li class="TabbedPanelsTab" tabindex="0">SentBox</li>
          </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">
            <!-- start of pm inbox-->
         
<div class="inbox">
<div class="title">Your Private Messages</div><!-- end tiotle-->

<!-- START THE PM FORM AND DISPLAY LIST -->
<form name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<div class="arrow_img">
<img src="WIInc/img/crookedArrow.png" width="16" height="17" alt="XyMore Private Messages" />
</div><!-- end arrow-->
<div class="sub_delete"><input type="submit" name="deleteBtn" id="deleteBtn" value="Delete" />
 <span id="jsbox" style="display:none"></span></div><!-- end sub-->
<div class="inbox_footing">
<input class="tick" name="toggleAll" id="toggleAll" type="checkbox" onclick="toggleChecks(document.myform.cb)" />
 <div class="from">From</div><!-- end from-->
<div class="sub"><span class="style2">Subject</span></div><!-- end sub-->
            <div class="date">Date</div><!-- end date-->
</div><!-- end  footing-->
 <div class="inner_usern">
        <?php
///////////End take away///////////////////////
// SQL to gather their entire PM list
      $my_id = $id;
$sql = mysqli_query($WIdb, "SELECT * FROM WI_private_messages WHERE to_id='$my_id' AND recipientDelete='0' ORDER BY id DESC LIMIT 10");

while($row = mysqli_fetch_array($sql)){ 

    $date = strftime("%b %d, %Y",strtotime($row['time_sent']));
    if($row['opened'] == "0"){
        $textWeight = 'msgDefault';
    } else {
      $textWeight = 'msgRead';
    }
    $fr_id = $row['from_id'];    
    // SQL - Collect username for sender inside loop
    $ret = mysqli_query($WIdb, "SELECT id, username FROM WI_Members WHERE id='$fr_id' LIMIT 10");
    while($raw = mysqli_fetch_array($ret)){ $Sid = $raw['id']; $Sname = $raw['username']; }

?>     
<div class="inner_id">
<input class="tick1" type="checkbox" name="cb<?php echo $row['id']; ?>" id="cb" value="<?php echo $row['id']; ?>" />
</div><!-- end innerid-->
<div class="inner_user"><a href="profile.php?id=<?php echo $Sid; ?>"><?php echo $Sname; ?></a></div><!-- end inner user-->
<div class="text_col">
<span class="toggle" style="padding:3px;">
<a class="<?php echo $textWeight; ?>" id="subj_line_<?php echo $row['id']; ?>" style="cursor:pointer;" onclick="markAsRead(<?php echo $row['id']; ?>)"><?php echo stripslashes($row['subject']); ?></a>
</span></div><!-- end text-col-->
<div class="hiddenDiv"> <br />
<?php echo stripslashes(wordwrap(nl2br($row['message']), 54, "\n", true)); ?>
<br /><br /><a href="javascript:toggleReplyBox('<?php echo stripslashes($row['subject']); ?>','<?php echo $my_uname; ?>','<?php echo $my_id; ?>','<?php echo $Sname; ?>','<?php echo $fr_id; ?>','<?php echo $thisRandNum; ?>')">REPLY</a><br />
</div><!-- end hidden -->

<div class="mdate"><span style="font-size:10px;"><?php echo $date; ?></span></div><!-- end mate-->
</div><!--end usern-->
</form>
<?php
}// Close Main while loop
?>

<hr style="margin-left:20px; margin-right:20px;" />
<!-- END THE PM FORM AND DISPLAY LIST -->
<!-- Start Hidden Container the holds the Reply Form -->            
<div id="replyBox" style="display:none; width:680px; height:264px; background-color: #005900; background-repeat:repeat; border: #333 1px solid; top:51px; position:fixed; margin:auto; z-index:50; padding:20px; color:#FFF;">
<div align="right"><a href="javascript:toggleReplyBox('close')"><font color="#00CCFF"><strong>CLOSE</strong></font></a></div>
<h2>Replying to <span style="color:#ABE3FE;" id="recipientShow"></span></h2>
Subject: <strong><span style="color:#ABE3FE;" id="subjectShow"></span></strong> <br>
<form action="javascript:processReply();" name="replyForm" id="replyForm" method="post">
<textarea id="pmTextArea" rows="8" style="width:98%;"></textarea><br />
<input type="hidden" id="pmSubject" />
<input type="hidden" id="pm_rec_id" />
<input type="hidden" id="pm_rec_name" />
<input type="hidden" id="pm_sender_id" />
<input type="hidden" id="pm_sender_name" />
<input type="hidden" id="pmWipit" />
<br />
<input name="replyBtn" type="button" onclick="javascript:processReply()" /> &nbsp;&nbsp;&nbsp; <span id="pmFormProcessGif"><img src="WIInc/img/loading.gif" width="28" height="10" alt="Loading" /></span>
<div id="PMStatus" style="color:#F00; font-size:14px; font-weight:700;">&nbsp;</div>
</form>
</div>
<!-- End Hidden Container the holds the Reply Form -->     
<!-- Start PM Reply Final Message box showing user message status when needed -->    
 <div id="PMFinal" style="display:none; width:652px; background-color:#005900; border:#666 1px solid; top:51px; position:fixed; margin:auto; z-index:50; padding:40px; color:#FFF; font-size:16px;"></div>
 <!-- End PM Reply Final Message box showing user message status when needed --> 

 <!-- end of pm inbox-->
 </div><!-- en dof  TabbedPanelsContent-->

            <div class="TabbedPanelsContent">
            <!-- start of sent box-->
<div class="inbox">
<div class="title">Messages You Sent</div><!-- end tiotle-->

<!-- START THE PM FORM AND DISPLAY LIST -->
<form name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<div class="arrow_img">
<img src="WIInc/img/crookedArrow.png" width="16" height="17" alt="XyMore Private Messages" />
</div><!-- end arrow-->
<div class="sub_delete"><input type="submit" name="deleteBtn" id="deleteBtn" value="Delete" />
 <span id="jsbox" style="display:none"></span></div><!-- end sub-->
<div class="inbox_footing">
<input class="tick" name="toggleAll" id="toggleAll" type="checkbox" onclick="toggleChecks(document.myform.cb)" />
 <div class="from">To</div><!-- end from-->
<div class="sub"><span class="style2">Subject</span></div><!-- end sub-->
            <div class="date">Date</div><!-- end date-->
</div><!-- end  footing-->
 
      <?php
///////////End take away///////////////////////
// SQL to gather their entire PM list
$sql = mysqli_query($WIdb, "SELECT * FROM WI_private_messages WHERE from_id='$my_id' AND senderDelete='0' ORDER BY id DESC LIMIT 100");

while($row = mysqli_fetch_array($sql)){ 

    $date = strftime("%b %d, %Y",strtotime($row['time_sent']));
    $to_id = $row['to_id'];    
    // SQL - Collect username for Recipient 
    $ret = mysqli_query($WIdb, "SELECT id, username FROM WI_Members WHERE id='$to_id' LIMIT 1");
    while($raw = mysqli_fetch_array($ret)){ $Rid = $raw['id']; $Rname = $raw['username']; }

?>    
<div class="inner_usern">
<div class="inner_id">
<input class="tick1" type="checkbox" name="cb<?php echo $row['id']; ?>" id="cb" value="<?php echo $row['id']; ?>" />
</div><!-- end innerid-->
<div class="inner_user"><a href="profile.php?id=<?php echo $Rid; ?>"><?php echo $Rname; ?></a></div><!-- end inner user-->
<div class="text_col">
<span class="toggle" style="padding:3px;">
<a class="<?php echo $textWeight; ?>" id="subj_line_<?php echo $row['id']; ?>" style="cursor:pointer;" onclick="markAsRead(<?php echo $row['id']; ?>)"><?php echo stripslashes($row['subject']); ?></a>
</span></div><!-- end text-col-->
<div class="hiddenDiv"> <br />
<?php echo stripslashes(wordwrap(nl2br($row['message']), 54, "\n", true)); ?>
</div><!-- end hidden -->
<div class="mdate"><span style="font-size:10px;"><?php echo $date; ?></span></div><!-- end mate-->
</div><!--end usern-->
<?php
}// Close Main while loop
?>

</form>
</div><!--user inbox-->
<!-- en dof sent box-->
 </div><!-- end of TabbedPanelsContent TabbedPanelsContentVisible-->
</div><!-- end of TabbedPanelsContentGroup-->
</div><!-- end of tabbed panels 2-->
<?php 
}else
 {

}
?>

          
</div><!-- end of tabbed panels 3-->


          <div class="TabbedPanelsContent">
          
        </div><!-- end of TabbedPanelsContent-->
      </div><!-- end boxing-->

</div><!-- end prof_main0-->
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>