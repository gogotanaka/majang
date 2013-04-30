<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
include('./xml.php');

$per_page = 10;
$user_id = '6124468@N06';
$api_key = '1207f401ef6dfc2519180c16e0b8ce8e';

$xml = file_get_contents("http://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=$api_key&user_id=$user_id&per_page=$per_page");

$data = XML_unserialize($xml);
$photo = $data['rsp']['photos']['photo'];

for ($i = 0; $i < $per_page; $i++) {
$id = $photo[$i . ' attr']['id'];
$server = $photo[$i . ' attr']['server'];
$secret = $photo[$i . ' attr']['secret'];
echo '<a href="http://www.flickr.com/photos/6020193081/' . $id . '/">';
echo '<img src="http://static.flickr.com/';
echo $server . '/' . $id . '_' . $secret . '_s.jpg' . '" /></a>';
}

?>
</body>
</html>