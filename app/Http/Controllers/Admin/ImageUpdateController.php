<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUpdateController extends Controller
{
    //

    public function update(Request $request){

        return response()->json($request->all());

    }
}
