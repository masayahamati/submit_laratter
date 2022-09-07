@extends("temp")

@section("content")
<h1>Todoリスト</h1>
<table>
    <tr>
        <th>締め切り</th>
        <th>タイトル</th>
        <th>内容</th>
        <th>更新</th>
    </tr>
@foreach($things as $thing)
    <tr>
        <td>{{$thing->deadline}}</td>
        <td>{{$thing->title}}</td>
        <td><a href="/{{$thing->id}}">詳細</td>
        <td><a href="/editlist/{{$thing->id}}">更新</td>
    </tr>
@endforeach
</table>
@endsection



