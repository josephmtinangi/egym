<?php

namespace App\Utilities;

use Vinkla\Hashids\Facades\Hashids;

class Helper
{
	public static function createResponse($code, $success, $data, $message)
	{
		return response()->json([
			'code' => $code,
			'success' => $success,
		    'data' => $data,
		    'message' => $message,
		], $code);		
	}

	public static function decode($hashid)
	{
		$decodedArray = Hashids::decode($hashid);
		return count($decodedArray) == 1 ? $decodedArray[0] : 0;
	}
}