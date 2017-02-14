<?php


class WIUserInfo
{
	private $userId;

	public function __construct()
	{
		$this->WIdb = WIdb::getInstance();
	}
	
    public function getUserInfo($column)
	{

		$userId = WISession::get("user_id");

		$query = $this->WIdb->prepare('SELECT * FROM `WI_Members` WHERE `user_id` =:userId');
		$query->bindParam(':userId', $userId, PDO::PARAM_STR);
		$query->execute();

		$res = $query->fetch(PDO::FETCH_ASSOC);

		return $res[$column];

	}
}

?>