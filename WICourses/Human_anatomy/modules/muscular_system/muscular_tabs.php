<script>
         $(function() {
            $( "#tabs-ui" ).tabs();
         });
      </script>
 
<div id="tabs-ui" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
  <ul class="ul-ui-tab ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
    <li class="ui-tabs-j ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0">
    <a href="#tabs-3" class="ui-tabs-anchor">2-D</a>
    </li>
    <li class="ui-tabs-j ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="1">
    <a href="#tabs-4" class="ui-tabs-anchor">3-D</a>
    </li>
    
  </ul>
  <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
    <?php include_once 'muscular_2d-tab.php'; ?>
  </div>
  <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
    <?php include_once 'muscular_human_body.php'; ?>
  </div>

</div>