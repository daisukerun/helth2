<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>現実的な作業可能時間</title>
</head>
<body>
<a href="{{ action('HelthController@index') }}">HOME</a>
<a href="{{ action('HelthController@add') }}">過去データー</a>
  <h1>計算結果</h1>
  @csrf
  <p>現時的な作業時間は、{{$val}}時間です。</p></br>
</body>
</html>
