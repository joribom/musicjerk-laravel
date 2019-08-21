<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertKeys;

class CertController extends Controller
{
    public function challengeResponse(CertKeys $certKeys){
        //$cert = CertKeys::find($key);
        return response($certKeys->response);
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

        return redirect("/");
    }
}
