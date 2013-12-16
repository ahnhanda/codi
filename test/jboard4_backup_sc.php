<?
$host = "jboard4.superboard.com";
$db = "A20753";
$user = "root";
$pwd = "mboardsql";

$conn = mysql_connect($host, $user, $pwd) or die("fail");
if ( !mysql_select_db($db) ) {
	echo "fail_2";
	exit;
}
/*
$txt = "<table width='100%' border=1>";
$txt .= "	<tr>";
$txt .= "		<td>f_idx</td>";
$txt .= "		<td>f_idxLevel</td>";
$txt .= "		<td>f_name</td>";
$txt .= "		<td>f_subject</td>";
$txt .= "		<td>f_context</td>";
$txt .= "		<td>f_date</td>";
$txt .= "		<td>f_counter</td>";
$txt .= "	</tr>";
*/
//$txt = "=========================================================\n";

$sql = "select A.f_idx, A.f_idxLevel, A.f_name, A.f_subject, A.f_date, A.f_counter, B.f_context, B.f_osBrowserInfo from A011_idx A, A011 B where A.f_index = B.f_index order by f_idx desc, f_idxLevel asc ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_array($res) ) {
	
	$f_idx = $row['f_idx'];
	$f_idxLevel = $row['f_idxLevel'];
	$f_name = $row['f_name'];
	$f_subject = stripslashes($row['f_subject']);
	$f_context = stripslashes($row['f_context']);
	$f_date = date("Y.m.d H:i:s",$row['f_date']);
	$f_counter = $row['f_counter'];

	$txt .= "작성자 : $f_name\n제목 : $f_subject\n작성일 : $f_date\n조회수 : $f_counter\n내용 : \n$f_context\n====================================================================\n\n";
	/*
	$txt .= "
	<tr>
		<td>$f_idx</td>
		<td>$f_idxLevel</td>
		<td>$f_name</td>
		<td>$f_subject</td>
		<td>$f_context</td>
		<td>$f_date</td>
		<td>$f_counter</td>
	</tr>
	";
	*/
}

$fp = fopen("kubs_list.txt", "w");
fwrite($fp, $txt);

echo "success";
?>