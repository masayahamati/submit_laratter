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
@if($today_add>$deadline)
<div class="encourage_msg">残り一週間を切りました。急いで予定を消化しよう！</div>
@else
<div class="normal_msg">まだ一週間以上あります。今のうちからやっておこう！</div>
@endif

@endsection
