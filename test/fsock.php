<?
$body = $query = "";
$fp = @fsockopen("innu.pe.kr", 80, $errno, $errstr, 10);
if(!empty($fp)) {

	$body .= "a=aaa&b=bbb&c=ccc";
	$len = strlen($body);
	
	$query = "GET /txt/rec.php?$body HTTP/1.0\r\n";
	$query .= "Host: innu.pe.kr\r\n";
	$query .= "User-agent: PHP/HTTP_CLASS\r\n";
	$query .= "Content-type: application/x-www-form-urlencoded\r\n";
	$query .= "Content-length: $len\r\n";
	//$query .= "Connection: Close\r\n\r\n";
	//$query .= $body."\r\n";

	fputs($fp, $query);

}
/*
$res = "";
while ( !feof($fp) ) {
	$res .= fgets($fp, 1024);
}

echo $res;
*/

fclose($fp);
?>