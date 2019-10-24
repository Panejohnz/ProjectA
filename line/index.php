<?php
include 'vendor/autoload.php';
use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;
$config = [
    'callback' => HttpClient\Util::getCurrentUrl(),
    'providers' => [
        'Line' => [ 
            'enabled' => true,
            'keys'    => [ 'id' => '1653356461', 'secret' => 'c4b13a8df780b08fd058eb632d2a5d89' ], 
        ],
    ],
];
try {    
    $hybridauth = new Hybridauth( $config );
    $adapter = $hybridauth->authenticate( 'Line' );
    $tokens = $adapter->getAccessToken();
    $userProfile = $adapter->getUserProfile();
    // print_r( $tokens );
    
    print_r( $userProfile );
    $this->load->view('Login');
    $adapter->disconnect();
}
catch (\Exception $e) {
    echo $e->getMessage();
}