<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function getData(){
        $client = new Client(
            [
                'base_uri' => config('services.passport.login_endpoint'),
                'verify' => config('app.debug') ? false : true,
                'defaults' => [
                    'exceptions' => false,
                ]
            ]
        );
        $response = $client->get('https://http.cat/401');

        return  $response; 
    }
}

?>