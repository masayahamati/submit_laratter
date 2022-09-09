<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Todothing extends Model
{
    use HasFactory;
    protected $table="todothings";
    protected $fillable=[
        "deadline",
        "title",
        "detail",
        "user_id"
    ];
/*user_idを追加した。こうしないとcreateの時にuser_idの
データを送信できない。 */

    public $timestamps = false;

    public static function getOrderBy()
  {
    return self::orderBy('deadline')->get();
  }
/*順番を入れ替えるだけ */



  public static function getOrderByAndId(){
    $user_id=Auth::id();
    return self::where("user_id",$user_id)->orderBy("deadline")->get();
  }
  /*user_idが一致するかつ順番を入れ替える */
}
