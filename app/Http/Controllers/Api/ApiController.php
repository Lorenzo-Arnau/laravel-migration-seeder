<?php

namespace App\Http\Controllers\Api;
use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function returnFirst(){
        $firstData= Cat::orderBy('id','ASC')->first();
        response()->json($firstData->toArray());
    }
}
