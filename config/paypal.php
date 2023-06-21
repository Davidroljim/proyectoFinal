<?php 
return [ 
    'client_id' => 'AYd0gYeyYQ_4pD0O8XJIlxoG9r1ldEx7uD4pGvlYuoVc4EOft8aCDJfHSzwN6Pucg1jJC7-gudKK1dsR',
	'secret' => 'EPsTaNIzHsy60fdJNElVYLBcoQxmOoJQ-eZqwkKv6iZ4Uuz5XMS6tGSQrtJOjWnpHCnzmKSUFW6upwxQ',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];