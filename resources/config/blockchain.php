<?php

return [
	/**
	  * Blockchain api provided by blockchain.com
	 */
	'blockchain_api' => env('BLOCKCHAIN_API', ''),
	
	/**
	* This is the default charge fee bitcoin miners at 0.00001
	*/
	'defaultBTCFee' => env('DEFAULT_BTC_FEE', 0.00001),

	/*
    * This is your own transaction fee in btc
    */
	'transactionBTCFee' => env('TRANSACTION_BTC_FEE', ''),
];
