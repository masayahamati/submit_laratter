@extends("temp")
@section("content")
<form method="POST" action="{{route('create')}}" onSubmit="return checkSubmit()">
@csrf
 <h1>Todo追加</h1>
   <div class="form-sample">
     <p class="form-label"><span class="form-require">必須</span>締め切り</p>
     <input type="date" id="deadline" name="deadline" class="form-input">
   </div>
   @if($errors->has("deadline"))
     <span class="error_msg">{{$errors->first("deadline")}}</span>
     @endif
   <div class="form-sample">
   <p class="form-label"><span class="form-require">必須</span>タイトル</p>
     <input type="text" id="title" name="title" class="form-input">
   </div>
   @if($errors->has("title"))
     <span class="error_msg">{{$errors->first("title")}}</span>
     @endif
   <div class="form-sample">
     <p class="form-label"><span class="form-require">必須</span>詳細</p>
     <textarea id="detail" name="detail" class="form-input"></textarea>
   </div>
    @if($errors->has("detail"))
     <span class="error_msg">{{$errors->first("detail")}}</span>
     @endif
   <input type="submit"class="form-Btn" value="作成する">
</form>
@endsection