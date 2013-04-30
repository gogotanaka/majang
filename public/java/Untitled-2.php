<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>input.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
入力フォームです。
名前を入力してみましょう。
<form action="output.php" method="post">
  <table border="1">
    <tr>
      <td>名前</td>
      <td><input type="text" name="name"></td>
      <td colspan="2" align="center">
        <input type="submit" value="入力">
      </td>
    </tr>
  </table>
</form>
</body>
</html>