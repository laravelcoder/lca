<?php
return [
	'env' => 'test',
	'production' => [],
	'test' => [
		'developerToken' => "token",
		'clientCustomerId' => "id",
		'userAgent' => "LARADA SCIENCES",
		'clientId' => "id",
		'clientSecret' => "test",
		'refreshToken' => "Test"
	],
	'oAuth2' => [
		'authorizationUri' => 'https://accounts.google.com/o/oauth2/v2/auth',
		'redirectUri' => 'urn:ietf:wg:oauth:2.0:oob',
		'tokenCredentialUri' => 'https://www.googleapis.com/oauth2/v4/token',
		'scope' => 'https://www.googleapis.com/auth/adwords'
	]
];

