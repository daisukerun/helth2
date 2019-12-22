<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>作業時間予想</title>
</head>
<body>
<a href="{{ action('HelthController@index') }}">HOME</a>
<a href="{{ action('HelthController@add') }}">過去データー</a>
  <form role="form" action="helth/keisan" method="POST">
  @csrf
    <ul>
    <li>
    <select name="name">
      <option value="syorui">書類</option>
      <option value="keiri">経理</option>
      <option value="kikaku">企画</option>
    </select> 
  </li><br>
      <li><lavel>作業にかかる全体時間:</br><input type="number" name="zentai"></lavel></li><br>
      <li><lavel>体力100％状態での1日あたり作業可能時間:</br><input type="number" name="tairyokujikann1"></lavel></li><br>
      <li><lavel>現在の体力は100％の内何％？:</br><input type="number" name="tairyokujikann2"></lavel></li><br>
      <input type="submit" value="実際の作業時間を計算する">
     </ul>
  </form>
</body>
</html>