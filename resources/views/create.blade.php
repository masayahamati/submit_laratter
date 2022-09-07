@extends("temp")
@section("content")
<form method="POST" action="{{route('create')}}">
@csrf
 <h1>Todo追加</h1>
   <div class="form-sample">
     <p class="form-label"><span class="form-require">必須</span>締め切り</p>
     <input type="date" id="deadline" class="form-input">
   </div>
   <div class="form-sample">
   <p class="form-label"><span class="form-require">必須</span>タイトル</p>
     <input type="text" id="title" class="form-input">
   </div>
   <div class="form-sample">
     <p class="form-label"><span class="form-require">必須</span>詳細</p>
     <textarea id="detail" class="form-input"></textarea>
   </div>
   <input type="submit"class="form-Btn" value="送信する">
</form>
@if($errors->any())
<div>
    @foreach($errors->all() as $error)
    <span>{{$error}}</span>
    @endforeach
</div>
@endif
@endsection