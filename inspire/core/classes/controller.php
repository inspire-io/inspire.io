<?php

/**
* 
*/

/**
* 
*/
class Controller
{
	/**
	* 
	*/
	private $instance = null;

	/**
	* 
	*/
	public function __construct()
	{
		self::$intance = $this;
	}

	/**
	* 
	*/
	public function __destruct()
	{

	}

	/**
    * 
    */
	public function before()
	{

	}

	/**
    * 
    */
	public function after()
	{

	}

	/**
    * 
    */
	public static function get_instance()
	{
		return self::$instance;
	}
}
