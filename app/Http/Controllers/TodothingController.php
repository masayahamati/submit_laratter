<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todothing;
use DateTime;
use DateInterval;

class TodothingController extends Controller
{
    function showList(){
        $things=Todothing::all();
        return view("wholeshow",["things"=>$things]);
    }
    function detailList($id){
        $thing=Todothing::find($id);
        $today=new DateTime();
        $today_add=$today->add(new DateInterval("P7D"));
        $deadline=new DateTime($thing->deadline);
        return view("detailshow",
        ["thing"=>$thing,
        "today_add"=>$today_add,
        "deadline"=>$deadline]);
    }
}
