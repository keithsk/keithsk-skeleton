<?php

namespace App;

use Exception;

use Websoft\Database;

class User
{
    protected $db;
	protected $userId;
	protected $userName;
	protected $userType;


	public function __construct()
	{
		$this->db = new Database();
	}

	public function verifyDbAccessKey($accessKey = null)
	{
		$sql = "SELECT * FROM users WHERE access_key = :access_key LIMIT 1";
		$this->db->query($sql);
		$this->db->bind(':access_key', $accessKey);
		$this->db->execute();
		
		if($this->db->rowCount() > 0) {
			$user = $this->db->singleArray();
			$this->userId = $user['id'];
			$this->userName = $user['name'];
			$this->userType = $user['type'];
			return true;
		}
		return false;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function getUserType()
	{
		return $this->userType;
	}

}