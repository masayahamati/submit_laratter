<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todothing;
use DateTime;
use DateInterval;
use App\Http\Requests\TodothingRequest;

class TodothingController extends Controller
{
    function showList(){
        $things=Todothing::all();
        return view("wholeshow",["things"=>$things]);
    }
    function createList(){
        return view("create");
    }
    function Create(TodothingRequest $request){
        Todothing::create($request->all());
        return redirect(route("showlist"));
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
    function Edit(TodothingRequest $request){
        $thing=Todothing::find($request->id);
        $thing->deadline=$request->deadline;
        $thing->title=$request->title;
        $thing->detail=$request->detail;
        $thing->save();
        return redirect(route("showlist"));
    }
     function editList($id){
        $thing=Todothing::find($id);
            return view("edit",["thing"=>$thing]);
    }
}
