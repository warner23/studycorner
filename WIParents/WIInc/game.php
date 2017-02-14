 <style type="text/css">
   .ui-tabs.ui-tabs-vertical {
    padding: 0;
    width: 42em;
}
.ui-tabs.ui-tabs-vertical .ui-widget-header {
    border: none;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav {
    float: left;
    width: 10em;
    background: #CCC;
    border-radius: 4px 0 0 4px;
    border-right: 1px solid gray;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li {
    clear: left;
    width: 100%;
    margin: 0.2em 0;
    border: 1px solid gray;
    border-width: 1px 0 1px 1px;
    border-radius: 4px 0 0 4px;
    overflow: hidden;
    position: relative;
    right: -2px;
    z-index: 2;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a {
    display: block;
    width: 100%;
    padding: 0.6em 1em;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a:hover {
    cursor: pointer;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
    margin-bottom: 0.2em;
    padding-bottom: 0;
    border-right: 1px solid white;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li:last-child {
    margin-bottom: 10px;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-panel {
    float: left;
    width: 28em;
    border-left: 1px solid gray;
    border-radius: 0;
    position: relative;
    left: -1px;
}

   
 </style>

 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<?php  include_once 'WIModules/modal-login-jquery/login/index.php';?>

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6 col-xl-12">
                            <!-- input box's box -->
                            <div class="modal-body">
            <div class="well">
              <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<div id="tabs">
    <ul>
        <li>
            <a href="#a">Tab A</a>
        </li>
        <li>
            <a href="#b">Tab B</a>
        </li>
        <li>
            <a href="#c">Tab C</a>
        </li>
        <li>
            <a href="#d">Tab D</a>
        </li>
    </ul>
    <div id="a">
        Content of A
    </div>
    <div id="b">
        Content of B
    </div>
    <div id="c">
        Content of C
    </div>
    <div id="d">
        Content of D
    </div>
</div>

                        
                     </div>
                     </section>

                    <script type="text/javascript">$('#tabs')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');
</script>
