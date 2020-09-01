<?php

namespace App\Exceptions;

use Exception;

class TestException extends Exception
{
	public function __construct($message, $code=0)
	{
		parent::__construct("[Test] ". $message, $code);
	}   

	public function __toString()
	{
		//
	}
}