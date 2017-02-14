 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Site
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Site</li>
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
              <ul class="nav nav-tabs">
                <li class="active"><a href="#siteSettings" data-toggle="tab">Website</a></li>
                <li><a href="#database" data-toggle="tab">Database</a></li>
                <li><a href="#email" data-toggle="tab">Email</a></li>
                 <li><a href="#session" data-toggle="tab">Session</a></li>
                 <li><a href="#login_confirm" data-toggle="tab">Login</a></li>
                 <li><a href="#password_security" data-toggle="tab">Password Security</a></li>
                 <li><a href="#social_setup" data-toggle="tab">Social Set up</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="siteSettings">
                  <form action="" class="form-horizontal" id="loginform" method="post">
                    <fieldset>
                      <div id="legend">
                        <legend class="">Website Settings</legend>
                      </div>    
                      <div class="control-group form-group">
                        <!-- Username -->
                        <label class="control-label col-lg-4"  for="website_name">Website Name:</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="website_name"  maxlength="88" name="website_name" placeholder="Website Name" class="input-xlarge form-control" value="<?php echo $site->Website_Info('site_name')?>"> <br />
                        </div>
                      </div>

                      <div class="control-group form-group">
                        <!-- Password-->
                        <label class="control-label col-lg-4" for="website_domain">Website Domain:</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="website_domain" maxlength="100" name="website_domain" placeholder="Website Domain" class="input-xlarge form-control" value="<?php echo $site->Website_Info('site_domain')?>">
                        </div>
                      </div>

                      <div class="control-group form-group">
                        <!-- Password-->
                        <label class="control-label col-lg-4" for="website_url">Website Url:</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="website_url" maxlength="100" name="website_url" placeholder="Website Url" class="input-xlarge form-control" value="<?php echo $site->Website_Info('site_url')?>">
                        </div>
                      </div>
                      
 
 
                      <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                           <button id="loginbtn" type="submit" class="btn btn-success" name="submit_WIW">Save</button> 
                        </div>
                      </div>
                    </fieldset>
                  </form>                
                </div>
                <div class="tab-pane fade" id="database">
                  <form action="" class="form-horizontal register-form" name="signupform" id="signupform" method="post">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Database Settings</legend>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for='host'>Host:<span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="host" class="input-xlarge form-control"  maxlength="88" placeholder="127.0.0.1" name="host" value="<?php echo $site->Website_Info('db_host')?>">
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db_username">Db Username:<span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="db_username" class="input-xlarge form-control" maxlength="16" placeholder="Username" name="db_username" value="<?php echo $site->Website_Info('db_username')?>">
                                <span id="unamestatus"></span>
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db_pass">Db Password: <span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="password" id="db_pass" class="input-xlarge form-control" maxlength="16" placeholder="Password" name="db_pass" value="<?php echo $site->Website_Info('db_pass')?>">
                            </div>
                        </div>

                        <div class="control-group  form-group">
                            <label class="control-label col-lg-4" for="db">Database <span class="required">*</span></label>
                            <div class="controls col-lg-8">
                                <input type="text" id="db" class="input-xlarge form-control" maxlength="16" placeholder="Database" name="db" value="<?php echo $site->Website_Info('db_name')?>">
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
                
                  <div class="tab-pane in" id="email">
                        <form action="" class="form-horizontal" id="forgot-pass-form">
                        <fieldset>
                          <div id="legend">
                          <h3>Email Configuration</h3>

                    <label for="mailer">Mailer</label>
                    <select name="mailer" id="mailer">
                        <option value="mail">PHP mail()</option>
                        <option value="smtp">SMTP</option>
                    </select>

                    <div id="smtp-wrapper" style="display: none;">
                        <label for="smtp_host">SMTP Host</label>
                        <input type="text" class="input-xlarge" id="smtp_host" name="smtp_host">

                        <label for="smtp_port">SMTP Port</label>
                        <input type="text" class="input-xlarge" id="smtp_port" name="smtp_port">

                        <label for="smtp_username">SMTP Username</label>
                        <input type="text" class="input-xlarge" id="smtp_username" name="smtp_username">

                        <label for="smtp_password">SMTP Password</label>
                        <input type="text" class="input-xlarge" id="smtp_password" name="smtp_password">

                        <label for="smtp_enc">SMTP Encryption</label>
                        <input type="text" class="input-xlarge" id="smtp_enc" name="smtp_enc">
                        <span class="help-block">
                            Some servers require encryption (tls or ssl) set. Set it if your host requires that.
                        </span>
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



                      <div class="tab-pane in" id="session">
                        <form action="" class="form-horizontal" id="forgot-pass-form">
                        <fieldset>
                          <div id="legend">
                        <label>Session secure</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="session_secure" class="btn-group-value"  value="<?php echo $site->Website_Info('secure_session')?>"/>
                        <button type="button" name="session_secure" value="true"  class="btn">yes</button>
                        <button type="button" name="session_secure" value="false" class="btn btn-danger active" >No</button>
                    </div>
                    <span class="help-block">Select <strong>Yes</strong> if you are using HTTPS.</span>
                    
                    <label>Session HTTP Only</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="session_http_only" class="btn-group-value" value="<?php echo $site->Website_Info('http_only')?>" />
                        <button type="button" name="session_http_only" value="true"  class="btn btn-success active">Yes</button>
                        <button type="button" name="session_http_only" value="false" class="btn" >No</button>
                    </div>
                    <span class="help-block">Prevent JavaScript to access your session cookie and protect you from XSS attack. Recommended: <strong>Yes</strong></span>
                    
                     <label>Session Regenerate Id</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="session_regenerate_id" class="btn-group-value" value="<?php echo $site->Website_Info('regenerate_id')?>" />
                        <button type="button" name="session_regenerate_id" value="true"  class="btn btn-success active">Yes</button>
                        <button type="button" name="session_regenerate_id" value="false" class="btn" >No</button>
                    </div>
                    <span class="help-block">Force session to regenerate id every time. Recommended: <strong>Yes</strong></span>
                    
                     <label>Session Use Only Cookies</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="session_use_only_cookies" class="btn-group-value" value="<?php echo $site->Website_Info('use_only_cookie')?>" />
                        <button type="button" name="session_use_only_cookies" value="1"  class="btn btn-success active">Yes</button>
                        <button type="button" name="session_use_only_cookies" value="0" class="btn" >No</button>
                    </div>
                    <span class="help-block">Enabling this setting prevents attacks involved passing session ids in URLs. Recommended: <strong>Yes</strong></span>
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




                     <div class="tab-pane in" id="login_confirm">
                        <form action="" class="form-horizontal" id="forgot-pass-form">
                        <fieldset>
                          <div id="legend">
                      <h3>Login Configuration</h3>
                    
                    <label for="login_fingerprint">Fingerprint</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="login_fingerprint" class="btn-group-value" value="<?php echo $site->Website_Info('login_fingerprint')?>"/>
                        <button type="button" name="login_fingerprint" value="true"  class="btn btn-success active">Yes</button>
                        <button type="button" name="login_fingerprint" value="false" class="btn" >No</button>
                    </div>
                    <span class="help-block">
                        If you select <strong>Yes</strong>, every time when user is logged in, hash function will generate string
                        based on your IP Address and your browser name, and store it inside $_SESSION. This will prevent someone 
                        to steal your session. <br />
                        <strong>Note: </strong> It can cause problems if user IP address changes very often. <br />
                        Recommended: <strong>Yes</strong>
                    </span>
                    
                    <label for="max_login_attempts">Max Login Attempts</label>
                    <div class="input-prepend">
                      <span class="add-on">#</span>
                      <input type="text" class="input-small" name="login_max_login_attempts" id="max_login_attempts" value="<?php echo $site->Website_Info('max_login_attempts')?>" />
                    </div>
                    <span class="help-block">
                        Number of login attempts before IP address is blocked for current day. <br />
                        Prevent <strong>brute force</strong> attacks.  
                    </span>

                    <label for="redirect_after_login">Redirect After Login</label>
                    <div class="input-prepend">
                        <input type="text" class="input-xlarge" name="redirect_after_login" id="redirect_after_login" value="<?php echo $site->Website_Info('redirect_after_login')?>" />
                    </div>
                    <span class="help-block">
                        Default page where user will be redirected after success login.
                        Specific redirect pages based on user roles can be added later.
                    </span>
                </div>
                   <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                           <button id="loginbtn" type="submit" class="btn btn-success" name="submit_WILC">Save</button> 
                        </div>
                      </div>
                        </fieldset>
                      </form>
                        
                  </div>




                                       <div class="tab-pane in" id="password_security">
                        <form action="" class="form-horizontal" id="forgot-pass-form">
                        <fieldset>
                          <div id="legend">
                      <h3>Password Encryption</h3>
                    
                    <div class="alert alert-success" id="choice-wrapper-bcrypt">
                        <div class="radio">
                              <input type="radio" name="encryption" id="encryption-bcrypt" value="bcrypt" checked>
                              Bcrypt
                        </div>
                        <br />
                        <span class="help-block">
                            Bcrypt is a key derivation function for passwords designed by Niels Provos and David Mazières, 
                            based on the Blowfish cipher, and presented at USENIX in 1999. <br />
                            <strong>Note:</strong> This method can be really slow if you choose cost greater than 15. <br />
                            It's <strong>recommended</strong> to choose cost between <strong>10</strong> and <strong>15</strong> 
                            to make balance between speed and security.<br />
                            Higher cost - slower but more secure.
                        </span>
                        <p>Cost</p>
                        <select class="form-control" name="bcrypt_cost">
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13" selected="">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                    
                    <div class="alert alert-error" id="choice-wrapper-sha">
                        <div class="radio">
                              <input type="radio" name="encryption" id="encryption-sha512" value="sha512">
                              SHA512
                        </div>  
                        <br />
                        <span class="help-block">
                            SHA-512 is one of cryptographic hash functions that belong to SHA2 family, designed by the U.S. National Security Agency (NSA) 
                            and published in 2001 by the NIST as a U.S. Federal Information Processing Standard. No security flaws identified. <br />
                             <strong>Note:</strong> This is very fast hash function, so if your priority is speed, this one you should choose. <br />
                             Its <strong>recommended</strong> to select number of iterations between <strong>30000</strong> and <strong>60000</strong>. <br />
                             More iterations - slower but more secure.
                        </span>
                        <p>Iterations</p>
                        <select class="form-control" name="sha512_iterations">
                            <option value="10000">10000</option>
                            <option value="15000">15000</option>
                            <option value="20000">20000</option>
                            <option value="25000" selected>25000</option>
                            <option value="30000">30000</option>
                            <option value="35000">35000</option>
                            <option value="40000">40000</option>
                            <option value="45000">45000</option>
                            <option value="50000">50000</option>
                            <option value="55000">55000</option>
                            <option value="60000">60000</option>
                            <option value="65000">65000</option>
                            <option value="70000">70000</option>
                            <option value="75000">75000</option>
                            <option value="80000">80000</option>
                            <option value="85000">85000</option>
                            <option value="90000">90000</option>
                            <option value="95000">95000</option>
                            <option value="10000">10000</option>
                        </select>
                    </div>
                </div>
                   <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                           <button id="loginbtn" type="submit" class="btn btn-success" name="submit_WILC">Save</button> 
                        </div>
                      </div>
                        </fieldset>
                      </form>
                        
                  </div>



                     <div class="tab-pane in" id="social_setup">
                        <form action="" class="form-horizontal" id="forgot-pass-form">
                        <fieldset>
                          <div id="legend">
  <h3>Social Login</h3>

                    <label>Twitter Login</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="twitter_login" class="btn-group-value" id="tw-login" value="<?php echo $site->Website_Info('twitter_enabled')?>" />
                        <button type="button" name="twitter_login" value="true" id="tw-enabled"  class="btn btn-success active">Enabled</button>
                        <button type="button" name="twitter_login" value="false" id="tw-disabled" class="btn" >Disabled</button>
                    </div>
                    <div class="tw-fields">
                        <label for="tw_key">Key</label>
                        <input type="text" class="input-xlarge" id="tw_key" name="tw_key"><?php echo $site->Website_Info('twitter_key')?>

                        <label for="tw_secret">Secret</label>
                        <input type="text" class="input-xlarge" id="tw_secret" name="tw_secret"><?php echo $site->Website_Info('twitter_secret')?>
                    </div>

                    <label>Facebook Login</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="facebook_login" class="btn-group-value"  id="fb-login" value="<?php echo $site->Website_Info('facebook_enabled')?>" />
                        <button type="button" name="facebook_login" value="true" id="fb-enabled"  class="btn btn-success active">Enabled</button>
                        <button type="button" name="facebook_login" value="false" id="fb-disabled" class="btn" >Disabled</button>
                    </div>
                    <div class="fb-fields">
                        <label for="fb_id">ID</label>
                        <input type="text" class="input-xlarge" id="fb_id" name="fb_id"><?php echo $site->Website_Info('facebook_id')?>

                        <label for="fb_secret">Secret</label>
                        <input type="text" class="input-xlarge" id="fb_secret" name="fb_secret"><?php echo $site->Website_Info('facebook_secret')?>
                    </div>

                    <label>Google+ Login</label>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <input type="hidden" name="google_login" class="btn-group-value"  id="gp-login" value="<?php echo $site->Website_Info('google_enabled')?>" />
                        <button type="button" name="google_login" value="true" id="gp-enabled"  class="btn btn-success active">Enabled</button>
                        <button type="button" name="google_login" value="false" id="gp-disabled" class="btn" >Disabled</button>
                    </div>
                    <div class="gp-fields">
                        <label for="gp_id">ID</label>
                        <input type="text" class="input-xlarge" id="gp_id" name="gp_id"><?php echo $site->Website_Info('google_id')?>

                        <label for="gp_secret">Secret</label>
                        <input type="text" class="input-xlarge" id="gp_secret" name="gp_secret"><?php echo $site->Website_Info('google_secret')?>
                    </div>
                </div>
                   <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                           <button id="loginbtn" type="submit" class="btn btn-success" name="submit_WILC">Save</button> 
                        </div>
                      </div>
                        </fieldset>
                      </form>
                        
                  </div>



                           
                        </div><!-- ./col -->
                     </div>
                     </section>