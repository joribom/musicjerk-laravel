<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertKeys;

class CertController extends Controller
{
    public function challengeResponse($key){
       $cert = CertKeys::where('key', $key)->first();
        return response($cert->response);
    }

    public function index(){
        return view("cert.show");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cert = new CertKeys();

        $cert->key = request('key');
        $cert->response = request('response');

        $cert->save();

        return response($request->input("key"));
    }
}
