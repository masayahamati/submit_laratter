<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todothing;

class TodothingController extends Controller
{
    function showList(){
        $things=Todothing::all();
        return view("wholeshow",["things"=>$things]);
    }
    function detailList($id){
        $thing=Todothing::find($id);
        return view("detailshow",["thing"=>$thing]);
    }
}
