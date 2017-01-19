<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * [testLogin Unit testing success for login end point]
     */
    public function testApiCall(){
        return $this->json('POST', "api/test/",[
                "amount" => 50000,
                "payment_info" => "test111",
                "order_id" => "ord1d112",
                "mrc_id" => "MCP20170101",
                "customer_info"=>"Greg",
                "signature" => "dfe12e553a60a56a1662b6ff7a71ab9c65cb05c2e7f67c1ae823cba879d3147e"
            ])->seeJson([
                "status_message" => "Success create transaction",
                "status_code" => 200,
                "process_id" => "",
                "transaction_id" => "82a66e60-4bee-44eb-ae36-db3a4a61bb59",
                "order_id" => "ord1d112",
                "amount" => 50000,
                "payment_code" => "5491164033386312",
                "transaction_time" => "2017-01-16T16:54:30.997+07:00",
                "expired_time" => "2017-01-16T17:24:31.117+07:00"
            ]);
    }
}
