<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>flickr API サンプル</title>
<?php
 
//flickrから写真を検索してimgタグを返す関数
function search_flickr($keyword,$limit){
 
//取得したAPIキーを設定
$api_key  = '1207f401ef6dfc2519180c16e0b8ce8e';
 
//メソッドに写真検索を設定
$method   = 'flickr.photos.search';
 

 
//人気の高い順に検索
$sort = "interestingness-desc";
 
//取得件数を設定
$per_page = $limit;

$user_id = urlencode($user);
 
//URLを生成
$url = 'http://api.flickr.com/services/rest/?'.
'method='.$method.
'&api_key='.$api_key.
'&text='.$text.
'&sort='.$sort.
'&per_page='.$per_page;
 
//取得したXMLファイルをパースし、オブジェクトに代入
$data = simplexml_load_file($url)
or die("XMLパースエラー");
 
//表示写真サイズをmサイズに設定
$size = "_m";
 
//変数初期化
$ret = "";
 
//取得できた写真の数だけループ処理
foreach($data->photos as $photos){
foreach($photos->photo as $photo){
$ret .= '<a href="http://www.flickr.com/photos/'.$photo['owner'].'/'.$photo['id'].'/">';
$ret .= '<img src="http://farm'.$photo['farm'].'.static.flickr.com/'.$photo['server'].'/'.$photo['id'].'_'.$photo['secret'].$size.'.jpg" alt="'.$photo['title'].'">'."\n";
$ret .= '</a>';
}
}
return $ret;
}
 

 
//取得数
$limit = 5;

//ユーザーid
$user= "66124468@N06";
 
//写真を検索して表示
echo search_flickr($keyword,$limit);
 
?>
</head>
<body>
<h1>flickr API サンプル</h1>

<?php
$flickr = new Flickr();
$flickr->setFlickrApikey('1207f401ef6dfc2519180c16e0b8ce8e');
echo $flickr->getFlickrImage('キーワード', 10);
?>
<p>powerd by <a href="http://www.flickr.com/services/api/">Flickr Services</a></p>


</body>
</html>