<?
$url = "http://innu.pe.kr/txt/a.php";

$arr_str = file($url);

foreach ( $arr_str as $k => $v ) {
	echo "$v<br>";
}


?>
