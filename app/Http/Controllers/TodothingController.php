<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todothing;
use DateTime;
use DateInterval;
use App\Http\Requests\TodothingRequest;
use Illuminate\Support\Facades\Auth;

class TodothingController extends Controller
{
    function showList(){
        $things=Todothing::getOrderByAndId();
        $today=new DateTime();
        foreach($things as $thing){
        $deadline=new DateTime($thing->deadline);
            if($today>$deadline){
                Todothing::destroy($thing->id);
            }
            else{
                continue;
            }
        }
        return view("wholeshow",["things"=>$things]);
    }
    /*日にちが過ぎると自動で予定が消える処理 */

    function createList(){
        return view("create");
    }
    function Create(TodothingRequest $request){
        /*$request->all()は配列を返すので
        その配列の中にAuth::user()->idを入れてあげればよい*/
        /*Auth::userの中には認証済みuserが入っている */
        $input=$request->all();
        $input["user_id"]=Auth::id();
        /*dd($input);*/
        Todothing::create($input);
        return redirect(route("showlist"));
    }
    function detailList($id){
        $thing=Todothing::find($id);
        $today=new DateTime();
        $today_add=$today->add(new DateInterval("P7D"));
        if($thing===null){
            return redirect("showlist");
        }
        else{
            $deadline=new DateTime($thing->deadline);
            return view("detailshow",
            ["thing"=>$thing,
            "today_add"=>$today_add,
            "deadline"=>$deadline]);
        }
        /*なぜか呼んでないのにdetail関数が呼び出される時が何度かあった。
        なぜかわからなかったがif処理で何とか処理した */
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
     function deleteList($id){
        $thing=Todothing::find($id);
        return view("delete",["thing"=>$thing]);
    }
    function Delete(Request $Request){
        Todothing::destroy($Request->id);
        return redirect(route("showlist"));
    }
}
