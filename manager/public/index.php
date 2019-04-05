<?php

chdir(dirname(__DIR__));
require "vendor/autoload.php";

use Slim\Http\Request;
use Slim\Http\Response;

http_response_code(500);


(function(){
    
    $app = new \Slim\App([
        'settings'=>[
            'addContentHeaderLength'=>false,
            'displayErrorDetails'=>(bool)getenv("APP_DEBUG")
        ]
    ]);
    
    
    $app->get("/",function(Request $request,Response $response){

        return $response->withJson(['name'=>'Manager1','param'=>$request->getQueryParam("param")]);
    });

    $app->run();  
})()

?>

