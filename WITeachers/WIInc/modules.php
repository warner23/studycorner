  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>UI/jquery-ui.min.css">
<!-- main css -->
<link rel="stylesheet" href="<?php echo $WI['theme_dir'] ?><?php echo $WI['css_site'] ?>wi_cms.css">
        <!-- jQuery UI 1.16.3 -->
        <script src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>UI/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="<?php echo $WI['theme_dir'] ?><?php echo $WI['js_admin'] ?>UI/jquery-ui.min.js" type="text/javascript"></script>
      
   <script>
         $(function() {
            var $result = $('.mid');
            $( "#draggable-1" ).draggable({ 
                revert: "valid",
                cursor: "move" , 
                opacity: 0.35,
                
            });

             $( "#draggable-2" ).draggable({ 
                revert: "valid",
                cursor: "move" ,
                opacity: 0.35,
            });
              $( "#draggable-5" ).draggable({ 
                revert: "valid" ,
                cursor: "move",
                opacity: 0.35,
            });
              /*
            $( "#droppable-1" ).droppable({
                appendTo: "body",
                 helper: "clone",
                 cursor: "move",
                 drop: function( event, ui ) {
        $( this ).find( "#module" ).remove();
        $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
   }     
});
*/

                $('#droppable-1').droppable({
                    appendTo: "body",
                 helper: "clone",
                 cursor: "move",
        drop: function(e, ui) {
            outputResult(ui.draggable);
        }
    });

    function outputResult(elm) {
        if ($(elm).hasClass('content')) {
            $result.append('<div class="row"><div class="col-md-12"><script type="text/javascript">tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
});
</script>
<form method="post" action="somepage">
<textarea name="content" style="width:100%"></textarea>
</form></div><!-- end col-md--></div><!-- end row-->');
        } else if ($(elm).hasClass('Accordion')) {
            $result.append('<div class="test">awesome</div>');
        } else if ($(elm).hasClass('header')){
            $result.append('<div class="col-head"><div class="col-logo"><a href="<?php echo $WI["site_url"] ?>index.php"><img class="logo" src="<?php echo $WI["site_url"] ?>WIInc/img/head/logo.jpg"></a> </div><!-- end col-logo--><div class="col-ms"> <img class="head" src="<?php echo $WI["site_url"] ?>WIInc/img/head/header.jpg"></div><!-- end col-ms--></div><!-- end col-xl-->');
        }
    }
});
        




      </script>
<aside class="right-side">  
<div class="content" id="content">
 <section class="content-header">
                    <h1>
                        Modules
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Modules</li>
                    </ol>
                </section>

<div class="wrap">
    <h2>Module Center</h2>
</div>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<style>

#droppable-1 {
position: absolute;
    left: 0px;
    top: 0;
    width: 100%;
    height: 274px;
    background: #999;
    color: #fff;
    padding: 10px;
  }

  .external-event
  {
    z-index: 2000;
  }

.content
{
    width: 100%;
}
.cust-1
{
    width: 100%;
    padding: 5px;
    background-color: #2460C7;
}

.cust-title
{
    width: 31%;
    margin-left: 279px;
    color: white;
    font-size: 25px;
}

.button
{
        width: 8%;
    float: right;
    margin-top: -28px;
}

.right-side-panel
{
    background-color: #f9f9f9;
    /* margin-left: 267px; */
    float: left;
    /* min-height: 100%; */
    display: block;
    width: 75%;
    border: 2px solid black;
}

.Frame
{
    width: 90%;
    height: 600px;
    margin-left: 39px;
    padding: 10px;
}
    .w3eden{
        font-family: 'Open Sans', serif;
        font-size: 10pt;
        color: #555555;
    }
    .w3eden .panel-heading .mod_status{
        width:70px;font-size:9pt;font-weight:300;border-radius:2px;padding:5px;
        margin-top: -1px;
    }
    .w3eden .panel-heading{
        font-size: 11pt;
        font-weight: 900;
        color: #333333;
        line-height: normal;
    }
    .icon-ok{
        color: #008800;
    }
    .icon-remove{
        color: #ff0000;
    }
    a{
        outline: none !important;
    }
    #modpreview .btn,
    #cache .btn{
        opacity: 1 !important;
        width: 80px !important;
    }
    .popover .arrow{
        margin-left: 0 !important;
    }
    .panel-footer .btn{
        width: 90px;
        font-size: 11px;
    }

    .mid
    {

    }
</style>

<div id="avmodules" class="w3eden">
    <br/>
    <ul class="nav nav-tabs" style="margin-left:-20px;padding-left:20px;">
        <li class="active"><a href="#available" data-toggle="tab">Available Modules</a></li>
        <li><a href="#settings" data-toggle="tab">Settings</a></li>
        <li><a href="#edit" data-toggle="tab">Edit Modules</a></li>
        <li><a href="#store" data-toggle="tab">Module Store</a></li>
    </ul>
    <div class="tab-content"><br/>
        <div class="container-fluid tab-pane fade in active" id="available">
            <div class="row">
                <div class="col-md-12">
                
                </div>
            </div>
            <div class="row">
            <?php 

            /*
            $module = $module->displayModules('module_id');
            $mod_version = $module->displayModules('mod_version');
            $mod_status  = $module->displayModules('mod_status');
            $mod_status_appear  = $module->displayModules('mod_status_appear');
            $mod_icon =$module->displayModules('$mod_icons');
            $mod_name = $module->displayModules('module_name');
            $mod_auth  = $module->displayModules('mod_author');
            $mod_panel_cls =  $module->displayModules('mod_panel_cls');
            $Mod_description =  $module->displayModules('Mod_description');
            $mod_status_cls =  $module->displayModules('mod_status_cls');
            
              echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="panel panel-'.$mod_panel_cls." ".str_replace(".","_",$mod_version.'">
                    <div class="panel-heading"><b>' . $mod_name . '</b> <small id="st_' . $module . '" class="label label-' . $mod_status_cls . ' mod_status mod_status_' . $mod_status_appear . '">' . $mod_status_appear . '</small></div>
                    <div class="panel-body">' . substr($moduledata['Description'], 0, strpos($moduledata['Description'], "By")) . '</b></div>
                    <div class = "panel-footer">';
             
            if($mod_version =='pro_only'){
                echo "<button disabled='disabled' class='btn btn-danger btn-xs' style='width: 150px'>Available With Pro Only</button> <a  href='http://wpeden.com/minimax-wordpress-page-layout-builder-plugin/' target='_blank' class='btn btn-primary btn-xs pull-right'>Get Pro <i class='icon icon-chevron-sign-right'></i></a> ";
            } else {
                echo '<button style="width:80px" status="' . $mod_status . '" type="button" class="mod_name btn btn-xs btn-default text-primary" rel="' . $module . '">' . $mod_icon . '</button>'
                   . '&nbsp;<a href = "#" class="check-update btn btn-xs btn-default" rel="' . $module . '">Check Update</a>';
            }
                echo  '</div>'
                    . '</div>'
                    . '</div>';
    
    */

                    $module->displayModules();

             ?>

            </div>
        </div>
        <div class="container-fluid  tab-pane fade" id="settings">
            <div class="row">
                <div class="col-md-12">
                    <label>Module Caching &nbsp;</label>
                    <div class="btn-group" id="cache">
                        <button class="btn btn-"  data-cache="1" id="icahce_1">Active</button>
                        <button class="btn btn-" data-cache="0" id="icache_0">Inactive</button>
                    </div>
                </div>
                <div class="col-md-12"><br/>
                    <label>Module Preview &nbsp;</label>
                    <div class="btn-group" id="modpreview">
                        <button class="btn btn-"  data-mpv="1" id="modpreview_1">Active</button>
                        <button class="btn btn-"  data-mpv="0" id="modpreview_0">Inactive</button>
                    </div>
                </div>
            </div>
        </div>


         <div class="container-fluid  tab-pane fade" id="edit">
            <div class="row">
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">Active Modules</h4>
                                </div>
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id='external-events'>  

                                    <?php

                                    $module->activeModules();

                                    ?>
                                       <!-- <div class='external-event bg-green'>Header</div>
                                        <div class='external-event bg-red'>Menu</div>
                                        <div class='external-event bg-aqua'>Social Menu</div>
                                        <div class='external-event bg-yellow'>Footer</div>-->
                                        
                                        
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                           
                        </div><!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">                                
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="modules"><div class="mid" id="droppable-1">
         <p>Drop here</p>
      </div></div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->  
                    </div><!-- end contianer-->




        <div class="container-fluid  tab-pane fade" id="store">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info" style="font-size: 16px;line-height: 21px;">
                        Extend your WI Modules by adding following premium modules bundle. Each of these bundle packed with some awesome widgets. Check details in product page. 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="mxaddon" style="max-width: 251px; background: #fff;padding: 10px; border-radius:4px; margin-right: 45px;border: 1px solid #dedede">
                        <a target="blank" href="http://wpeden.com/product/minimax-modules-pack-1/">
                            <img style="height:auto; max-width: 100%;"class="" alt="MiniMax Modules Pack 1" src="http://cdn.wpeden.com/wp-content/uploads/2014/06/minimax-modules-pack-1-250x250.png">
                        </a>
                        <div class="addon-info" style="background:#F4F4F4;margin-top: 20px;padding: 10px;">
                            <a target="blank" style="text-decoration: none;" href="http://wpeden.com/product/minimax-modules-pack-1/">
                                <b>WI Modules Modules Pack 1</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="mxaddon" style="max-width: 251px; background: #fff;padding: 10px; border-radius:4px; margin-right: 45px;border: 1px solid #dedede">
                        <a target="blank" href="http://wpeden.com/product/minimax-modules-pack-2/">
                            <img style="height:auto; max-width: 100%;"class="" alt="MiniMax Modules Pack 2" src="http://cdn.wpeden.com/wp-content/uploads/2015/04/minimax-modules-pack-2-250x250.png">
                        </a>
                        <div class="addon-info" style="background:#F4F4F4;margin-top: 20px;padding: 10px;">
                            <a target="blank" style="text-decoration: none;" href="http://wpeden.com/product/minimax-modules-pack-2/">
                                <b>WI Modules Modules Pack 2</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/template" id="updatenotice">
    Update Available.<br/>
    Current Version: [version]<br/><br/>
    <a href="#" class="btn update-now btn-success" rel="[modulename]">Update Now</a> <a href="#" class="btn close-update-notice">Update Later</a>
</script>  

<script type="text/template" id="noupdate">
    No update available. You are using the latest version.<br/><br/>
    <a href="#" class="btn btn-default btn-sm close-update-notice">Close</a>
</script>

<script type="text/template" id="update-completed">
    MiniMax [modulename] Module has been successfully updated.<br/><br/>
    <a href="#" class="btn close-update-completed-notice">Okay</a>
</script>

<script type="text/javascript">

    jQuery('.check-update').click(function(e) {
        var o = this;
        var oc = jQuery("button[rel=" + this.rel + "]").html();
        //jQuery("button[rel=" + this.rel + "]").find('.icon').removeClass('icon-ok icon-remove').addClass('icon-spinner icon-spin');
        jQuery(o).html('<i class="icon-spinner icon-spin"></i>');
        e.preventDefault();
        var module = this.rel;
        jQuery.post(ajaxurl, {action: 'check_module_update', module: module}, function(res) {
        
        /*Module Update available*/   
        if (res != 0) {
            var content = jQuery('#updatenotice').html().replace("[version]", res.version).replace("[modulename]", res.module);
            jQuery(o).html('Check Update');
            jQuery(o).popover({html: true, title: 'Update Notification', content: content}).popover('show');
            
            /*Update Now*/
            jQuery('.update-now').click(function(e) {
                jQuery(o).find('.icon').removeClass('icon-ok icon-remove').addClass('icon-spinner icon-spin');
                e.preventDefault();
                jQuery(o).popover('destroy');
                
                jQuery.post(ajaxurl, {action: 'update_module', module: this.rel}, function(res) {
                    var content = jQuery('#update-completed').html().replace("[modulename]",module);
                    jQuery(o).popover({html: true, title: 'Update Notification', content: content}).popover('show');
                    jQuery(o).html('Check Update');
                    jQuery('.close-update-completed-notice').click(function (e){
                        e.preventDefault();
                        jQuery(o).popover('destroy');
                    });
            });
            });
            /*Update Later*/
            jQuery('.close-update-notice').click(function(e) {
                jQuery(o).popover('destroy');
                return false;
            });
            }
        /*No update available*/
        else {
            var content = jQuery('#noupdate').html();
            jQuery(o).html('Check Update');
            jQuery(o).popover({html: true, title: 'Update Notification', content: content}).popover('show');
            jQuery('.close-update-notice').click(function(e) {
            jQuery(o).popover('destroy');
            return false;
            });

            }
        }, "json");

    });

</script>




</div><!-- end content-->