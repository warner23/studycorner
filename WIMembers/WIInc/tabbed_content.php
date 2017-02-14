  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );    
  </script>
<style>
#tabs {
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}
</style>
 
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ul-ui-tab ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li class="ui-tabs-j ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0">
    <a href="#tabs-1" class="ui-tabs-anchor">Profile Wall</a>
    </li>
    <li class="ui-tabs-j ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="1">
    <a href="#tabs-2" class="ui-tabs-anchor">Messages</a>
    </li>
    
  </ul>
  <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
    <?php include_once 'WIInc/profile_wall.php'; ?>
  </div>
  <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
    boo
  </div>

</div>