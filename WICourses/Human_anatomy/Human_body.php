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
            <a href="#Skeletal">Skeletal System</a>
        </li>
        <li>
            <a href="#Muscular">Muscular System</a>
        </li>
        <li>
            <a href="#Cardiovascular">Cardiovascular System</a>
        </li>
        <li>
            <a href="#Digestive">Digestive System</a>
        </li>

        <li>
            <a href="#Endocrine">Endocrine System</a>
        </li>
        <li>
            <a href="#Nervous">Nervous System</a>
        </li>

        <li>
            <a href="#Respiratory">Respiratory System</a>
        </li>

        <li>
            <a href="#Immune">Immune/Lymphatic Systems</a>
        </li>

        <li>
            <a href="#Urinary">Urinary System</a>
        </li>

         <li>
            <a href="#FReproductive">Female Reproductive System</a>
        </li>

         <li>
            <a href="#MReproductive">Male Reproductive System</a>
        </li>

         <li>
            <a href="#Integumentary">Integumentary System</a>
        </li>

    </ul>
    <div id="Skeletal">
       <?php  include_once 'modules/skeletal_system/skeletal_tabs.php'; 
      

       ?>
    </div>
    <div id="Muscular">
         <?php include_once 'modules/muscular_system/muscular_tabs.php'; ?>

    </div>
    <div id="Cardiovascular">
         <?php include_once 'modules/cardiovascular_system/cardiovascular_tabs.php'; ?>
    </div>
    <div id="Digestive">
        <?php include_once 'modules/digestive_system/digestive_tabs.php'; ?>
    </div>

    <div id="Endocrine">
   <?php include_once 'modules/endocrine_system/endocrine_tabs.php'; ?>
    </div>

    <div id="Nervous">
       <?php include_once 'modules/nervous_system/nervous_tabs.php'; ?>
    </div>

    <div id="Respiratory">
<?php include_once 'modules/respiratory_system/respiratory_tabs.php'; ?>  
</div>  

    <div id="Immune">
<?php include_once 'modules/immune_system/immune_tabs.php'; ?>  </div> 
    <div id="Urinary">
<?php include_once 'modules/urinary_system/urinary_tabs.php'; ?> 
		</div>
	     <div id="FReproductive">
	<?php include_once 'modules/female_reproductive_system/freproductive_tabs.php'; ?> 
</div>
     <div id="MReproductive">
<?php include_once 'modules/male_reproductive_system/mreproductive_tabs.php'; ?>   
</div>
     <div id="Integumentary">
<?php include_once 'modules/integumentary_system/integumentary_tabs.php'; ?>   
</div>
</div>

                        
                     </div>
                     </section>

                    <script type="text/javascript">$('#tab')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');
  

</script>
