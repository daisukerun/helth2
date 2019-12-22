<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>過去データ</title>
</head>
<body>
<a href="{{ action('HelthController@index') }}">HOME</a>
<a href="{{ action('HelthController@add') }}">過去データー</a>
  <h1>過去データ</h1>
  <!-- <table>
  <tr><th>name</th></tr>
  <tr><th>zentai</th></tr>
  <tr><th>tairyokujikann1</th></tr>
  <tr><th>tairyokujikann2</th></tr> -->
  @foreach($items as $item)
  <tr>
 <td>{{$item->name}}</td>
 <td>{{$item->zentai}}</td>
 <td>{{$item->tairyokujikann1}}</td>
 <td>{{$item->tairyokujikann2}}</td>  
</tr>
@endforeach
</table>
</body>
</html>