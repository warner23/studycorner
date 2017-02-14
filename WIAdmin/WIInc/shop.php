 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Shop
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Shop</li>
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
                <li class="active"><a href="#Shop" data-toggle="tab">Shop</a></li>
                <li><a href="#Recommended" data-toggle="tab">Recommended</a></li>
                <li><a href="#Slideshow" data-toggle="tab">Slideshow</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="Shop">
                  <form action="" class="form-horizontal" id="loginform" method="post">
                    <fieldset>
                      <div id="legend">
                        <legend class="">Shop</legend>
                      </div>    
                      <div class="control-group form-group">
                        <!-- Username -->
                        <label class="control-label col-lg-4"  for="website_name">Item Name:</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="website_name"  maxlength="88" name="website_name" placeholder="Item Name" class="input-xlarge form-control" value=""> <br />
                        </div>
                      </div>

                      <div class="control-group form-group">
                        <!-- Password-->
                        <label class="control-label col-lg-4" for="website_url">item code:</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="website_url" maxlength="100" name="website_url" placeholder="item code" class="input-xlarge form-control" value="">
                        </div>
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
                <div class="tab-pane fade" id="Recommended">
                  <form action="" class="form-horizontal register-form" name="signupform" id="signupform" method="post">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Recommmended Slideshow </legend>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for='host'>Item Name:<span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="host" class="input-xlarge form-control"  maxlength="88" placeholder="127.0.0.1" name="host" value="">
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db_username">Item Code:<span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="db_username" class="input-xlarge form-control" maxlength="16" placeholder="Username" name="db_username" value="">
                                <span id="unamestatus"></span>
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db_pass">Db Password: <span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="password" id="db_pass" class="input-xlarge form-control" maxlength="16" placeholder="Password" name="db_pass" value="">
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db">Database <span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="db" class="input-xlarge form-control" maxlength="16" placeholder="Database" name="db" value="">
                            </div>
                        </div>
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