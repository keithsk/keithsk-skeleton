<?php

namespace App\Http;

use Exception;
use Keithsk\Request;
use App\User;


class Main
{

	public function __construct()
	{
		//
	}

	public static function test1(Request $request)
	{
		try {

			// authenticate db users
			/* if(!empty($_GET['accessKey'])) {
				$user = new User();
				$isAllowAccess = $user->verifyDbAccessKey( $_GET['accessKey'] );
				if(!$isAllowAccess){
					throw new Exception("Unauthorized access", 401);
				}
			} else {
				throw new Exception("Unauthorized access", 401);
			} */

			$successResponse = [
				'status' => 'success',
				'info' => 'test1',
			];

			return response()->json($successResponse);
			
		}
		catch(Exception $e) {

			return response()->json([
				'status' => 'error',
				'message' => $e->getMessage()
			], $e->getCode());
			
		}
		
	}

}