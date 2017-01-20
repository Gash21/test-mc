<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{	
	public function __construct(){
		$this->secret = "bwMo0k9XPW";
	}

 	public function createVirtualAccount(Request $request){
 		$amount = $request->amount;
		$payment_info = $request->payment_info;
		$order_id = $request->order_id;
		$merchant_id = $request->mrc_id;
		$customer_info = $request->customer_info;
 		$signature = $request->signature;
 		$checkSign = hash('sha256', $this->secret . $merchant_id . $amount . $customer_info . $payment_info . $order_id);

 		if($checkSign == $signature){
	 		return response()->json([
	 			"status_message" => "Success create transaction",
	 			"status_code" => 200,
	 			"process_id" => "",
				"transaction_id" => "82a66e60-4bee-44eb-ae36-db3a4a61bb59",
				"order_id" => $order_id,
				"amount" => $amount,
				"payment_code" => "5491164033386312",
				"transaction_time" => "2017-01-16T16:54:30.997+07:00",
				"expired_time" => "2017-01-16T17:24:31.117+07:00"
	 			], 200);
	 	} else {
			return response()->json([
	 			"status_message" => "Failed",
	 			"status_code" => 400
	 			], 400);
	 	}

		
 	}  
}
