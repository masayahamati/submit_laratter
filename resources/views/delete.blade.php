@extends("temp")
@section("content")
<h1>Todo削除</h1>
    <table>
    <tr>
        <th>締め切り</th>
        <th>タイトル</th>
        <th>詳細</th>
    </tr>
    <tr>
        <td>{{$thing->deadline}}</td>
        <td>{{$thing->title}}</td>
        <td>{{$thing->detail}}</td>
    </tr>
    </table>
    こちらを削除してよろしいですか？
<form method="POST" action="/delete">
@csrf
   <input type="hidden" id="id" name="id" value="{{$thing->id}}">
   <input type="submit"class="form-Btn" value="はい">
</form>
@endsection