<?php

/**
* 
*/
class WIWebsite extends WIdb
{
    
    function __construct() 
    {
         $this->WIdb = WIdb::getInstance();

    }

    public function index()
    {

    }

    public function displayPage($page)
    {
        $page;

        $query = $this->WIdb->prepare('SELECT * FROM `WI_page` WHERE `page`=:page');
        $query->bindParam(':page', $page, PDO::PARAM_STR);
        $query->execute();

        while ($res = $query->fetch(PDO::FETCH_ASSOC))
        {

        }
    }

    public function Meta($page)
    {

        $page;

        $query = $this->WIdb->prepare('SELECT * FROM `WI_meta` WHERE `page`=:page');
        $query->bindParam(':page', $page, PDO::PARAM_STR);
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo '<meta name="description" content="' . $res['content'] . '">';
        }

    }

    public function Link($page)
    {

        $page;

        $query = $this->WIdb->prepare('SELECT * FROM `WI_links` WHERE `page`=:page');
        $query->bindParam(':page', $page, PDO::PARAM_STR);
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
        echo '<link href="' . $res['theme_dir'],$res['folder'],$res['name'] . '.css" rel="stylesheet">
             <script type="text/javascript" src="' . $res["theme_dir"],$res["folder"],$res['name']. '.js"></script>';
        }
    }

    public function Social()
    {

        $query = $this->WIdb->prepare('SELECT * FROM `WI_Social`');
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
            echo ' <ul class="social_media"> 
                            <li><a href="' . $res['facebook'] .'" data-placement="bottom" data-toggle="tooltip" class="fa fa-facebook" title="Facebook">Facebook</a></li>
                            <li><a href="' . $res['google'] .'" data-placement="bottom" data-toggle="tooltip" class="fa fa-google-plus" title="Google+">Google+</a></li>
                            <li><a href="' . $res['twitter'] .'" data-placement="bottom" data-toggle="tooltip" class="fa fa-twitter" title="Twitter">Twitter</a></li>
                            <li><a href="' . $res['pinterest'] .'" data-placement="bottom" data-toggle="tooltip" class="fa fa-pinterest" title="Pinterest">Pinterest</a></li>
                            <li><a href="' . $res['linkedIn'] .'" data-placement="bottom" data-toggle="tooltip" class="fa fa-linkedin" title="Linkedin">Linkedin</a></li>
                            <li><a href="' . $res['rss'] .'" data-placement="bottom" data-toggle="tooltip" class="fa fa-rss" title="Feedburner">RSS</a></li>
                        </ul><!-- End Social --> ';
        }
    }

    public function header()
    {

        $query = $this->WIdb->prepare('SELECT * FROM `WI_header`');
        $query->execute();


        while($res = $query->fetch(PDO::PARAM_STR))
        {
           echo '<header class="header">
            
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="navbar_brand">
                                <a href="index.php">
                                <img alt=""  class="logo" src="WIMedia/Img/header/' . $res['logo'] .'.PNG"></a>
                                
                            </div>
                        </div>

                       
                         <!-- start of menu -->
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div id="nav">
                                <ul id="mainMenu" class="mainMenu default">
                                    <li class="active"><a href="http://studycorner.co.uk/index.php">' . WILang::get("home") . '</a>
                                    </li>
                                    <li><a href="http://studycorner.co.uk/courses.php">' . WILang::get("courses") . '</a></li>
                                    
                                    <li><a href="http://studycorner.co.uk/WITeachers/index.php">' . WILang::get("teachers") . '</a></li>
                                    <li><a href="http://studycorner.co.uk/WIStudents/index.php">' . WILang::get("student") . '</a></li>
                                    <li><a href="http://studycorner.co.uk/WIParents/index.php">' . WILang::get("parents") . '</a></li>
                                </ul>
                            </div><!-- nav -->   
                    <!-- end of menu -->
                        </div>
                    </div>
                </div>
        </header>'; 
        }
    }


    public function footer()
    {

        $date = date("Y");
        $http = str_replace("www.", "", $_SERVER['HTTP_HOST']);
        $query = $this->WIdb->prepare('SELECT * FROM `WI_footer`');
        $query->execute();

        while($res = $query->fetch(PDO::PARAM_STR))
        {
            echo ' <div class="col-footer">
<div class="footer_main">
  copywrite &copy;2014-' . $date,$http . '&nbsp;&nbsp; | &nbsp;&nbsp; 
    Core: <a href="http://u-adv.co.uk/WI_CMS/" target="_blank">WI CMS</a></div><!-- end of footer_main-->
    <div class="footer_footer">
    <p></p>Core: <a href="http://warner-infinity.com" target="_blank">WI CMS Social Edition</a></div><!-- end fotter footer-->
  </div><!-- end xfooter-->';
        }
    }


    public function menu()
    {

    }

    public function top_head()
    {
        echo '<div class="top_head">
            <div class="container">
                <div class="row">
                <!-- contact area-->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="top_contact">
                            <li class="t_phone">
                                <p>0161 371 5522</p>
                            </li>
                            <li class="t_mail">
                                <p>therivermanchester@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end of contact area-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-sm-jw col-lg-sm2">
                         <div class="flags-wrapper">
             <a href="?lang=en">
                 <img src="WIMedia/Img/lang/en.png" alt="English" title="English"
                      class="' . WILang::getLanguage() != 'en' ? 'fade' : ''.'" />
             </a>
             <a href="?lang=rs">
                 <img src="WIMedia/Img/lang/rs.png" alt="Serbian" title="Serbian"
                      class="' . WILang::getLanguage() != 'rs' ? 'fade' : '' . '" />
             </a>
              <a href="?lang=ru">
                  <img src="WIMedia/Img/lang/ru.png" alt="Russian" title="Russian"
                       class="' . WILang::getLanguage() != 'ru' ? 'fade' : ''.  '" />
              </a>
               <a href="?lang=es">
                  <img src="WIMedia/Img/lang/es.png" alt="Spanish" title="Spanish"
                       class="' . WILang::getLanguage() != 'es' ? 'fade' : ''. '" />
              </a>
         </div>
                    </div><!-- end col-lg-6 col-md-6 col-sm-6-->
                    <!--  search area-->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"></span>
                            </form>
                        </div>

                        <ul class="social_media"> 
                            <li><a href="#" data-placement="bottom" data-toggle="tooltip" class="fa fa-facebook" title="Facebook">Facebook</a></li>
                            <li><a href="#" data-placement="bottom" data-toggle="tooltip" class="fa fa-google-plus" title="Google+">Google+</a></li>
                            <li><a href="#" data-placement="bottom" data-toggle="tooltip" class="fa fa-twitter" title="Twitter">Twitter</a></li>
                            <li><a href="#" data-placement="bottom" data-toggle="tooltip" class="fa fa-pinterest" title="Pinterest">Pinterest</a></li>
                            <li><a href="#" data-placement="bottom" data-toggle="tooltip" class="fa fa-linkedin" title="Linkedin">Linkedin</a></li>
                            <li><a href="#" data-placement="bottom" data-toggle="tooltip" class="fa fa-rss" title="Feedburner">RSS</a></li>
                        </ul><!-- End Social --> 
                    </div>
                </div>
            </div>
        </div>';
    }

}



?>
