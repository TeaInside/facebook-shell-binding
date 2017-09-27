<?php

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @version 0.0.1
 */

final class Facebook
{
	/**
	 * @var string
	 */
	private $hash;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var string
	 */
	private $cookie;

	/**
	 * @var string
	 */
	private $pass;

	public function __construct($email, $pass)
	{
		$this->hash		= sha1($user.$pass);
		$this->email	= $email;
		$this->pass		= $pass;
		$this->__init__();
	}

	private function __init__()
	{
		defined("data") or die("data not defined yet!\n");
		is_dir(data) or mkdir(data);
		is_dir(data."/cookies") or mkdir(data."/cookies");
		file_exists($this->cookie = data."/cookies/".$this->hash.".txt") or file_put_contents(data."/cookies/".$this->hash.".txt", "");
	}

	private function __exec()
	{

	}


	public function login()
	{

	}

	public function __debugInfo()
	{
		return null;
	}
}








