<?php

return [

	// The default gateway to use
	'default' => 'alipay',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		],
		'alipay' => [
			'driver' => 'Alipay_Express',
			'options' => [
				'partner' => '2088611906935334',
				'key' => 'fhppbvls62odh32v6guec5ltfro630la',
				'sellerEmail' =>'dianfawang@idianfa.com',
				'returnUrl' => 'http://dev.newlaravel.com/',
				'notifyUrl' => 'your notifyUrl here'
			]
		]
	]

];