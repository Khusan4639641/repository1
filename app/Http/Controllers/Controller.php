<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Api;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function testApi(){
        return response()->json(Api::get(),200);
    }
    public function testApiId($id){
        return response()->json(Api::find($id),200);
    }
    public function testApiSave(Request $req){
        $api = Api::create($req->all());
        return response()->json($api,201);
    }
    public function index(){
        echo "Testing";
    }
}
