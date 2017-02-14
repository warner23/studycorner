
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Profile Wall</li>
    <li class="TabbedPanelsTab" tabindex="0">Donations</li>
    <li class="TabbedPanelsTab" tabindex="0">Collections</li>
    <li class="TabbedPanelsTab" tabindex="0">Messages</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    Profile Wall

         <div width="67%" valign="top">
          <span style="font-size:16px; font-weight:800;"><?php  $mainNameLine = $profile->Display_name($userId); ?></span>
               <?php  $interactionBox = $profile->interactionBox($userId, $profile_page_id); ?></div>

          <div class="interactive" id="friends_requests">
 
 
          <div class="interactContainers" id="add_friend">
                <div  class="cancel" align="right"><a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers('add_friend');">cancel</a> </div>
                Add <?php echo WISession::get('username'); ?> as a friend? &nbsp;
                <a href="#" onclick="return false" onmousedown="javascript:addAsFriend(<?php echo $profile_page_id; ?>, <?php echo $userId; ?>, <?php echo $thisRandNum; ?>);">Yes</a>
                <span id="add_friend_loader"><img class="friend" src="WIInc/img/loading.gif" width="28" height="10" alt="Loading" /></span>
          </div>
          
          <div class="interactContainers" id="remove_friend">
                <div align="right"><a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers('remove_friend');">cancel</a> </div>
                Remove <?php echo WISession::get('username'); ?> from your friend list? &nbsp;
                <a href="#" onclick="return false" onmousedown="javascript:removeAsFriend(<?php echo $profile_page_id; ?>, <?php echo $userId; ?>, <?php echo $thisRandNum; ?>);">Yes</a>
                <span id="remove_friend_loader"><img class="loading_image" src="WIInc/img/loading.gif" alt="Loading" /></span>
          </div>
          <!-- START DIV that serves as an interaction status and results container that only appears when we instruct it to -->
          <div class="interactiveResults"></div>
           <!-- START DIV that contains the Private Message form -->
          <div class="interactContainers" id="private_message" style="background-color: #EAF4FF;">
<form action="javascript:sendPM();" name="pmForm" id="pmForm" method="post">
<font size="+1">Sending Private Message to <strong><em><?php echo WISession::get('username');; ?></em></strong></font><br /><br />
Subject:
<input name="pmSubject" id="pmSubject" type="text" maxlength="64" style="width:98%;" />
Message:
<textarea name="pmTextArea" id="pmTextArea" rows="4" style="width:98%;"></textarea>
  <input name="pm_sender_id" id="pm_sender_id" type="hidden" value="<?php echo $userId; ?>" />
  <input name="pm_sender_name" id="pm_sender_name" type="hidden" value="<?php echo WISession::get('username'); ?>" />
  <input name="pm_rec_id" id="pm_rec_id" type="hidden" value="<?php echo $profile_page_id; ?>" />
  <input name="pm_rec_name" id="pm_rec_name" type="hidden" value="<?php echo WISession::get('username'); ?>" />
  <input name="pmWipit" id="pmWipit" type="hidden" value="<?php echo $thisRandNum; ?>" />
  <span id="PMStatus" style="color:#F00;"></span>
  <br /><input name="pmSubmit" type="submit" value="Submit" /> or <a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers('private_message');">Close</a>
<span id="pmFormProcessGif" style="display:none;"><img class="priv_mes" src="../../WIInc/WIInc/img/loading.gif" width="28" height="10" alt="Loading" /></span></form>
          </div>
          <!-- END DIV that contains the Private Message form -->
          <div class="interactContainers" id="friend_requests" style="background-color:#FFF; height:240px; overflow:auto;">
            <div align="right"><a href="#" onclick="return false" onmousedown="javascript:toggleInteractContainers('friend_requests');">close window</a> &nbsp; &nbsp; </div>
            <h3>The following people are requesting you as a friend</h3>
            </div>

           
    

          </div>
          


    </div><!-- end of TabbedPanelsContent-->

    <div class="TabbedPanelsContent">Donations</div>
    <div class="TabbedPanelsContent">Collections</div>
    <div class="TabbedPanelsContent">
    Messages
     <!-- start of messages tab -->
           <?php if($userId == $profile_page_id)
            {?>
<?php include_once 'WIInc/messages_tabbed.php'; ?>
<?php 
}else
 {
	echo 'This is a Messages';
}
?>

    </div><!-- end of TabbedPanelsContent-->
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>