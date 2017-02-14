<?php

/**
* Database Class
* Created by Warner Infinity
* Author Jules Warner
*/
class WISite 
{
	private $WIdb = null;

	public function __construct()
	{
		$this->WIdb = WIdb::getInstance();
		$this->Site_Settings();
		$this->DataBase_settings();
		$this->Session_Settings();
		$this->Login_confirmation();

	}	

	

	public function Site_Settings() 
	{

		if(isset($_POST['submit_WIW'])) 
		{

			$site_name = trim($_POST['website_name']);
			$site_domain = trim($_POST['website_domain']);
			$site_url = trim($_POST['website_url']);
            $user_id = 1;

				

				$query = $this->WIdb->prepare('UPDATE `WI_site` SET  `site_name` =:site_name , `site_domain` =:site_domain,  `site_url` =:site_url WHERE `id` = :user_id');
				$query->bindParam(':site_name', $site_name, PDO::PARAM_STR);
				$query->bindParam(':site_domain', $site_domain, PDO::PARAM_STR);
				$query->bindParam(':site_url', $site_url, PDO::PARAM_STR);
				$query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
				$query->execute();
				
				header('WISite.php');
				
			
		}
	}

	public function DataBase_settings() 
	{


		if(isset($_POST['submit_WID'])) 
		{

			$db_host = trim($_POST['host']);
			$db_user = trim($_POST['db_username']);
			$db_pass = trim($_POST['db_pass']);
			$db_name = trim($_POST['db']);
		   
			
			$user_id = 1;

					$query = $this->WIdb->prepare('UPDATE `WI_site` SET  `db_host` =:db_host , `db_username` =:db_user, `db_pass` =:db_pass ,`db_name` =:db_name  WHERE `id` = :user_id');
					$query->bindParam(':db_host', $db_host, PDO::PARAM_STR);
					$query->bindParam(':db_user', $db_user, PDO::PARAM_STR);
					$query->bindParam(':db_pass', $db_pass, PDO::PARAM_STR);
					$query->bindParam(':db_name', $db_name, PDO::PARAM_STR);
					$query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
					$query->execute();

					header('Location: WISite.php');
					die();
				
			
		}
	}


	public function Session_Settings() 
	{


		if(isset($_POST['submit_WIS'])) 
		{

			$secure_session = trim($_POST['session_secure']);
			$http_only = trim($_POST['http_only']);
			$regenerate_id = trim($_POST['regenerate_id']);
			$use_only_cookie = trim($_POST['use_only_cookie']);

				$user_id = 1;
				

				$query = $this->WIdb->prepare('UPDATE `WI_site` SET  `secure_session` =:secure_session , `http_only` =:http_only,  `regenerate_id` =:regenerate_id, `use_only_cookie` =:use_only_cookie WHERE `id` = :user_id');
				$query->bindParam(':secure_session', $secure_session, PDO::PARAM_STR);
				$query->bindParam(':http_only', $http_only, PDO::PARAM_STR);
				$query->bindParam(':regenerate_id', $regenerate_id, PDO::PARAM_STR);
				$query->bindParam(':use_only_cookie', $use_only_cookie, PDO::PARAM_STR);
				$query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
				$query->execute();
				

				header('WISite.php');
				die();	
			
		}
	}


	public function Login_confirmation() 
	{


		if(isset($_POST['submit_WILC'])) 
		{

			$login_fingerprint = trim($_POST['login_fingerprint']);
			$login_max_login_attempts = trim($_POST['login_max_login_attempts']);
			$redirect_after_login = trim($_POST['redirect_after_login']);
				$user_id = 1;
				

				$query = $this->WIdb->prepare('UPDATE `WI_site` SET  `login_fingerprint` =:login_fingerprint , `max_login_attempts` =:login_max_login_attempts,  `redirect_after_login` =:redirect_after_login,  WHERE `id` = :user_id');
				$query->bindParam(':login_fingerprint', $login_fingerprint, PDO::PARAM_STR);
				$query->bindParam(':login_max_login_attempts', $login_max_login_attempts, PDO::PARAM_INT);
				$query->bindParam(':redirect_after_login', $redirect_after_login, PDO::PARAM_STR);
				$query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
				$query->execute();
				

				header('WISite.php');
				die();	
			
		}
	}



	public function Website_Info($column) 
	{


		$user_id = 1;

		$query = $this->WIdb->prepare('SELECT * FROM `WI_site` WHERE `id` = :user_id');
		$query->bindParam(':user_id', $user_id, PDO::PARAM_STR);
		$query->execute();

		$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	}


		public function Theme_Info($column) 
	{


		$theme_id = 1;

		$query = $this->WIdb->prepare('SELECT * FROM `WI_theme` WHERE `id` = :theme_id');
		$query->bindParam(':theme_id', $theme_id, PDO::PARAM_STR);
		$query->execute();

		$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];
	}


	

}

?>
