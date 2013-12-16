<?

$host = "master.superboard.com";
$user = "www";
$pwd = "mboardsql";
$db = "master";

$conn = mysql_connect($host, $user, $pwd);
mysql_select_db($db);

$LIST = $iphoto_arr = $iboard_arr = $jboard_arr = $pboard_arr = $mboard_arr = $memo_arr = $idiary_arr = array();

// 배열 초기화
for ( $i=2009; $i<2038; $i++ ) {
	for ( $j=1; $j<=12; $j++ ) {
		
		if ( $i == 2009 ) {
			if ( $j < 9 ) continue;
		}
		
		$pj = ( $j < 10 ) ? "0".$j : $j;
		$iphoto_arr[$i.".".$pj] = 0;
		$iboard_arr[$i.".".$pj] = 0;
		$jboard_arr[$i.".".$pj] = 0;
		$pboard_arr[$i.".".$pj] = 0;
		$mboard_arr[$i.".".$pj] = 0;
		$idiary_arr[$i.".".$pj] = 0;
		$LIST[$i.".".$pj]['iboard'] = $LIST[$i.".".$pj]['idiary'] = $LIST[$i.".".$pj]['jboard'] = $LIST[$i.".".$pj]['iphoto'] = $LIST[$i.".".$pj]['mboard'] = $LIST[$i.".".$pj]['pboard'] = 0;
	}
}



$sql = "select left(edate,7) as edt, count(*) from iphoto where status=0 and edate > curdate() group by edt ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_row($res) ) {
	$edt = $row[0];
	$cnt = $row[1];

	$edt = str_replace("-", ".", $edt);
	$LIST[$edt]['iphoto'] = $cnt;
	$iphoto_arr[$edt] = $cnt;
}


$sql = "select left(f_end_date,7) as edt, count(*) from jboard where f_end_date > curdate() group by edt ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_row($res) ) {
	$edt = $row[0];
	$cnt = $row[1];

	$edt = str_replace("-", ".", $edt);
	$LIST[$edt]['jboard'] = $cnt;
	$jboard_arr[$edt] = $cnt;
}

$sql = "select left(end_date,7) as edt, count(*) from mboard where end_date > curdate() group by edt ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_row($res) ) {
	$edt = $row[0];
	$cnt = $row[1];

	$edt = str_replace("-", ".", $edt);
	$LIST[$edt]['mboard'] = $cnt;
	$mboard_arr[$edt] = $cnt;
}

$sql = "select left(f_end_date,7) as edt, count(*) from pboard where f_end_date > curdate() group by edt ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_row($res) ) {
	$edt = $row[0];
	$cnt = $row[1];

	$edt = str_replace("-", ".", $edt);
	$LIST[$edt]['pboard'] = $cnt;
	$pboard_arr[$edt] = $cnt;
}

$sql = "select left(edate,7) as edt, count(*) from idiary where edate > curdate() group by edt ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_row($res) ) {
	$edt = $row[0];
	$cnt = $row[1];

	$edt = str_replace("-", ".", $edt);
	$LIST[$edt]['idiary'] = $cnt;
	$idiary_arr[$edt] = $cnt;
}

$sql = "select left(edate,7) as edt, count(*) from iboard where status=0 and edate > curdate() group by edt ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_row($res) ) {
	$edt = $row[0];
	$cnt = $row[1];

	$edt = str_replace("-", ".", $edt);
	$LIST[$edt]['iboard'] = $cnt;
	$iboard_arr[$edt] = $cnt;
}

//usort($LIST);

echo "
<table width='100%' border='1' cellspacing='0' cellpadding='0'>
	<tr>
		<td> &nbsp;</td>
		<td align='center'>iphoto</td>
		<td align='center'>jboard</td>
		<td align='center'>pboard</td>
		<td align='center'>mboard</td>
		<td align='center'>idiary</td>
		<td align='center'>iboard</td>
		<td align='center'>금액</td>
	</tr>
";


$data = "";




foreach ( $LIST as $k => $v ) {
	$data .= "<tr><td align='center'>$k</td>";
	foreach ( $v as $kk => $vv ) {
		if ( !$vv || $vv == null ) { 
			$pvv = 0; 
		} else { 
			$pvv = "<b>$vv</b>"; 
		}
		$data .= "<td align='center'>$pvv</td>";
	}
	$data .= "<td align='center'>0</td>";
	$data .= "</tr>";
}


echo $data;

echo "</table>";



?>