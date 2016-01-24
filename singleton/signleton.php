<?php


Class Database {

	public static $instance;

	public static function getInstance()
	{
		// checking the instanciation
		if ( !Database::$instance instanceof Database ) {

				Database::$instance = new Database;
				return Database::$instance;
		}
	}

	private function __construct()
	{

	}

	public function getQuery()
	{

			echo  "SOmething is written";

	}


}


$getClass = Database::getInstance();
$getClass->getQuery();