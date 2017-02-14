 <link rel="stylesheet" type="text/css" href="<?php echo $WI['theme_dir'] ?><?php echo $WI['css_student'] ?>jquery-ui.css" />

<script>

</script>
 <style type="text/css">

.mobile{
    visibility: hidden;
    display: none;
}
.well{
width: 100%;
}

.modal-body {
    width: 100%;
}

.ul-ui-tab{
  width: 100% !important;
}

.right-side {
    background-color: #f9f9f9;
    margin-left: 8px;
}

.content-header {
    background: #fbfbfb;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

.left{
    float: left;
}

.midleft{
float: left;
margin-left: 21%;
}

.midright{
float: left;
 margin-left: 2%;

}

.right{
    float: left;
     margin-left: 2%;

}

.dropdown-menu {
    position: absolute;
    top: -627%;
    left: -16px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 6px 0;
    margin: 4px 0 0;
    list-style: none;
    font-size: 14px;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    background-clip: padding-box;
}

@media only screen and (min-width: 769px){
.content {
    padding: 20px 15px;
    background: #f9f9f9;
}

.right-side {
    background-color: #f9f9f9;

}

.midleft{
float: left;
margin-left: 74%;
}

.midright{
float: left;
 margin-left: 2%;

}

.mobile{

    visibility: visible;
    display: block;
    width: 40%;
    float: right;
    margin-right: 107px;
}


}
@media (min-width: 1200px){

.col-lg-12 {
 width: 100% !important; 
}

.right-side {
    background-color: #f9f9f9;
    margin-left: 199px;
}

.midleft{
float: left;
margin-left: 74%;
}

.midright{
float: left;
 margin-left: 2%;

}

.mobile{
    visibility: visible;
    display: block;
    width: 40%;
    float: right;
    margin-right: 107px;
}


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

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-xl-12">
                            <!-- input box's box -->
                            <div class="modal-body">
            <div class="well">
              <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>


<div id="tab">
    <ul>
        <li>
            <a href="#Introduction" class="fa fa-dot-circle-o" title="<?php echo WILang::get("intro") ;?>">
            <span class="mobile"><?php echo WILang::get("intro") ;?></span></a>
        </li>
        <li>
            <a href="#Terms" class="fa fa-dot-circle-o" title="<?php echo WILang::get("tof") ;?>">
            <span class="mobile"><?php echo WILang::get("tof") ;?></span></a>
        </li>
        <li>
            <a href="#Planes"  class="fa fa-dot-circle-o" title="<?php echo WILang::get("Planes") ;?>">
            <span class="mobile"><?php echo WILang::get("Planes") ;?></span></a>
        </li>
        <li>
            <a href="#Cavities" class="fa fa-dot-circle-o" title="<?php echo WILang::get("cab") ;?>">
            <span class="mobile"><?php echo WILang::get("cab") ;?></span></a>
        </li>

        <li>
            <a href="#Units" class="fa fa-dot-circle-o" title="<?php echo WILang::get("units") ;?>">
            <span class="mobile"><?php echo WILang::get("units") ;?></span></a>
        </li>
        <li>
            <a href="#Homeostasis" class="fa fa-dot-circle-o" title="<?php echo WILang::get("homeo") ;?>">
            <span class="mobile"><?php echo WILang::get("homeo") ;?></span></a>
        </li>

        <li>
            <a href="#Summary" class="fa fa-dot-circle-o" title="<?php echo WILang::get("summary") ;?>">
            <span class="mobile"><?php echo WILang::get("summary") ;?></span></a>
        </li>

        <li>
            <a href="#Review" class="fa fa-dot-circle-o" title="<?php echo WILang::get("review") ;?>">
            <span class="mobile"><?php echo WILang::get("review") ;?></span></a>
        </li>

        <li>
            <a href="#Test" class="fa fa-question" title="<?php echo WILang::get("test") ;?>">
            <span class="mobile"><?php echo WILang::get("test") ;?></span></a>
        </li>


    </ul>
    <div id="Introduction">
       <?php  include_once 'introduction/intro_2d-tab.php'; ?>
    </div>
    <div id="Terms">
         <?php include_once 'direction/direction_2d-tab.php'; ?>

    </div>
    <div id="Planes">
         <?php include_once 'planes/planes_2d-tab.php'; ?>
    </div>
    <div id="Cavities">
        <?php include_once 'cavities/cavities_2d-tab.php'; ?>
    </div>

    <div id="Units">
   <?php include_once 'modules/endocrine_system/endocrine_tabs.php'; ?>
    </div>

    <div id="Homeostasis">
       <?php include_once 'modules/nervous_system/nervous_tabs.php'; ?>
    </div>

    <div id="Summary">
<?php include_once 'modules/respiratory_system/respiratory_tabs.php'; ?>  
</div>  

    <div id="Review">
<?php include_once 'modules/immune_system/immune_tabs.php'; ?>  
</div> 

    <div id="Test">
<?php include_once 'modules/urinary_system/urinary_tabs.php'; ?> 
		</div>
	    
</div>

                        
                     </div>
                     <div class="col-lg-12">  
                     
                     <div class="left"><button id="back"><?php echo WILang::get("back") ;?></button></div>
                     <div class="midleft"><button id="next"><?php echo WILang::get("next") ;?></button></div>
                     <div class="midright"><button><?php echo WILang::get("options") ;?></button></div>
                     <div class="right">
                         <ul>
                             <ul>
                             <li class="dropdown">
                             <a href="#" id="chat" class="dropdown-toggle" data-toggle="dropdown"><?php echo WILang::get("chat") ;?>
                             <strong class="marker"></strong>
                             </a>
                                <ul class="dropdown-menu">
                                    <li>chat
                                        <div class="col-lg-12 col-xl-12 col-xs-12">
                                            <div class="recieve"></div>
                                        </div>
                                        <div class="col-lg-12 col-xl-12 col-xs-12">
                                           <input type="text" name="chatting">
                                        </div>

                                    </li>
                                </ul>
                             </li>
                             </ul>
                         </ul>
                     </div>
                     </div>
                     </section>


                     </div>
                     </div>

                     </div>


                     </aside>

                    <script type="text/javascript">$('#tab')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');

    $(document).ready(function(){
        $("#chat").click(function(){

            $(".dropdown-menu").css("display", "block");
        });
    });

        $("#next").click(function(){
        window.location = "haap_cell.php";
    });

        $("#back").click(function(){
        window.location = "haap_intro.php";
    });
  

</script>
