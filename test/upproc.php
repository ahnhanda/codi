<?
echo "======= POST ======<br>";
foreach ( $_POST as $k => $v ) {
	echo "$k:$v <br>";
}

echo "======= FILES ======<br>";
foreach ( $_FILES as $kk => $vv ) {
	echo "$kk:$vv <br>";
}

?>