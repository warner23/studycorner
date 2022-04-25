<?php 
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly !, your IP has been logged for attempting to hack our game');

/***
*
*   WARNER-INFINTY CMS SOCIAL
*   DEVELOPED BY WARNER-INFINITY FOR USE ONLY WITH WARNER-INFINITY PRODUCTS AND SERVICES
*   @author : Jules Warner
*             Bart Reijmer
*             Cass Carr
*/

/* database config  */


/* database config  */
$DB_HOST    = 'mysql1003.mochahost.com' ;
$DB_USER    = 'warner_Master' ;
$DB_PASS    = 'taylor22' ;
$DB_NAME    = 'warner_WICMS' ;

define("HOST", "**********"); 

define("TYPE", "mysql"); 

define("USER", "*******"); 

define("PASS", "********"); 

define("NAME", "***********"); 

/* SITE INFO   */
/* site info  */
$WI['site_url'] 		  = 'http://wliterature.com/Trintiy/';
$WI['email_system_from']  = 'admin@xymore.u-adv.co.uk';
$WI['email_method']       = 'smtp';
$WI['theme']              = $site->Theme_Info('theme');
$WI['theme_dir']           = $WI['site_url'] . 'WITheme/River/';
$WI['site_name']          = $site->Website_Info('site_name');
$WI['admin_email']        = 'jw4241@googlemail.com';
$WI['site_domain']        = $site->Website_Info('site_domain');


/*  session info  */
$WI['secure_sessions']    = $site->website_Info('secure_session');
$WI['http_only']    = $site->website_Info('http_only');
$WI['regenerate_id']    = $site->website_Info('regenerate_id');
$WI['use_only_cookie']    = $site->website_Info('use_only_cookie');

/* menu */
$WI['forum']              = 'WIForum/';
$WI['game']               = 'WIGame/';
$WI['shop']               = 'WIShop/';
$WI['admin']              = 'WIAdmin/';
$WI['user']               = 'WIUser/';
$WI['members']            = 'WIMembers/';


/* directories */
$WI['plugin']             = 'WIPlugin/';
$WI['install']            = 'WIInstallation/';
$WI['lang']               = 'WILang/';
$WI['media']              = 'WIMedia/';
/* css*/
$WI['css_site']           = 'site/css/';
$WI['css_forum']          = 'forum/css/';
$WI['css_user']           = 'user/css/';
$WI['css_game']           = 'game/css/';
$WI['css_admin']          = 'admin/css/';
$WI['css_shop']           = 'shop/css/';  

/*js*/
$WI['js_site']           = 'site/js/';
$WI['js_forum']          = 'forum/js/';
$WI['js_user']           = 'user/js/';
$WI['js_game']           = 'game/js/';
$WI['js_admin']          = 'admin/js/';
$WI['js_shop']           = 'shop/js/'; 
/* fonts */
$WI['fonts_site']           = 'site/fonts/';
$WI['fonts_forum']          = 'forum/fonts/';
$WI['fonts_user']           = 'user/fonts/';
$WI['fonts_game']           = 'game/fonts/';
$WI['fonts_admin']          = 'admin/fonts/';
$WI['fonts_shop']           = 'shop/fonts/'; 

/* fonts awesome*/
$WI['fontsa_site']           = 'site/font-awesome/';
$WI['fontsa_forum']          = 'forum/font-awesome/';
$WI['fontsa_user']           = 'user/font-awesome/';
$WI['fontsa_game']           = 'game/font-awesome/';
$WI['fontsa_admin']          = 'admin/font-awesome/';
$WI['fontsa_shop']           = 'shop/font-awesome/'; 

/* less */
$WI['less_site']           = 'site/less/';
$WI['less_forum']          = 'forum/less/';
$WI['less_user']           = 'user/less/';
$WI['less_game']           = 'game/less/';
$WI['less_admin']          = 'admin/less/';
$WI['less_shop']           = 'shop/less/'; 
/* img  */
$WI['img_site']           = 'site/img/';
$WI['img_forum']          = 'forum/img/';
$WI['img_user']           = 'user/img/';
$WI['img_game']           = 'game/img/';
$WI['img_admin']          = 'admin/img/';
$WI['img_shop']           = 'shop/img/';  
?>