 <link rel="stylesheet" type="text/css" href="<?php echo $WI['theme_dir'] ?><?php echo $WI['css_student'] ?>jquery-ui.css" />
<script>

</script>
 <style type="text/css">

.well{
  width: 103%;
}

.modal-body{
  width: 111%;
}

.ul-ui-tab{
  width: 100% !important;
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
                        <div class="col-lg-3 col-xs-6 col-xl-12">
                            <!-- input box's box -->
                            <div class="modal-body">
            <div class="well">
              <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<div id="tab">
    <ul>
        <li>
            <a href="#Introduction">Introduction</a>
        </li>
        <li>
            <a href="#Terms">Terms of Direction</a>
        </li>
        <li>
            <a href="#Planes">Planes</a>
        </li>
        <li>
            <a href="#Cavities">Cavities</a>
        </li>

        <li>
            <a href="#Units">Structeral Units</a>
        </li>
        <li>
            <a href="#Homeostasis">Homeostasis</a>
        </li>

        <li>
            <a href="#Summary">Summary of Outline</a>
        </li>

        <li>
            <a href="#Review">Review</a>
        </li>

        <li>
            <a href="#Test">Test</a>
        </li>


    </ul>
    <div id="Introduction">
       <?php  include_once 'modules/skeletal_system/skeletal_tabs.php'; 
      

       ?>
    </div>
    <div id="Terms">
         <?php include_once 'modules/muscular_system/muscular_tabs.php'; ?>

    </div>
    <div id="Planes">
         <?php include_once 'modules/cardiovascular_system/cardiovascular_tabs.php'; ?>
    </div>
    <div id="Cavities">
        <?php include_once 'modules/digestive_system/digestive_tabs.php'; ?>
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
<?php include_once 'modules/immune_system/immune_tabs.php'; ?>  </div> 
    <div id="Test">
<?php include_once 'modules/urinary_system/urinary_tabs.php'; ?> 
		</div>
	    
</div>

                        
                     </div>
                     </section>

                    <script type="text/javascript">$('#tab')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');
  

</script>
