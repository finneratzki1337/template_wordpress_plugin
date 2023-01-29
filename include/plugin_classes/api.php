<?php

class MyAPI {
    function __construct(){
        add_action('rest_api_init', [$this, 'register_my_rest_routes']);
    }

    function register_my_rest_routes(){
        register_rest_route('my/v1', 'myplugin/testroute', [
            'methods' => 'GET',
            'callback' => [$this, 'testroute'],
        ]);  
    }

    function testroute($request){
        $response = array(
            "status" => 200,
            "message" => "route online"
        );
        return $response; 
    }
}
?>