@extends("temp")

@section("content")
<h1>Todoリスト</h1>
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
@endsection
