

  <!-- Left nav
        
        ================================================== -->
        <div class="row">
           <div class="span3 bs-docs-sidebar">
                <ul class="nav nav-list bs-docs-sidenav">
                  <li>
                      <a href="index.php">
                          <i class="icon-home glyphicon glyphicon-home"></i>
                          <i class="icon-chevron-right glyphicon glyphicon-chevron-right"></i> 
                          <?php echo WILang::get('home');   echo WISession::get("Admin_user_id");

                          ?>
                      </a>
                  </li>
                  <li>
                      <a href="profile.php">
                          <i class="icon-user glyphicon glyphicon-user"></i>
                          <i class="icon-chevron-right glyphicon glyphicon-chevron-right"></i> 
                          <?php echo WILang::get('my_profile'); ?>
                      </a>
                  </li>
                  <?php if($user->isAdmin()): ?>
                  <li>
                      <a href="users.php">
                          <i class="icon-fire glyphicon glyphicon-fire"></i>
                          <i class="icon-chevron-right glyphicon glyphicon-chevron-right"></i> 
                          <?php echo WILang::get('users'); ?>
                      </a>
                  </li>
                  <li class="active">
                      <a href="user_roles.php">
                          <i class="icon-fire glyphicon glyphicon-fire"></i>
                          <i class="icon-chevron-right glyphicon glyphicon-chevron-right"></i> 
                          <?php echo WILang::get('user_roles'); ?>
                      </a>
                  </li>
                  <?php endif; ?>
                </ul>
              </div>

              <div class="span9">
                  <div class="control-group roles-input">
                    <div class="controls col-lg-3">
                      <input type="text" class="form-control col-lg-3" id='role-name' placeholder="<?php echo WILang::get('role_name'); ?>">
                    </div>
                    <button type="submit" class="btn btn-success" onclick="roles.addRole();">
                      <?php echo WILang::get('add'); ?>
                    </button>
              </div>
        <?php $roles = $WIdb->select("SELECT * FROM `WI_user_roles` WHERE `role_id` NOT IN (2,3)"); ?>
              <table class="table table-striped roles-table">
                  <thead>
                      <th><?php echo WILang::get('role_name'); ?></th>
                      <th><?php echo WILang::get('users_with_role'); ?></th>
                      <th><?php echo WILang::get('action'); ?></th>
                  </thead>
              <?php foreach ($roles as $role): ?>
                  <?php $result = $WIdb->select("SELECT COUNT(*) AS num FROM `WI_Members` WHERE `user_role` = :r", array( "r" => $role['role_id'])); ?>
                  <?php $usersWithThisRole = $result[0]['num']; ?>
                  <tr class="role-row">
                    <td><?php echo e($role['role']); ?></td>
                    <td><?php echo e($usersWithThisRole); ?></td>
                    <td>
                      <button type="button" class="btn btn-danger btn-sm" onclick="roles.deleteRole(this,<?php echo $role['role_id']; ?>);">
                        <i class="icon-trash glyphicon glyphicon-trash"></i>
                            <?php echo WILang::get('delete'); ?>
                      </button>
                    </td>
                    
                  </tr>
              <?php endforeach; ?>
              </table>
          </div>

        </div>
    
 

    <script type="text/javascript" src="WICore/js/wiengine.js"></script>
    <script type="text/javascript" src="WICore/js/roles.js"></script>
    <script type="text/javascript" src="WICore/js/index.js"></script>
    </body>
 </html>