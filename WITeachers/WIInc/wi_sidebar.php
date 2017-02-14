 
 <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="WIInc/img/avatars/13.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php  echo $Info->getUserInfo('username');
                        ?></p>


                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Updates</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>My courses</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WISite.php"><i class="fa fa-angle-double-right"></i> Site</a></li>
                                <li><a href="WIForum.php"><i class="fa fa-angle-double-right"></i> Forum</a></li>
                                <li><a href="WIShop.php"><i class="fa fa-angle-double-right"></i> Shop</a></li>
                                <li><a href="WIShop.php"><i class="fa fa-angle-double-right"></i> Social Media</a></li>
                                <li><a href="WIShop.php"><i class="fa fa-angle-double-right"></i> Ebay</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Students</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WIUser.php"><i class="fa fa-angle-double-right"></i> Manage User</a></li>
                                <li><a href="permissions.php"><i class="fa fa-angle-double-right"></i> Permissions</a></li>
                                <li><a href="WIRoles.php"><i class="fa fa-angle-double-right"></i> Roles</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Create course</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WINewPage.php"><i class="fa fa-angle-double-right"></i>Pages</a></li>
                                <li><a href="permissions.php"><i class="fa fa-angle-double-right"></i> New</a></li>
                                <li><a href="WIEditpage.php"><i class="fa fa-angle-double-right"></i> Edit</a></li>
                            </ul>
                        </li>

                                                <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Media</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WIMedia.php"><i class="fa fa-angle-double-right"></i>Media Center</a></li>
                            
                                <li><a href="WIImages.php"><i class="fa fa-angle-double-right"></i>Images</a></li>
                                <li><a href="WIVideos.php"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                                <li><a href="WIUploads.php"><i class="fa fa-angle-double-right"></i>Uploads</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Plugins</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> settings</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Plugins</a></li>
                                
                                <li class="treeview"><a href="#"><i class="fa fa-angle-double-right"></i>Customize Creator</a>
                                <ul class="treeview-menu">
                                <li><a href="WIPlugin/WIBuilder/customCreator.php"><i class="fa fa-angle-double-right"></i>Creator</a></li>
                                <li><a href="WIPlugin/WIBuilder/customSettings.php"><i class="fa fa-angle-double-right"></i>Settings</a></li>
                                </ul>

                                </li>
                              
                            </ul>
                        </li>

                           <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Modules</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WIModule_settings.php"><i class="fa fa-angle-double-right"></i> settings</a></li>
                                <li><a href="WIModules.php"><i class="fa fa-angle-double-right"></i> Modules</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Themes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WIStyling.php"><i class="fa fa-angle-double-right"></i> Styling</a></li>
                                <li><a href="WITheme.php"><i class="fa fa-angle-double-right"></i> Themes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="WICalendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="WIMailbox.php">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Shop</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Slideshow</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Recommended</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Shop</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> Delievery info</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> Paypal settings</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Add and modify</a></li>
                            </ul>
                        </li>

                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Cafe</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="WICafe.php"><i class="fa fa-angle-double-right"></i> Cafe</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
