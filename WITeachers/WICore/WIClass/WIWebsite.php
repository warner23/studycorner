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
           echo ' <header class="header">
            
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
            echo '<!--Start Footer-->
    <footer class="footer">
      <div class="container">
        <div class="row">
    
        </div>
      </div>
    </footer>
    <!--End Footer-->
    
    <section class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="copyright">Copyright &copy; 2013 ' .$WI['site_name'] . '-  All rights reserved.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer_social">
              <ul class="footbot_social">
                <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  </section>';
        }
    }


    public function menu()
    {

    }

    public function top_head()
    {
        echo '      <div class="top_head">
            <div class="container">
                <div class="row">
                <!-- contact area-->
                    

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-sm-jw col-lg-sm2">
                         <div class="flags-wrapper">
             <a href="?lang=en">
                 <img src="WIMedia/Img/lang/en.png" alt="English" title="English"
                      class="' . WILang::getLanguage() != "en" ? "fade" : "" . '" />
             </a>
             <a href="?lang=rs">
                 <img src="WIMedia/Img/lang/rs.png" alt="Serbian" title="Serbian"
                      class="' . WILang::getLanguage() != "rs" ? "fade" : "" . '" />
             </a>
              <a href="?lang=ru">
                  <img src="WIMedia/Img/lang/ru.png" alt="Russian" title="Russian"
                       class="' . WILang::getLanguage() != "ru" ? "fade" : "" . '" />
              </a>
               <a href="?lang=es">
                  <img src="WIMedia/Img/lang/es.png" alt="Spanish" title="Spanish"
                       class="' . WILang::getLanguage() != "es" ? "fade" : "" . '" />
              </a>
               <a href="?lang=es">
                  <img src="WIMedia/Img/lang/fr.png" alt="French" title="french"
                       class="' . WILang::getLanguage() != "fr" ? "fade" : "" . '" />
              </a>
              <a href="?lang=es">
                  <img src="WIMedia/Img/lang/cn.png" alt="Chinese" title="chinese"
                       class="' . WILang::getLanguage() != "cn" ? "fade" : "" . '" />
              </a>
              <a href="?lang=es">
                  <img src="WIMedia/Img/lang/be.png" alt="Belgium" title="belgium"
                       class="' . WILang::getLanguage() != "be" ? "fade" : "" . '" />
              </a>
         </div>
                    </div><!-- end col-lg-6 col-md-6 col-sm-6-->
                    <!--  search area-->
                
                </div>
            </div>
        </div>';
    }

}



?>
