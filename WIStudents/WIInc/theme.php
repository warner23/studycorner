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
              <ul class="nav nav-tabs">
                <li class="active"><a href="#theme" data-toggle="tab">Theme</a></li>
                <li><a href="#new_theme" data-toggle="tab">New Theme</a></li>
                <li><a href="#Slideshow" data-toggle="tab">Slideshow</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="theme">
                  <form action="" class="form-horizontal" id="loginform" method="post">
                    <fieldset>
                      <div id="legend">
                        <legend class="">Theme</legend>
                      </div>    
                      <div class="control-group form-group">
                        <!-- Username -->
                        <label class="control-label col-lg-4"  for="theme_name">Theme Name:</label>
                        <div class="controls col-lg-8">
  							<table id="tt"></table>
                      </div>

  
                      
 
 
                      <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                           <button id="loginbtn" type="submit" class="btn btn-success" name="submit_WIS">Save</button> 
                        </div>
                      </div>
                    </fieldset>
                  </form>                
                </div>
                <div class="tab-pane fade" id="new_theme">
                  <form action="" class="form-horizontal register-form" name="signupform" id="signupform" method="post">
                      <fieldset>
                        <div id="legend">
                          <legend class="">New Theme</legend>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for='host'>Host:<span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="host" class="input-xlarge form-control"  maxlength="88" placeholder="127.0.0.1" name="host" value="">
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db_username">Db Username:<span class="required">*</span></label>


                              <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                           <button id="loginbtn" type="submit" class="btn btn-success" name="submit_WID">Save</button> 
                        </div>
                      </div>
                    </fieldset>
                        <br /><br />
                  </form>
                </div>
                
                  <div class="tab-pane in" id="Slideshow">
                        <form action="" class="form-horizontal" id="forgot-pass-form">
                        <fieldset>
                          <div id="legend">
                            <legend class="">Email Settings</legend>
                          </div>    
                          <div class="control-group form-group">
                            <!-- Username -->
                            <label class="control-label col-lg-4" for="admin_email">Admin Email:</label>
                            <div class="controls col-lg-8">
                              <input type="email" id="admin_email" class="input-xlarge form-control" name="admin_email" placeholder="Admin@site.com" value="">
                            </div>
                          </div>

                           <div class="control-group form-group">
                        <!-- Password-->
                        <label class="control-label col-lg-4" for="email_method">Email Method:</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="email_method" maxlength="100" name="email_method" placeholder="smtp" class="input-xlarge form-control" value="">
                        </div>
                      </div>

                          <div class="control-group form-group">
                            <!-- Button -->
                            <div class="controls col-lg-offset-4 col-lg-8">
                              <button id="btn-forgot-password" class="btn btn-success"></button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                        
                  </div>
                           
                        </div><!-- ./col -->
                     </div>
                     </section>
                     <script type="text/javascript" src="WICore/js/theme.js"></script>