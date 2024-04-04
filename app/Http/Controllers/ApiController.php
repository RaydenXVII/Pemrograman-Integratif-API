<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function memanggilApi(){
        $token = "2|NsWxnbluy0zBTmCh7PUaqXL2pinWWyzvFzlRaJErdec6a13d";
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ])
        ->get('example-apptraining.test/api/getAllUsersToo');

        $jsonData = $response->json();

        return response()->json($jsonData, $response->getStatusCode());
    }
}
