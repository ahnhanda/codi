<?
header("cache-control: no-cache,must-revalidate");
header("pragma: no-cache");
header("P3P: CP='CAO PSA CONi OTR OUR DEM ONL'");

$Go_URL  = $_SERVER["HTTP_REFERER"] ;

if(strlen($_COOKIE["suniq"]) < 1)
{
	$mtime = explode(" ", microtime());
	$ret = sprintf("%x%x%x", $mtime[0], $mtime[1], mt_rand()%65535);

	setcookie("suniq", $ret);
	$_COOKIE["suniq"] = $ret;
}

/*
if(!eregi("assalabia.com", $Go_URL))
{
	require_once "/assalabia/inc/common.inc.php";

	$mainconn->open();
	$mainconn->query("UPDATE main_referer SET cnt=cnt+1 WHERE category='main' AND url='$Go_URL'");
	if($mainconn->affectedRows() < 1)
	{
		$mainconn->query("INSERT INTO main_referer SET category='main', url='$Go_URL', cnt=1");
	}
	$mainconn->close();
}
*/

$Chk_URL = $_COOKIE["Chk_URL"] ;

if(strlen($Chk_URL) < 1)
{
//	if(!ereg("^http://coditop.superboard.com", $Go_URL))
	if(1)
	{
//			$Go_URL = "main.php" ;
		$Go_URL = $_COOKIE["Go_URL"] ;
		if(strlen($Go_URL) < 3)
			$Go_URL = "/main.php" ;
	}
}
else
{
	setcookie("Go_URL", "", 0, "/");
	setcookie("Chk_URL", "", 0, "/");

	$Go_URL = $Chk_URL ;

//		exit;
}
//echo  __FILE__ . __LINE__ ; exit; 
if(substr($_SERVER["REQUEST_URI"], 2, 2) == "ad")
	$request = $_SERVER["SCRIPT_URL"]."?ad";
else if($_COOKIE["Go_URL"])
	$request = $_COOKIE["Go_URL"];
else
	$request = "/";

if($_COOKIE["chk_ref"])
	$chk_ref = $_COOKIE["chk_ref"];
else
	$chk_ref = $_SERVER["HTTP_REFERER"];

/*
echo "Go_URL : ".$_COOKIE['Go_URL']." <br>";
echo "Chk_URL : ".$_COOKIE['Chk_URL']." <br>";
echo "chk_ref : ".$_COOKIE['chk_ref']." <br>";
echo "suniq : ".$_COOKIE['suniq']." <br>";
*/
?>
<html>

<head>
<title>평가하고 경품받는 CODI TOP10 - 코디탑텐</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">


<!-- 부정클릭 수집 코드 시작 -->
<!--
<script language="javascript" charset="euc-kr" src="http://click.pages.kr/js/click.js"></script>
<script> function pages_click() { click_req('<?=urlencode(base64_encode($_SERVER["HTTP_HOST"]))?>', '<?=urlencode(base64_encode($request))?>', '<?=urlencode(base64_encode($chk_ref))?>', '1f1d3fbd9a10fde38b10600bff026ee6'); } setTimeout('pages_click()',1000); </script>
-->
<!-- 부정클릭 수집 코드 종료 -->
</head>

<frameset rows="0, 1*" border="0">
	<frame scrolling="no" name="top" src="/include/frame_top.php" marginwidth="0" marginheight="0">
	<frame scrolling="auto" name="main" src="<?=$Go_URL?>" marginwidth="0" marginheight="0">
	<noframes>
		<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
		<div id=desc style=position:absolute;top:-1000px;>
		coditop10
		</div>
		<p>이 페이지를 보려면, 프레임을 볼 수 있는 브라우저가 필요합니다.</p>
		</body>
	</noframes>
</frameset>

</html>
