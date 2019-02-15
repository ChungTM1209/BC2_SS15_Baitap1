<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManagerController extends Controller
{
    public function getId(Request $request){
        $id = $request->id;
    }

}
