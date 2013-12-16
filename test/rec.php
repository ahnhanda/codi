<?
$str = "data : \n\n";

foreach ( $_GET as $k => $v ) {
	$str .= "$k : $v \n";
}

//echo "A";
//echo "aaaaaaaaaa";

$f = fopen("/www/sites/coditop/test/sock/data","w");
fputs($f, $str);
@fclose($f);

?>