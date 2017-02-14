<?php
/**
* Database Class
* Created by Warner Infinity
* Author Jules Warner
*/

class WIPage 
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
        echo '<link href="' . $WI['theme_dir']; $WI['css_site'] ; $res['css'] . '".css" rel="stylesheet">
             <script type="text/javascript" src="<?php echo $WI["theme_dir"] ?><?php echo $WI["js_site"] ?>' . $res['js']. '.js"></script>';
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
           echo '<div class="col-head">
<div class="col-logo"><a href="index.php"><img class="logo" src="WIMedia/Img/header/' . $res['logo'] .'.jpg"></a> </div><!-- end col-logo-->
<div class="col-ms"> <img class="head" src="WIMedia/Img/header/' . $res['header_image'] .'.jpg"></div><!-- end col-ms-->
</div><!-- end col-xl-->'; 
        }
    }


    public function footer()
    {

        $query = $this->WIdb->prepare('SELECT * FROM `WI_footer`');
        $query->execute();

        while($res = $query->fetch(PDO::PARAM_STR))
        {
            echo ' <div class="col-footer">
<div class="footer_main">
  copywrite &copy;2014-<?php echo date("Y"); ?>&nbsp;<?php echo str_replace("www.", "", $_SERVER["HTTP_HOST"]); ?> &nbsp;&nbsp; | &nbsp;&nbsp; 
    Core: <a href="http://u-adv.co.uk/WI_CMS/" target="_blank">WI CMS</a></div><!-- end of footer_main-->
    <div class="footer_footer">
    <p></p>Core: <a href="http://warner-infinity.com" target="_blank">WI CMS Social Edition</a></div><!-- end fotter footer-->
  </div><!-- end xfooter-->';
        }
    }


    public function menu()
    {

    }

}



?>
