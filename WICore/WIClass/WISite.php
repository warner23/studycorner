<?php

/**
* Site Class
* Created by Warner Infinity
* Author Jules Warner
*/
class WISite 
{
	private $WIdb = null;

	public function __construct()
	{
		$this->WIdb = WIdb::getInstance();

	}	




	public function Website_Info($column) 
	{


		$user_id = 1;

		$result[$column] = $this->WIdb->selectColumn(

		 "SELECT * FROM `WI_site` WHERE `id` = :user_id",
            array(
         "user_id" => $user_id
            ), $column
            );
		return $result[$column];
	}


		public function Theme_Info($column) 
	{


		$theme_id = 1;

		$result[$column] = $this->WIdb->selectColumn(

		 "SELECT * FROM `WI_theme` WHERE `id` = :theme_id",
            array(
         "theme_id" => $theme_id
            ), $column
            );
		echo $result[$column];


	}


	

}

?>
