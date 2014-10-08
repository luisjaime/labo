<?php 

require __DIR__ . '/vendor/autoload.php';

  $config = array( 
    "base_url" => "http://labo.dev/src/hybrid.php",  
     "providers" => array (
        "Facebook" => array ( 
          "enabled" => true,
          "keys"    => array ( "id" => "708344682584368", "secret" => "1cb83959a48318e6d23337cb7913860e" ), 
          "scope"   => "email, user_about_me, user_birthday, user_hometown" // optional
    )));    
    
    $hybridauth = new Hybrid_Auth( $config );
    
    $adapter = $hybridauth->authenticate( "Facebook" );  
    
    $user_profile = $adapter->getUserProfile(); 