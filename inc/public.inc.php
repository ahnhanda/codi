<?
/*收[ Щ煎斜極  薑爾 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 Щ煎斜極 : public (奢鱔л熱) Ver 1.00                                    早
早 濛 撩 濠 : 檜惜繹 (評衝檜)                                               早
早 �倣狨抶� : public.inc.php                                                早
早 撲    貲 : 陛濰 晦獄瞳檣 л熱煎 棻曄и 夠縑憮 �倏踿炱� 嬪�� 薯濛         早
早 餌辨樹橫 : PHP                                                           早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旭

旨收[ 滲唳檜溘 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 濛機濠 濛  機  橾 滲唳頂辨                                               早
早 ------ ---------- ------------------------------------------------------ 早
早 檜惜繹 2007.02.09 譆蟾濛撩                                               早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/



// 1970喇睡攪 螃棺縑 п渡ж朝 蟾煎 �粉窱� 高
$TodaySec = time(0)-(date(G)*3600)-(date(i)*60)-(date(s));

$SelfUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$SelfUri = "$_SERVER[REQUEST_URI]";

$self     = $_SERVER["SCRIPT_NAME"];
$Self     = $_SERVER["SCRIPT_NAME"];
$RemoteIP = $_SERVER["REMOTE_ADDR"];
$Month    = date("Y-m");
$Date     = date("Y-m-d");            // 螃棺 陳瞼 (蕨: 2007-01-02)
$Time     = time(0);                  // 1970喇睡攪 ⑷營梱雖 蟾煎 �粉窱� 高 (UNIX_TIMESTAMP)

$TodayTime = strtotime($Date);

$ServerName = $_SERVER["HTTP_HOST"] ;

// 煎斜檣ц擊陽 襬詭景 薑爾 html擊 掘и棻.
// 唳ヶ �挫恉炾� 寰ж堅 離檜朝 gt_reg_dt 高婁 status_reg_dt 陛 偽替傍 斜溢雖 彊替傍縑 評塭 殖塭雖陵.
// gt_reg_dt 諦 status_reg_dt 高檜 偽戲賊 嬴霜 �挫� 寰и匙檜棻.
function make_quick_html( $id, $kind ) {
	global $_SESSION;

	// 嫡擎薹雖 偎熱(爾婦л んл)
	$msg_cnt = $_SESSION['my_quick_msg_total'];

	// 檗雖彊擎 薹雖 偎熱
	$noread_msg_cnt = $_SESSION['my_quick_msg_noread'];

	$memo_icon = ( $noread_msg_cnt ) ? "icon_memo_ov.gif" : "icon_memo.gif";

	$chk_gift_cnt = $_SESSION['my_not_notify_gift_cnt'];	// �挫恉狫� 彊擎 唳ヶ熱(憧,橾奩�蛾� 棻 噙檜雖虜 蘭葬朝 棻腦棻)

	if ( $kind == "U" ) {
		
		// �挫徆�и 渡繩 頂羲檜 氈擊陽
		if ( $chk_gift_cnt ) {
			$str = "
			<table width='110' border='0' cellpadding='0' cellspacing='0'>
				<tr>
					<td height='39'><img src='/images/myquick_01.gif' width='110' height='39' alt=''></td>
				</tr>
				<tr>
					<td  align='left' valign='top'>
					<table width='110' border='0' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='19' align='center' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><font color='#FFFFFF'>蹴ж萄董棲棻.</font></td>
								</tr>

							</table>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='120' align='center' class='textlevel'><a href='/mypage/history.php'><img src='/img_seri/quick_ol.gif' width='100' height='199' border='0'></a></td>
								</tr>
								<tr>
									<td height='5'></td>
								</tr>
							</table>
							<table width='104' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td  align='center' class='evgray'>囀蛤鼻ヶゎ陛煎 渡繩脹 唳ヶ頂羲檜 氈蝗棲棻.</td>
								</tr>
								<tr>
									<td height='27' align='center' class='evgray'><a href='/mypage/history.php'><b><font color='#FF6600'>唳ヶ渡繩頂羲�挫� ></font></b></a></td>
								</tr>
							</table>
							</td>
							<td width='6' bgcolor='FF5B5C'></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height='16'><a href='#'><img src='/images/myquick_03.gif' alt='裔嬪煎' width='110' height='16' border='0'></a></td>
				</tr>
			</table>
			";

		} else {	// 渡繩 �挫帠遛社� 橈擊陽

			// 頂陛 ゎ陛и 囀蛤 偎熱
			$codi_cnt = $_SESSION['my_updown_codi_cnt'];

			// 頂陛 熱滄и 唳ヶ 偎熱
			$gift_cnt = $_SESSION['my_get_gift_cnt'];

			// 7橾除 渡繩 蛔晝
			$my_grade = $_SESSION['mem_grade'];

			// 渡繩�捕�
			$my_percent = $_SESSION['mem_percent'];

			$str = "
			<table width='110' border='0' cellpadding='0' cellspacing='0'>
				<tr>
					<td height='39'><img src='/images/myquick_01.gif' width='110' height='39' alt=''></td>
				</tr>
				<tr>
					<td  align='left' valign='top'>
					<table width='110' border='0' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='19' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><a href='/msg/msg_recv_list.php'><font color='#FFFFFF'>薹雖:<font color='#FFFF00'><b><span id='my_quick_msg_noread_area'>{$noread_msg_cnt}</span></b></font>/<span id='my_quick_msg_total_area'>{$msg_cnt}</span></font> <img id='quick_msg_icon' src='/img/{$memo_icon}' width='12' height='14' align='absmiddle' border='0' /></a></td>
								</tr>
								<tr>
									<td height='3'></td>
								</tr>
								<tr>
									<td height='19' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><a href='/mypage/comment.php'><font color='#FFFFFF'>霤罹醞ゎ陛:<span id='my_updown_codi_cnt_area'>{$codi_cnt}</span></a>偃</font></a> </td>
								</tr>
								<tr>
									<td height='3'></td>
								</tr>
								<tr>
									<td height='19' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><a href='/mypage/history.php'><font color='#FFFFFF'>唳ヶ熱滄:<span id='my_get_gift_cnt_area'>{$gift_cnt}</span>偃 </font></a> </td>
								</tr>
							</table>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='22' align='center' valign='top' class='evgray'><b><font color='#000000'>7橾除 頂渡繩 蛔晝</font></b></td>
								</tr>
								<tr>
									<td><img src='/img/quick_level.gif' width='100' height='50'></td>
								</tr>
								<tr>
									<td height='33' align='center' class='textlevel'><b><span style='filter:dropshadow(color=black,offy=1,offx=1);width:100px;height:33px'><span id='my_quick_grade_area'>{$my_grade}</span>蛔晝</span></b></td>
								</tr>
								<tr>
									<td height='5'></td>
								</tr>
							</table>
							<table width='104' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='21' align='center' valign='top' bgcolor='f2f2f2' class='evgray'>渡繩�捕� <span id='my_quick_percent_area'>{$my_percent}</span>% 隸陛 </td>
								</tr>
								<tr>
									<td height='25' align='center' class='evgray'><b><font color='#FF6600'><a href='/mypage/level.php'>渡繩蛔晝�挫帠遛�</a></font></b></td>
								</tr>
								<tr>
									<td height='1' align='center' background='/img/dot_garo_max.gif' class='evgray'></td>
								</tr>
							</table>
							
							</td>
							<td width='6' bgcolor='FF5B5C'></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height='16'><a href='#'><img src='/images/myquick_03.gif' alt='裔嬪煎' width='110' height='16' border='0'></a></td>
				</tr>
			</table>
			";
		}


	} else if ( $kind == "S" ) {	// 憧 �蛾�

		// �挫徆�и 渡繩 頂羲檜 氈擊陽
		if ( $chk_gift_cnt ) {
			$str = "
			<table width='110' border='0' cellpadding='0' cellspacing='0'>
				<tr>
					<td height='39'><img src='/images/myquick_01.gif' width='110' height='39' alt=''></td>
				</tr>
				<tr>
					<td  align='left' valign='top'>
					<table width='110' border='0' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='19' align='center' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'><font color='#FFFFFF'>囀蛤鼻ヶ 唳ヶ雖晝</font></td>
								</tr>
							</table>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='170' align='center' class='textlevel'><a href='/mypage/Mgift.php'><img src='/img_seri/quick_eend.gif' width='100' border='0' /></a></td>
								</tr>
								<tr>
									<td height='5'></td>
								</tr>
							</table>
							<table width='104' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td  align='center' class='evgray'>ゎ陛 諫猿脹 鼻ヶ醞縑 唳ヶ雖晝褻勒擊 <br>虜褶衛麵憮, 雖晝п撿 й 唳ヶ檜 氈蝗棲棻.</td>
								</tr>
								<tr>
									<td height='27' align='center' class='evgray'><a href='/mypage/Mgift.php'><b><font color='#FF6600'>唳ヶ雖晝頂羲�挫� ></font></b></a></td>
								</tr>
							</table>
							</td>
							<td width='6' bgcolor='FF5B5C'></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height='16'><a href='#'><img src='/images/myquick_03.gif' alt='裔嬪煎' width='110' height='16' border='0'></a></td>
				</tr>
			</table>
			";

		} else {	// 渡繩 頂羲檜 橈擊陽
			
			$ing_codi_cnt = $_SESSION['my_ing_codi_cnt'];	// ゎ陛醞檣 囀蛤熱
			$ed_codi_cnt = $_SESSION['my_ed_codi_cnt'];		// ゎ陛諫猿脹 囀蛤熱

			$last_rank = $_SESSION['main_shop_last_rank'];		// 雖陪輿 牖嬪
			$total_rank = $_SESSION['main_shop_total_rank'];	// 瞪羹 牖嬪

			$my_cash = $_SESSION['mem_cash'];				// ⑷營議衛

			$str = "
			<table width='110' border='0' cellpadding='0' cellspacing='0'>
				<tr>
					<td height='39'><img src='/images/myquick_01.gif' width='110' height='39' alt=''></td>
				</tr>
				<tr>
					<td  align='left' valign='top'>
					<table width='110' border='0' cellspacing='0' cellpadding='0'>
						<tr>
							<td>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='19' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><a href='/msg/msg_recv_list.php'><font color='#FFFFFF'>薹雖:<font color='#FFFF00'><b><span id='my_quick_msg_noread_area'>{$noread_msg_cnt}</span></b></font>/<span id='my_quick_msg_total_area'>{$msg_cnt}</span></font> <img id='quick_msg_icon' src='/img/{$memo_icon}' width='12' height='14' align='absmiddle' border='0' /></a></td>
								</tr>
								<tr>
									<td height='3'></td>
								</tr>
								<tr>
									<td height='19' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><a href='/mypage/Mcodi.php'><font color='#FFFFFF'>ゎ陛醞囀蛤:<span id='my_ing_codi_cnt_area'>{$ing_codi_cnt}</span>偃</font></a> </td>
								</tr>
								<tr>
									<td height='3'></td>
								</tr>
								<tr>
									<td height='19' bgcolor='FF5C5C' class='tienom'  style='PADDING-LEFT: 6px'  ><a href='/mypage/Mcodi.php'><font color='#FFFFFF'>諫猿囀蛤:<span id='my_ed_codi_cnt_area'>{$ed_codi_cnt}</span>偃 </font></a> </td>
								</tr>
							</table>
							<table width='100' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='22' align='center' valign='top' class='evgray'><b><font color='#000000'>雖陪輿 囀蛤憧 牖嬪</font></b></td>
								</tr>
								<tr>
									<td><img src='/img/quick_level.gif' width='100' height='50'></td>
								</tr>
								<tr>
									<td height='33' align='center' class='textlevel'><b><span style='filter:dropshadow(color=black,offy=1,offx=1);width:100px;height:33px'> 			<span id='main_shop_last_rank_area'>{$last_rank}</span>嬪</span></b></td>
								</tr>
								<tr>
									<td height='5'></td>
								</tr>
							</table>
							<table width='104' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td height='21' align='center' valign='top' bgcolor='f2f2f2' class='evgray'>瞪羹 牖嬪 <b><span id='main_shop_total_rank_area'>{$total_rank}</span></b> 嬪 </td>
								</tr>
								<tr>
									<td height='21' align='center' class='evgray'><b><font color='#FF6600'>議蓮 <span id='my_quick_cash_area'>".number_format($my_cash)."</span></font></b> | <b><a href='/mypage/Mcash.php'>醱瞪</a></b></td>
								</tr>
								<tr>
									<td height='1' align='center' background='/img/dot_garo_max.gif' class='evgray'></td>
								</tr>
							</table>
							<table width='100' height='65' border='0' cellpadding='0' cellspacing='0'>
								<tr>
									<td><a href='/mypage/product_in01.php'><img src='/img_seri/btn_codi_in.gif' border=0></a></td>
								</tr>
							</table>
							</td>
							<td width='6' bgcolor='FF5B5C'></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height='16'><a href='#'><img src='/images/myquick_03.gif' alt='裔嬪煎' width='110' height='16' border='0'></a></td>
				</tr>
			</table>
			";
		}

	}
	
	return $str;
}


function randNum($nums)
{
	$persent = 0;
	$total   = 0;
	$ran     = 0;
	$num     = 0;

	for($i=0; $i<count($nums)/2; $i++)
		$total +=  $nums[$i*2+1];

	$ran = rand(1, $total);

	for($i=0; $i<count($nums)/2; $i++)
	{
		$persent += $nums[$i*2+1];
		if($ran <= $persent)
		{
			$num = $nums[$i*2];
			break;
		}
	}
		
	return $num;
}


function DAY2SEC($day)
{
	return $day*86400;
}

function HOUR2SEC($hour)
{
	return $hour*3600;
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function MIN2SEC()                                            早
早 撲    貲 : 衛除擊 碟戲煎 �粉�                                            早
早 殮 溘 高 : $hour = 碟戲煎 �粉糒� 衛                                      早
早 葬 欐 高 : 酈高                                                          早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function MIN2SEC($hour)
{
	return $hour*60;
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function make_seed()                                          早
早 撲    貲 : 楠渾酈 儅撩                                                   早
早 葬 欐 高 : 酈高                                                          早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function make_seed()
{
	list($usec, $sec) = explode(' ', microtime());
	return (float) $sec + ((float) $usec * 100000);
}

// 楠渾高檜 о鼻 棻腦啪 釭螢熱 氈紫煙 蟾晦��
srand(make_seed());
mt_srand(make_seed());



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function NoCache()                                            早
早 撲    貲 : 粽塭辦螳 議衛陛 瞳辨腎雖 彊紫煙 撲薑                          早
早            餌辨衛 html爾棻 試盪 餌辨п撿脾                               早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function NoCache()
{
	header("cache-control: no-cache,must-revalidate"); 
	header("pragma: no-cache");
	header("P3P: CP='CAO PSA CONi OTR OUR DEM ONL'");
}


function CloseMsg($msg)
{
	echo "<script language=javascript>\n";
	echo "<!--\n";
	echo "window.resizeTo(1, 1);\n";
	echo "window.moveTo(2000, 2000);\n";
	echo "alert(\"$msg\");\n";
	echo "\nwindow.close();\n-->\n</script>";
	exit(0);
}


function ParentCloseMsg($msg, $preload=null)
{
	echo "<script language=javascript>\n";
	echo "<!--\n";
	if($preload != null)
		echo "parent.window.opener.location.reload()\n";

	echo "window.resizeTo(1, 1);\n";
	echo "parent.moveTo(2000, 2000);\n";
	echo "alert(\"$msg\");\n";
	echo "\nparent.close();\n-->\n</script>";
	exit(0);
}

function BackMsg($msg)
{
	echo "<script language=javascript>\n";
	echo "<!--\n";
	echo "alert(\"$msg\");\n";
	echo "\nhistory.back();\n-->\n</script>";
	exit(0);
}


function LocationURL($url)
{
	echo "<script language=javascript>\n";
	echo "<!--\n";
	echo "location.href='$url'\n";
	echo "\n-->\n</script>";
	exit(0);
}




function LocationReplace($url)
{
	echo "<script language=javascript>\n";
	echo "<!--\n";
	echo "location.replace('$url')\n";
	echo "\n-->\n</script>";
	exit(0);
}




function ExitMsg($msg)
{
	echo "<script language=javascript>\n";
	echo "<!--\n";
	echo "alert(\"$msg\");\n";
	echo "\n-->\n</script>";
	exit(0);
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function QueryHTTP()                                          早
早 撲    貲 : 模鰍擊 檜辨ж罹 URL縑 п渡ж朝 等檜顫 陛螳螃晦 (頂睡鱔褐辨)   早
早 殮 溘 高 : $url    = 蕾樓й む檜雖 (http://test.com:8000/index.html)     早
早            $header = ④渦 餌辨й雖 罹睡                                  早
早 葬 欐 高 : 等檜顫                                                        早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function QueryHTTP($url, $header=false)
{
	$url_stuff = parse_url($url); 

	if(strlen($url_stuff["port"]) < 2)
	{
		$url_stuff["port"] = 80;
	}

	if (!($fp = fsockopen($url_stuff["host"], $url_stuff["port"], $errorno, $errstr, 15)))
	{
		return "";
	}

	fputs($fp, "GET $url_stuff[path]?$url_stuff[query] HTTP/1.0\r\n"); 
	fputs($fp, "Host: $url_stuff[host]\r\n"); 
	fputs($fp, "Cookie: $_SERVER[HTTP_COOKIE]\r\n");;
	fputs($fp, "User-Agent: $_SERVER[HTTP_USER_AGENT]\r\n");
	fputs($fp, "Referer: $_SERVER[HTTP_REFERER]\r\n");
	fputs($fp, "Connection: close\r\n\r\n"); 

	while(!feof($fp))
	{
		$info .= fgets($fp, 1024);
	}

	fclose($fp);

	if($header == false)
	{
		$info = strstr($info, "\r\n\r\n");
	}

	return $info;
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function QueryHTTPArgs()                                      早
早 撲    貲 : 模鰍擊 檜辨ж罹 URL縑 п渡ж朝 等檜顫 陛螳螃晦 (頂睡鱔褐辨)   早
早            嫡嬴螞 頂辨醞縑 &諦 =蒂 晦遽戲煎 碟戮ж罹 寡翮縑 盪濰         早
早                                                                          早
早            $ret = QueryHTTPArgs("http://test.com:8000/index.html");      早
早            $ret曖 高檜 &name=檜惜繹&email=lkc7605@paran.com 塭賊         早
早            echo $ret["name"]; 檜楛⑽鷓煎 �倏�                            早
早                                                                          早
早 殮 溘 高 : $url    = 蕾樓й む檜雖 (http://test.com:8000/index.html)     早
早 葬 欐 高 : 寡翮煎 脹 等檜顫                                              早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function QueryHTTPArgs($url)
{
	parse_str(QueryHTTP($url), $ret);

	return $ret;
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function CutStr()                                             早
早 撲    貲 : 僥濠翮 望檜蒂 澀塭遽棻.                                       早
早            $ret = QueryHTTPArgs("http://test.com:8000/index.html");      早
早            $ret曖 高檜 &name=檜惜繹&email=lkc7605@paran.com 塭賊         早
早            echo $ret["name"]; 檜楛⑽鷓煎 �倏�                            早
早                                                                          早
早 殮 溘 高 : $str  = 僥濠翮                                                早
早            $len  = 濠蒂 僥濠翮 望檜 (艙僥晦遽)                           早
早            $tail = $len爾棻 贗衛 僥濠翮 瞼腦堅 僥濠翮 菴縑 蹺陛й 僥濠   早
早 葬 欐 高 : 陛奢脹 僥濠翮                                                 早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function CutStr($str, $len, $tail="...")
{
	if(strlen($str)>$len)
	{
		for($i=0; $i<$len; $i++)
		{
			if(ord($str[$i])>127)
				$i++;
		}

		$str=substr($str, 0, $i);
		$str .= $tail;
	}

	return $str;
}



function str2hash($s, $hash)
{
	$h=0;
	$g=0;

	for($i=0; $i<strlen($s); $i++)
	{
		$h = ($h << 4) + ord($s[$i]);
		if (($g = ($h & 0xF0000000)))
		{
			$h = $h ^ ($g >> 24);
			$h = $h ^ $g;
		}
	}

	return $h%$hash;
}




/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function my64encode()                                         早
早 撲    貲 : 僥濠翮 base64encode & 懍����                                  早
早 殮 溘 高 : $str  = 懍���倆� 僥濠翮                                       早
早 葬 欐 高 : 懍���音� 僥濠翮                                               早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

$ekey = "s912edgh9187272dg1297127ddfiuhzvclkzxkcvj1-09djh20eu0=pw[]l,2e12;";

function my64encode( $str )
{
	global $ekey;
	$epos = 0;

	for($i=0; $i<strlen($str); $i++)
	{
		$str[$i] = $str[$i] ^ $ekey[$epos++];
		if($ekey[$epos] == ';')
			$epos = 0;
	}

	return base64_encode($str);
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function my64decode()                                         早
早 撲    貲 : 僥濠翮 base64decode & 犒����                                  早
早 殮 溘 高 : $str  = 懍���音� 僥濠翮                                       早
早 葬 欐 高 : 犒���音� 僥濠翮                                               早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function my64decode( $str )
{
	global $ekey;
	$epos = 0;

	$str = base64_decode($str);

	for($i=0; $i<strlen($str); $i++)
	{
		$str[$i] = $str[$i] ^ $ekey[$epos++];
		if($ekey[$epos] == ';')
			$epos = 0;
	}

	return $str;
}


function str64encode($str)
{
	return str_replace("=", "~", my64encode($str));
}

function str64decode($str)
{
	return my64decode(str_replace("~", "=", $str));
}


function Num2Hangul($num, $nclass=null, $hclass=null)
{
	if($num < 1)
	{
		$ret = 0;
		if($hclass != null)
			$com[$i] = "<font class=$hclass>0</font>";

		return $ret;
	}
	
	$ret = "";
	$len  = strlen($num);
	$div = floor($len/4);
	$per = $len % 4;
	$res = Array();
	$com = Array("", "虜 ", "橘 ", "褻 ", "唳 ", "п ");

	for($i=0; $i<$div; $i++)
	{
		$res[$i] = substr($num, $len-($i*4+4), 4);
	}

	if($per != 0)
		$res[count($res)] = substr($num, 0, $per);

	for($i=0; $i<count($res); $i++)
	{
		if((int)($res[$i]) != 0)
		{
			if($hclass != null)
				$com[$i] = "<font class=$hclass>".$com[$i]."</font>";

			$res[$i] = (int)($res[$i]);

			if($nclass != null)
				$res[$i] = "<font class=$nclass>".$res[$i]."</font>";
			
			$res[$i] = $res[$i].$com[$i];
		}
		else
		{
			$res[$i] = "";
		}

		$ret = $res[$i].$ret;
	}

	return $ret;
}





function DelFiles($dir)
{
	if (is_dir($dir) == null)
		return;

	if(($dh = opendir($dir)) == null)
		return;

	while (($file = readdir($dh)) !== false)
	{
		if(strlen($file) < 5)
			continue;

		unlink($dir.$file);
	}

	closedir($dh);
}



/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 л 熱 貲 : function GetUniq()                                            早
早 撲    貲 : 醞犒腎雖 彊朝 囀萄 儅撩衛 餌辨                                早
早 葬 欐 高 : 醞犒腎雖 彊朝 囀萄高                                          早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

function GetUniq()
{
	$mtime = explode(" ", microtime());
	$ret = sprintf("%x%x%x", $mtime[0], $mtime[1], mt_rand()%65535);

	return $ret;
}


function GetShortUniq()
{
	$mtime = explode(" ", microtime());
	$ret = sprintf("%x%x", $mtime[0], $mtime[1]);

	return $ret;
}



function SaveFile($file, $str)
{
	$fp = @fopen($file, "w");
	if($fp != null)
	{
		fputs($fp, $str);
		fclose($fp);
	}
}


function LoadFile($file)
{
//	if(!eregi("http://", $file))
	if(!preg_match("#http://#i", $file))
		return join ('', @file($file));
	else
	{
		return QueryHTTP($file);
	}
}


function CacheLoadFile($file, $url, $dtime)
{
	global $Time;

	$ftime = (int)(@filemtime($file));
	if($ftime >= $Time-$dtime)
	{
		echo LoadFile($file);
	}
	else
	{
		$str = LoadFile($url);
		echo $str;
		
		SaveFile($file, $str);
	}
}



function IsRandApply($percent)
{
	$rnd = mt_rand(1, 100);

	if($rnd <= $percent)
		return true;

	return false;
}



function DateDiff($dat1, $dat2)
/* Dat1 and Dat2 passed as "YYYY-MM-DD" */
{
	$tmp_dat1 = mktime(0,0,0,
		substr($dat1,5,2),substr($dat1,8,2),substr($dat1,0,4));
	$tmp_dat2 = mktime(0,0,0,
		substr($dat2,5,2),substr($dat2,8,2),substr($dat2,0,4));

	$yeardiff = date('Y',$tmp_dat1)-date('Y',$tmp_dat2);
	/* a leap year in every 4 years and the days-difference */
	$diff = date('z',$tmp_dat1)-date('z',$tmp_dat2) + 
		floor($yeardiff /4)*1461;

	/* remainder */
	for ($yeardiff = $yeardiff % 4; $yeardiff>0; $yeardiff--)
	{
		$diff += 365 + date('L',
			mktime(0,0,0,1,1,
			intval(
				substr(
					(($tmp_dat1>$tmp_dat2) ? $dat1 : $dat2),0,4))
				-$yeardiff+1));
	}

	return $diff;
}



// 釭檜羹觼ж朝 л熱..
// My function for returning an age. e.g. 23 and 129 days
function GetAge($DOB) // YYYY-MM-DD
{
	// Split $DOB
	$DOBArray = explode("-", $DOB);
	$DobYear = $DOBArray[0];
	$DobMonth = $DOBArray[1];
	$DobDay = $DOBArray[2];
	
	// Get today's year, month and day
	$TodayDay = date('d');
	$TodayMonth = date('m');
	$TodayYear = date('Y');

	// Work out Age in Years
	if (($TodayMonth > $DOBArray[1]) || (($TodayMonth == $DOBArray[1]) && ($TodayDay >= $DOBArray[2])))
	{
		$AgeYear = $TodayYear - $DOBArray[0];
	}
	else
	{
		$AgeYear = $TodayYear - $DOBArray[0] - 1;
	}
	
	return $AgeYear;
}

function ChkHtml($str)
{
	if ($str == "")
		return;

//	$str = stripslashes($str) ;
//	$str = htmlspecialchars($str) ;
	$str = str_replace("<", "&lt;", $str);
	$str = str_replace("\\", "", $str);
	$str = nl2br($str) ;

	return $str;
}




/*******************************************************
 * author : Chan Hwang (gogisnim@gmail.com)
 * date   : 2008.08.07
 * desc   : Public Function
 *******************************************************/
function goto_url($url, $alert = 0 ) {
	/*
	echo "<script>alert('籀葬腎歷蝗棲棻');</script>";
	echo "<meta http-equiv='refresh' content='0; URL=$url'>";
	*/
	if ( $alert ) {
		//echo "<script>alert('$alert');</script>";
		//echo "<meta http-equiv='refresh' content='0; URL=$url'>";
		echo "
		<form name='refresh_f' method='post' action='$url'>
		<span id='blahlayer'><input type='text' name='blahblah' id='blahblah' /></span>
		</form>
		<script language='javascript'>
			alert('$alert');
			document.getElementById('blahlayer').style.display = 'none';
			document.refresh_f.submit();
		</script>
		";
	} else {
		//echo "<meta http-equiv='refresh' content='0; URL=$url'>";
		echo "
		<form name='refresh_f' method='post' action='$url'>
		<span id='blahlayer'><input type='text' name='blahblah' id='blahblah' /></span>
		</form>
		<script language='javascript'>
			document.getElementById('blahlayer').style.display = 'none';
			document.refresh_f.submit();
		</script>
		";
	}
}

// authentication check
function auth_chk($base64url) {
	global $_SESSION;
	
	if ( !$_SESSION['mem_id'] or $_SESSION['mem_id'] == null ) {
		echo "<script>alert('煎斜檣ж敷撿 м棲棻.'); location.href='/member/login.php?rurl=$base64url';</script>";
		exit;
	}
}

// join check
function join_chk() {
	global $_SESSION;
	
	if ( strlen($_SESSION['mem_id']) > 3 ) {
		echo "<script>alert('檜嘐 陛殮腎橫 氈蝗棲棻.'); history.back();</script>";
		exit;
	}
}

// popup authentication check
function pop_auth_chk() {
	global $_SESSION;
	
	if ( !$_SESSION['mem_id'] or $_SESSION['mem_id'] == null ) {
		echo "<script>alert('煎斜檣 ж敷撿 м棲棻.'); opener.location.href='/member/login.php'; self.close();</script>";
		exit;
	}
}

// admin authentication check
function admin_auth_chk() {
	global $_SESSION;
	global $ADMIN_AUTH;

	if ( !$_SESSION['admin_id'] or $_SESSION['admin_id'] == null ) {
		echo "<script>alert('婦葬濠 檣隸檜 腎雖 彊懊蝗棲棻.'); location.href='$ADMIN_AUTH';</script>";
		exit;
	}
}

// referer check
function referer_chk() {
	/*
	global $_SERVER;

	if ( strpos($_SERVER['HTTP_REFERER'], "http://".$_SERVER['HTTP_HOST']) === false ) {
		echo "<script>alert('澀跤脹 唳煎蕾斬 殮棲棻'); history.go(-1);</script>";
		exit;
	}
	*/
}

// popup referer check
function pop_referer_chk() {
	global $_SERVER;

	if ( strpos($_SERVER['HTTP_REFERER'], "http://".$_SERVER['HTTP_HOST']) === false ) {
		echo "<script>alert('澀跤脹 唳煎蕾斬 殮棲棻'); self.close();</script>";
		exit;
	}
}


// sql injection check
function sql_injection_chk($id,$pw) {
	if ( ereg("['\"]", $id) or ereg("['\"]", $pw) ) {
		echo "<script>alert('澀跤脹 僥濠翮 殮棲棻.'); history.go(-1);</script>";
		exit;
	}
}

// mobile,hp print
// 0196122632
// 01095876520
function phone_disp($str) {
	/*
	$ret = "";
	if ( strlen($str) == 12 ) {
		$ret = substr($str, 0, 3)."-".substr($str, 3, 3)."-".substr($str, 6, 4);
	} else {
		$ret = substr($str, 0, 3)."-".substr($str, 3, 4)."-".substr($str, 7, 4);
	}
	*/
	return $ret;
	
}

// admin page navigation
function admin_page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$list_url,$qry_str) {
	global $ADMIN_DIR;
	$navi = "<table border='0' cellspacing='0' cellpadding='0'><tr>";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<td width='7'><a href='$list_url?page=$my_page$qry_str'><img src='board_img/btn_pre.gif' width='7' height='7' border='0'></a></td>";
	} else {
		$navi .= "<td width='7'><img src='{$ADMIN_DIR}board_img/btn_pre.gif' width='7' height='7' border='0'></td>";
	}

	$navi .= "<td align='center' style='padding-left:10;padding-right:10;padding-bottom:2'>";
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
	    if ( $page == $direct_page ) {
	        $navi .= "<font color='#FF6600'><b><span class='date'>$direct_page</span></b></font>&nbsp;";
	    } else {
	        $navi .= "<a href='$list_url?page=$direct_page$qry_str' class='page'>$direct_page</a>&nbsp;";
	    }
	}
	$navi .= "</td>";

	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<td width='7' align='right'><a href='$list_url?page=$my_page$qry_str'><img src='board_img/btn_next.gif' width='7' height='7' border='0'></a></td>";
	} else {
		$navi .= "<td width='7' align='right'><img src='{$ADMIN_DIR}board_img/btn_next.gif' width='7' height='7' border='0'></td>";
	}

	$navi .= "</tr></table>";

	return $navi;
}

// page navigation
function page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$list_url,$qry_str) {
	$navi = "";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<a href='$list_url?page=$my_page$qry_str'><img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	if ( $page > 1 ) {
		$prev_page = $page - 1;
		$navi .= "<a href='$list_url?page=$prev_page$qry_str'><img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' />";
	}

	$navi .= "&nbsp;";

	$cnt = 0;
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
		$cnt++;
		$bar = ( $cnt != 10 && $direct_page != $last_page ) ? " | " : "";
	    if ( $page == $direct_page ) {
	        $navi .= "<b><font color='#333333'>$direct_page</font></b> $bar";
	    } else {
	        $navi .= "<a href='$list_url?page=$direct_page$qry_str'>$direct_page</a> $bar";
	    }
	}

	$navi .= "&nbsp;";

	if ( $page != $total_page ) {
		$next_page = $page + 1;
		$navi .= "<a href='$list_url?page=$next_page$qry_str'><img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' /></a>";
	} else {
		$navi .= "<img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' />";
	}

	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<a href='$list_url?page=$my_page$qry_str'><img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	return $navi;
}

function ajax_gift_page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$func,$p_idx, $p_e_idx,$shop_idx) {
	$navi = "
	<table width='860' height='45' border='0' cellpadding='0' cellspacing='0'>
		<tr>
			<td align='center'>	
	";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p_idx','$p_e_idx','$shop_idx','$my_page');\"><img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	if ( $page > 1 ) {
		$prev_page = $page - 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p_idx','$p_e_idx','$shop_idx','$prev_page');\"><img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' /></a>&nbsp;";
	} else {
		$navi .= "<img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' />&nbsp;";
	}


	$cnt = 0;
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
		$cnt++;
		$bar = ( $cnt != 10 && $direct_page != $last_page ) ? " | " : "";
	    if ( $page == $direct_page ) {
	        $navi .= "<b><font color='#333333'>$direct_page</font></b>$bar";
	    } else {
	        $navi .= "<a style='cursor:hand;' onClick=\"$func('$p_idx','$p_e_idx','$shop_idx','$direct_page');\">$direct_page</a>$bar";
	    }
	}

	$navi .= "&nbsp;";

	if ( $page != $total_page ) {
		$next_page = $page + 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p_idx','$p_e_idx','$shop_idx','$next_pag');\"><img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' /></a>";
	} else {
		$navi .= "<img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' />";
	}


	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<a style='cursor:hand;' onClick=\"$func('$p_idx','$p_e_idx','$shop_idx','$my_page');\"><img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	$navi .= "
			</td>
		</tr>
	</table>	
	";

	return $navi;
}

function ajax_general_page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$func,$p1,$p2,$p3,$p4) {
	$navi = "";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$my_page','$p4');\"><img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	if ( $page > 1 ) {
		$prev_page = $page - 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$prev_page','$p4');\"><img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' /></a>&nbsp;";
	} else {
		$navi .= "<img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' />&nbsp;";
	}


	$cnt = 0;
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
		$cnt++;
		$bar = ( $cnt != 10 && $direct_page != $last_page ) ? " | " : "";
	    if ( $page == $direct_page ) {
	        $navi .= "<b><font color='#333333'>$direct_page</font></b>$bar";
	    } else {
	        $navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$direct_page','$p4');\">$direct_page</a>$bar";
	    }
	}

	$navi .= "&nbsp;";

	if ( $page != $total_page ) {
		$next_page = $page + 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$next_page','$p4');\"><img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' /></a>";
	} else {
		$navi .= "<img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' />";
	}


	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$my_page','$p4');\"><img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	return $navi;
}

function ajax_board_page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$func,$p1,$p2,$p3,$p4,$p5,$p6) {
	$navi = "";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$my_page','$p4','$p5','$p6');\"><img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	if ( $page > 1 ) {
		$prev_page = $page - 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$prev_page','$p4','$p5','$p6');\"><img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' /></a>&nbsp;";
	} else {
		$navi .= "<img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' />&nbsp;";
	}


	$cnt = 0;
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
		$cnt++;
		$bar = ( $cnt != 10 && $direct_page != $last_page ) ? " | " : "";
	    if ( $page == $direct_page ) {
	        $navi .= "<b><font color='#333333'>$direct_page</font></b>$bar";
	    } else {
	        $navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$direct_page','$p4','$p5','$p6');\">$direct_page</a>$bar";
	    }
	}

	$navi .= "&nbsp;";

	if ( $page != $total_page ) {
		$next_page = $page + 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$next_page','$p4','$p5','$p6');\"><img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' /></a>";
	} else {
		$navi .= "<img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' />";
	}


	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$my_page','$p4','$p5','$p6');\"><img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	return $navi;
}

// 囀蛤ゎ陛牖嬪(/product/codi_list.php) む檜癒
function ajax_codi_page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$func,$p1,$p2,$p3,$p4,$p5) {
	$navi = "";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$p4','$p5','$my_page');\"><img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	if ( $page > 1 ) {
		$prev_page = $page - 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$p4','$p5','$prev_page');\"><img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' /></a>&nbsp;";
	} else {
		$navi .= "<img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' />&nbsp;";
	}


	$cnt = 0;
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
		$cnt++;
		$bar = ( $cnt != 10 && $direct_page != $last_page ) ? " | " : "";
	    if ( $page == $direct_page ) {
	        $navi .= "<b><font color='#333333'>$direct_page</font></b>$bar";
	    } else {
	        $navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$p4','$p5','$direct_page');\">$direct_page</a>$bar";
	    }
	}

	$navi .= "&nbsp;";

	if ( $page != $total_page ) {
		$next_page = $page + 1;
		$navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$p4','$p5','$next_page');\"><img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' /></a>";
	} else {
		$navi .= "<img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' />";
	}


	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<a style='cursor:hand;' onClick=\"$func('$p1','$p2','$p3','$p4','$p5','$my_page');\"><img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	return $navi;
}

function ajax_page_navi($page,$first_page,$last_page,$total_page,$block,$total_block,$func,$mem_id,$mem_kind,$rurl,$v_url,$w_url,$etc1,$etc2,$etc3,$updown_yn,$active) {
	$navi = "
	<table width='860' height='45' border='0' cellpadding='0' cellspacing='0'>
		<tr>
			<td align='center'>	
	";

	if ( $block > 1 ) {
		$my_page = $first_page;
		$navi .= "<a href='#{$etc3}' onClick=\"$func('$mem_id','$mem_kind','$rurl','$etc1','$etc2','$my_page','$v_url','$w_url','$updown_yn','$active');\"><img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_first_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	if ( $page > 1 ) {
		$prev_page = $page - 1;
		$navi .= "<a href='#{$etc3}' onClick=\"$func('$mem_id','$mem_kind','$rurl','$etc1','$etc2','$prev_page','$v_url','$w_url','$updown_yn','$active');\"><img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' /></a>&nbsp;";
	} else {
		$navi .= "<img src='/img/btn_prev6.gif' width='44' height='16' border='0' align='absmiddle' />&nbsp;";
	}


	$cnt = 0;
	for ( $direct_page = $first_page+1; $direct_page<=$last_page; $direct_page++ ) {
		$cnt++;
		$bar = ( $cnt != 10 && $direct_page != $last_page ) ? " | " : "";
	    if ( $page == $direct_page ) {
	        $navi .= "<b><font color='#333333'>$direct_page</font></b>$bar";
	    } else {
	        $navi .= "<a href='#{$etc3}' onClick=\"$func('$mem_id','$mem_kind','$rurl','$etc1','$etc2','$direct_page','$v_url','$w_url','$updown_yn','$active');\">$direct_page</a>$bar";
	    }
	}

	$navi .= "&nbsp;";

	if ( $page != $total_page ) {
		$next_page = $page + 1;
		$navi .= "<a href='#{$etc3}' onClick=\"$func('$mem_id','$mem_kind','$rurl','$etc1','$etc2','$next_page','$v_url','$w_url','$updown_yn','$active');\"><img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' /></a>";
	} else {
		$navi .= "<img src='/img/btn_next6.gif' width='44' height='16' border='0' align='absbottom' />";
	}


	if ( $block < $total_block ) {
	    $my_page = $last_page + 1;
	    $navi .= "<a href='#{$etc3}' onClick=\"$func('$mem_id','$mem_kind','$rurl','$etc1','$etc2','$my_page','$v_url','$w_url','$updown_yn','$active');\"><img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' /></a>";
	} else {
		$navi .= "<img src='/img/btn_end_go2.gif' width='20' height='16' border='0' align='absmiddle' />";
	}

	$navi .= "
			</td>
		</tr>
	</table>	
	";

	return $navi;
}

// 憧薑爾 溯檜橫
function getLayerShopInfo($obj, $cnt, $zidx1, $zidx2, $left, $top, $rp_total_rank, $shop_url, $shop_name, $shop_mem_id, $param_hide) {
	$html = "
	<div id='{$obj}_{$cnt}'  style='position:relative; z-index:{$zidx1}; left:{$left}px; top:{$top}px;visibility: hidden;' > 
	<div STYLE='position: absolute; z-index: {$zidx2};'>
	<table width='100' border='0' cellpadding='0' cellspacing='0' >
		<tr>
			<td width='6' align='right'><img src='/img/arr_orage.gif'></td>
			<td bgcolor='#FFFFFF'>
			<table width='100' border='0' cellpadding='1' cellspacing='1' bgcolor='#FF7533'>
				<tr>
					<td bgcolor='#FFFFFF'>
					<table width='150' height='150' border='0' cellpadding='7' cellspacing='4' bgcolor='#FF9966'>
						<tr>
							<td valign='top' bgcolor='#FFFFFF'>
							<table width='100%' border='0' cellpadding='2' cellspacing='3' bgcolor='#FF9966'>
								<tr>
									<td align='center' class='evgray' style='PADDING-top: 4px;'><b><font color='#FFFFFF'>瞪羹牖嬪 <font color='#000000'>$rp_total_rank</font> 嬪 </font></b></td>
								</tr>
							</table>
							<table width='100' height='8' border='0' cellpadding='0' cellspacing='0'>
								<tr>
									<td></td>
								</tr>
							</table>
							<table width='90%' border='0' cellspacing='0' cellpadding='0' align=center>
								<tr>
									<td height='22' class=evmem><img src='/img/icon_homepage.gif' width='16' height='12' align='absmiddle'> <a href='$shop_url' target='_blank'>�事靺攽� 夥煎陛晦</a></td>
								</tr>
								<tr>
									<td height='1' background='/img/dot_garo_max.gif'></td>
								</tr>
								<tr>
									<td height='22' class=evmem><img src='/img/icon_allcodi.gif' width='17' height='15' align='absmiddle'> <a href='#' onClick=\"go_shop_info('$shop_name');\">蛔煙囀蛤 瞪羹爾晦</a></td>
								</tr>
								<tr>
									<td height='1' background='/img/dot_garo_max.gif'></td>
								</tr>
								<tr>
									<td  height='22' class=evmem><img src='/img/icon_memo_tran.gif' width='17' height='14' align='absmiddle'> <a href='#' height='22' class=evmem onClick=\"pop_msg('$shop_mem_id');\">薹雖爾頂晦</a></td>
								</tr>
								<tr>
									<td height='1' background='/img/dot_garo_max.gif'></td>
								</tr>
							</table>
							<table width='100%' height='20' border='0' cellpadding='0' cellspacing='0'>
								<tr>
									<td align='right' valign='bottom'><a  onClick=\"MM_showHideLayers($param_hide);\" style='cursor:hand;'><img src='/img/btn_pop_close.gif' width='13' height='13' border=0></a></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	</div>
	</div>
	";
	return $html;
}


// random string
function random_code2($length) {
	$pattern = "0123456789abcdefghijklmnopqrstuvwxyz";
	$key = $pattern{rand(0,36)};

	for($i=1; $i<$length; $i++)
		$key .= $pattern{rand(0,36)};

	return $key;
}

// send msg
function send_msg($s,$r,$str) {
	global $mainconn;

	$mainconn->open();
	$str = addslashes($str);
	$sql = "insert into tblMsg (send_mem_id,recv_mem_id,msg_comment,msg_send_dt,msg_recv_ok) values ('$s','$r','$str',now(),'N')";
	$mainconn->query($sql);
}

// cut string
// http://phpschool.com/gnuboard4/bbs/board.php?bo_table=tipntech&wr_id=15047&sop=and&page=3
function cutStringHan($str, $len, $tail="..") {
	if (strlen($str)>$len) {
		for($i=0; $i<$len; $i++) if(ord($str[$i])>127) $i++;
		$str=substr($str,0,$i);
	}
	return $str.$tail;
}

// L : list/write, V : view
function strip_str($str, $flag="L") {
	$str = ( $flag == "L" ) ? stripslashes($str) : nl2br(stripslashes($str));
	return $str;
}

// iconv
/* TODO
* function iconv($f, $t, $str) {
	global $UP_DIR;

	$tmp_file = $UP_DIR."/tmp/".random_code2(10);
	$tmp_file_new = $tmp_file."_new";

	$fp = fopen($tmp_file, "w+");
	fwrite($fp, $str);
	$flag = system("/usr/local/bin/iconv -f $f -t $t ".$tmp_file." > ".$tmp_file_new);

	$fp = fopen($tmp_file_new, "r");
	$str = fread($fp,10000);

	$str = addslashes($str);

	fclose($fp);
	@unlink($tmp_file);
	@unlink($tmp_file_new);

	return $str;
}
*/

// п渡 殖曖 羅陳婁 葆雖虞陳
function getMonthDay( $kind, $timestamp, $flag = "D" ) {
	$arr = array();
	if ( $kind == "last" ) {
		$t_flag = "-1";
	} else if ( $kind == "current" ) {
		$t_flag = "0";
	} else {
		$t_flag = "+1";
	}
	$stamp = strtotime("$t_flag month", $timestamp);
	
	if ( $flag == "D" ) {
		$arr[0] = date("Y-m-01", $stamp);
		$arr[1] = date("Y-m-t", $stamp);
	} else {
		$arr[0] = date("Y-m-01 H:i:s", $stamp);
		$arr[1] = date("Y-m-t H:i:s", $stamp);
	}
	return $arr;
}

// п渡 輿曖 羅陳婁 葆雖虞陳
function getWeekDay( $kind, $timestamp, $flag = "D" ) {
	$arr = array();

	$cur_dt = date("w",$timestamp);

	if ( $kind == "last" ) {
		$first_timestamp = $timestamp - ($cur_dt + 7)*86400;
		$last_timestamp = $timestamp - ($cur_dt + 1)*86400;
	} else if ( $kind == "current" ) {
		$first_timestamp = $timestamp - ($cur_dt)*86400;
		$last_timestamp = $timestamp - ($cur_dt - 6)*86400;
	} else {
		$first_timestamp = $timestamp + (7 - $cur_dt)*86400;
		$last_timestamp = $timestamp + (7 - $cur_dt + 6)*86400;
	}

	$date_format = ( $flag == "D" ) ? "Y-m-d" : "Y-m-d H:i:s";

	$arr[0] = date($date_format, $first_timestamp);
	$arr[1] = date($date_format, $last_timestamp);
	
	return $arr;
}

// $arr[偎熱][衛濛/謙猿]
function getWeekStartEnd( $num ) {
	$arr = array();
	$t = time();
	for ( $i=0; $i<$num; $i++ ) {
		$arr[$i][0] = date( "Y-m-d H:i:s", $t + (($i*7) * 86400) );
		$arr[$i][1] = date( "Y-m-d H:i:s", $t + (($i*7+7) * 86400) - 1 );
	}
	return $arr;
}

// 羅廓簞 檣濠曖 陳瞼煎睡攪 舒廓簞 檣濠曖 熱虜躑曖 賅萇 陳瞼蒂 寡翮煎 葬欐
function getAllDate( $d, $n ) {
	$ret = array();
	$arr = explode("-", $d);
	$stamp = mktime(1,0,0,$arr[1],$arr[2],$arr[0]);
	if ( $n < 1 ) return $ret;
	for ( $i=1; $i<=$n; $i++ ) {
		array_push($ret, date("Y-m-d", $stamp + ( $i-1 ) * 86400));
	}
	return $ret;
}

// 羅陳縑 п渡ж朝 葆雖虞 陳擊 掘и棻.
function getLastDay( $f, $flag = "W" /* W:weekly, M:monthly */ ) {
	$arr = explode("-", $f);
	$stamp = mktime(0,0,0,$arr[1],$arr[2],$arr[0]);
	if ( $flag == "W" ) {
		$l_stamp = $stamp + 86400 * 6;
		return date("Y-m-d", $l_stamp);
	} else if ( $flag == "M" ) {
		$last_day = date("t", $stamp);
		return substr($f, 0, 8).$last_day;
	}
}

// 僥濠翮縑 か薑и 僥濠煎虜 檜瘀雖賊 霤, 斜溢雖 彊戲賊 剪騁
function chkAllStr( $str, $ch ) {
	$len = strlen($str);
	for ( $i=0; $i<$len; $i++ ) {
		if ( substr($str, $i, 1) != $ch ) return 0;
	}
	return 1;
}

// 唳ヶ熱滄и 偎熱蒂 掘и棻.
function getGiftOk( $str, $ch ) {
	$len = strlen($str);
	$cnt = 0;
	for ( $i=0; $i<$len; $i++ ) {
		if ( substr($str, $i, 1) == $ch ) $cnt++;
	}
	return $cnt;
}


########################## 囀蛤鱉10 DB 籀葬 л熱菟 #######################

// 濠褐曖 薄熱諦 last_reg_dt 蒂 機等檜お и棻.
// $mem_id : 嬴檜蛤
// $score : 蝶囀橫(-陛 腆 熱氈擠)
// $flag : last_reg_dt 滲�� 輿朝雖 罹睡(1檜賊 ⑷營衛除戲煎)
function UpdateMyScore( $mem_id, $score, $flag ) {
	global $mainconn, $_SESSION;
	
	// ⑷營 薄熱蒂 掘и棻.
	$sql = "select mem_score, mem_grade from tblMember where mem_id = '$mem_id' ";
	$res = $mainconn->query($sql);
	$row = $mainconn->fetch($res);
	
	$mem_score = $row['mem_score'];
	$mem_grade = $row['mem_grade'];

	// 夥莞 薄熱蒂 掘и棻.
	$new_mem_score = $mem_score + $score;

	// 賅萇 蛔晝擊 掘и棻.
	$sql = "select lg_grade, lg_score from tblLottoGrade order by lg_grade asc ";
	$res = $mainconn->query($sql);
	
	$upper_score = 1000000;
	$new_mem_grade = 0;
	while ( $row = $mainconn->fetch($res) ) {
		$lg_grade = $row['lg_grade'];
		$lg_score = $row['lg_score'];

		if ( $new_mem_score >= $lg_score && $new_mem_score < $upper_score ) {
			$new_mem_grade = $lg_grade;
			break;
		}
		$upper_score = $lg_score;
	}

	// 蛔晝檜 夥船歷戲賊
	if ( $mem_grade != $new_mem_grade ) {
		// 億煎遴 渡繩 �挫窕� 掘и棻.
		$sql = "select lg_percent from tblLottoGrade where lg_grade = $new_mem_grade ";
		$new_mem_percent = $mainconn->count($sql);

		// 撮暮 營儅撩
		$_SESSION['mem_grade'] = $new_mem_grade;
		$_SESSION['mem_percent'] = $new_mem_percent;
		session_register("mem_grade","mem_percent");
	}

	$dt_str = ( $flag ) ? " , last_reg_dt = now() " : "";
	$sql = "update tblMember set mem_score = $new_mem_score, mem_grade = $new_mem_grade $dt_str where mem_id = '$mem_id' ";
	return $mainconn->query($sql);
}

// tblProductUpDown insert
function InsertUpDown( $p_idx, $p_e_idx, $mem_id, $val ) {
	global $mainconn, $_SESSION;

	$sql = "insert into tblProductUpDown (p_idx, p_e_idx, mem_id, p_u_val, p_u_reg_dt) values ($p_idx, $p_e_idx, '$mem_id', $val, now())";
	$res = $mainconn->query($sql);
	if ( $res ) {
		// 霤罹и 囀蛤 偎熱蒂 掘п憮 撮暮 營儅撩
		$_SESSION['my_updown_codi_cnt'] = getUserCodiCount($mem_id);
	}
	return $res;
}

// tblProductComment
function InsertProductComment( $p_idx, $p_e_idx, $mem_id, $p_c_comment, $ip, $status ) {
	global $mainconn;

	$sql = "insert into tblProductComment (p_idx, p_e_idx, mem_id, p_c_comment, p_c_ip, p_c_status, p_c_reg_dt) values  ($p_idx, $p_e_idx, '$mem_id', '$p_c_comment', '$ip', '$status', now() )";
	return $mainconn->query($sql);
}

// tblShop 纔檜綰縑 insert и棻.
function InsertScore( $mem_id, $p_e_idx, $sc_code ) {
	global $mainconn;

	$sql = "insert into tblScore (mem_id, p_e_idx, sc_cid, s_reg_dt) values ('$mem_id', $p_e_idx, '$sc_code', now()) ";
	return $mainconn->query($sql);
}

// tblShop 纔檜綰擊 delete и棻.
function DeleteScore( $s_idx ) {
	global $mainconn;

	$sql = "delete from tblScore where s_idx = $s_idx ";
	return $mainconn->query($sql);
}

// tblProductVisit 纔檜綰縑 insert и棻.
function InsertVisit( $mem_id, $p_idx, $p_e_idx, $ip ) {
	global $mainconn;

	$sql = "insert into tblProductVisit (p_idx, p_e_idx, mem_id, p_v_ip, p_v_reg_dt) values ($p_idx, $p_e_idx, '$mem_id', '$ip', now()) ";
	return $mainconn->query($sql);
}

// 濠褐曖 議蓮蒂 機等檜お и棻.
// $mem_id : 嬴檜蛤
// $cash : 議蓮
function UpdateMyCash( $mem_id, $cash ) {
	global $mainconn, $_SESSION;

	$sql = "update tblMember set mem_cash = mem_cash + $cash where mem_id = '$mem_id' ";
	$res = $mainconn->query($sql);

	// 撮暮 營儅撩
	$new_cash = getCash($mem_id);
	$_SESSION['mem_cash'] = $new_cash;
	return $res;
}

// tblCash 纔檜綰縑 insert и棻.
function InsertCash( $mem_id, $code, $io, $cash ) {
	global $mainconn;

	$sql = "insert into tblCash (mem_id, cc_cid, cash_io, cash, cash_reg_dt) values ('$mem_id', '$code', '$io', $cash, now() ) ";
	return $mainconn->query($sql);
}

// 鼠鱔濰 殮旎 蝓檣籀葬(tblChargeBankBook 機等檜お)
function UpdateChargeBankBook( $bb_idx, $status ) {
	global $mainconn;

	$sql = "update tblChargeBankBook set bb_status = '$status', bb_ok_dt = now() where bb_idx = $bb_idx ";
	return $mainconn->query($sql);
}

// 鼠鱔濰 殮旎頂羲 餉薯
function DeleteChargeBankBook( $bb_idx ) {
	global $mainconn;

	$sql = "delete from tblChargeBankBook where bb_idx = $bb_idx ";
	return $mainconn->query($sql);
}
		
// 歜衛 囀蛤纔檜綰 餉薯
function DeleteProductTmp ( $p_idx ) {
	global $mainconn;

	$sql = "delete from tblProductTmp where p_idx=$p_idx";
	return $mainconn->query($sql);
}



// 襬詭景縑 釭螢 釭曖 薑爾蒂 掘и棻. (憧�蛾蠵�)
// 憧�蛾�   : 嫡擎薹雖, 檗雖彊擎薹雖, �挫徆�и唳ヶ熱, ゎ陛醞囀蛤熱, 諫猿囀蛤熱, 渠ル憧雖陪輿牖嬪, 渠ル憧瞪羹牖嬪, ⑷營議蓮
function getMyShopInfo( $mem_id ) {
	global $mainconn;
	$ret_arr = array();

	// 嫡擎薹雖 偎熱(爾婦л んл)
	$sql = "select count(*) from tblMsg where recv_mem_id = '$mem_id' and msg_recv_status = 'Y' ";
	$msg_cnt = $mainconn->count($sql);
	// 檗雖彊擎 薹雖 偎熱
	$sql = "select count(*) from tblMsg where recv_mem_id = '$mem_id' and msg_recv_status = 'Y' and msg_recv_ok = 'N' ";
	$noread_msg_cnt = $mainconn->count($sql);
	
	// �挫徆�и 唳ヶ熱(蘭葬陛 棻葷)
	$sql = "select count(*) from tblGiftTracking where shop_mem_id = '$id' and gt_status = 'A' ";
	$chk_gift_cnt = $mainconn->count($sql);

	// ゎ陛醞 囀蛤
	$sql = "select count(*) from tblProduct A, tblProductEach B where A.p_idx = B.p_idx and A.mem_id='$mem_id' and B.start_dt < '$now_dt' and B.end_dt > '$now_dt' ";
	$ing_codi_cnt = $mainconn->count($sql);
	
	// 諫猿 囀蛤
	$sql = "select count(*) from tblProduct A, tblProductEach B where A.p_idx = B.p_idx and A.mem_id='$mem_id' and B.end_dt < '$now_dt' ";
	$ed_codi_cnt = $mainconn->count($sql);

	// shop_idx - 渠ル憧曖 雖陪輿/瞪羹 牖嬪
	$sql = "select shop_idx from tblShop where mem_id='$mem_id' and shop_kind='I' ";
	$shop_idx = $mainconn->count($sql);

	$arr_week = getWeekDay( "last", time() );
	$sql = "select rs_rank, rs_total_rank from tblRankShop where shop_idx = $shop_idx and rs_start_dt = '".$arr_week[0]."' and rs_end_dt = '".$arr_week[1]."' ";
	$res = $mainconn->query($sql);
	$row = $mainconn->fetch($res);

	if ( $row ) {
		$last_rank = $row['rs_rank'];
		$total_rank = $row['rs_total_rank'];
	} else {
		$total_rank = $last_rank = 0;
	}

	// ⑷營 議蓮
	$sql = "select mem_cash from tblMember where mem_id = '$mem_id' ";
	$my_cash = $mainconn->count($sql);

	array_push($ret_arr, $msg_cnt, $noread_msg_cnt, $chk_gift_cnt, $ing_codi_cnt, $ed_codi_cnt, $last_rank, $total_rank, $my_cash);
	return $ret_arr;
}


// 襬詭景縑 釭螢 釭曖 薑爾蒂 掘и棻. (橾奩�蛾蠵�)
// 橾奩�蛾� : 嫡擎薹雖, 檗雖彊擎薹雖, �挫徆�и唳ヶ熱, 霤陛囀蛤熱, 渡繩唳ヶ熱, 薄熱, 蛔晝, 渡繩�挫�
function getMyUserInfo( $mem_id ) {
	global $mainconn;
	$ret_arr = array();

	// 嫡擎薹雖 偎熱(爾婦л んл)
	$sql = "select count(*) from tblMsg where recv_mem_id = '$mem_id' and msg_recv_status = 'Y' ";
	$msg_cnt = $mainconn->count($sql);

	// 檗雖彊擎 薹雖 偎熱
	$sql = "select count(*) from tblMsg where recv_mem_id = '$mem_id' and msg_recv_status = 'Y' and msg_recv_ok = 'N' ";
	$noread_msg_cnt = $mainconn->count($sql);
	
	// �挫徆�и 唳ヶ熱(蘭葬陛 棻葷)
	$sql = "select count(*) from tblGiftTracking where user_mem_id = '$id' and gt_reg_dt = status_reg_dt ";
	$chk_gift_cnt = $mainconn->count($sql);
		
	// 霤罹醞檣 ゎ陛
	$codi_cnt = 0;
	$now_dt = date("Y-m-d H:i:s", time());
	$sql = "select p_e_idx from tblProductEach where start_dt < '$now_dt' and end_dt > '$now_dt' ";
	$res = $mainconn->query($sql);
	
	$p_e_idxs = "";
	while ( $row = $mainconn->fetch($res) ) {
		$p_e_idxs .= $row['p_e_idx'].",";
	}
	if ( $p_e_idxs ) {
		$p_e_idxs = substr($p_e_idxs, 0, strlen($p_e_idxs)-1);
		$sql = "select count(*) from tblProductUpDown where mem_id = '$mem_id' and p_e_idx in ( $p_e_idxs ) ";
		$codi_cnt = $mainconn->count($sql);
	}

	// 唳ヶ熱滄 偎熱(雖旎梱雖 渡繩�挫� 脹剪 瞪睡棻)
	$sql = "select count(*) from tblGiftTracking where user_mem_id = '$mem_id' ";
	$gift_cnt = $mainconn->count($sql);

	// 薄熱, 蛔晝, 渡繩�捕�
	$sql = "select A.mem_grade,A.mem_score,B.lg_percent from tblMember A, tblLottoGrade B where A.mem_grade = B.lg_grade and A.mem_id = '$mem_id' ";
	$res = $mainconn->query($sql);
	$row = $mainconn->fetch($res);
	$my_score = $row['mem_score'];
	$my_grade = $row['mem_grade'];
	$my_percent = $row['lg_percent'];

	array_push($ret_arr, $msg_cnt, $noread_msg_cnt, $chk_gift_cnt, $codi_cnt, $gift_cnt, $my_score, $my_grade, $my_percent);
	return $ret_arr;
}


// 檗雖彊擎 薹雖/瞪羹薹雖蒂 掘и棻.
function getMsgCount( $mem_id ) {
	global $mainconn;

	$arr_msg = array();

	// 嫡擎薹雖 偎熱(爾婦л んл)
	$sql = "select count(*) from tblMsg where recv_mem_id = '$mem_id' and msg_recv_status = 'Y' ";
	$msg_cnt = $mainconn->count($sql);

	// 檗雖彊擎 薹雖 偎熱
	$sql = "select count(*) from tblMsg where recv_mem_id = '$mem_id' and msg_recv_status = 'Y' and msg_recv_ok = 'N' ";
	$noread_msg_cnt = $mainconn->count($sql);

	array_push($arr_msg, $msg_cnt, $noread_msg_cnt);
	return $arr_msg;
}

// ゎ陛醞 囀蛤曖 偎熱蒂 掘и棻(憧 �蛾蠵�)
function getShopIngCodiCount( $mem_id ) {
	global $mainconn;

	$now_dt = date("Y-m-d H:i:s", time());

	// ゎ陛醞 囀蛤
	$sql = "select count(*) from tblProduct A, tblProductEach B where A.p_idx = B.p_idx and A.mem_id='$mem_id' and B.start_dt < '$now_dt' and B.end_dt > '$now_dt' ";
	return $mainconn->count($sql);
}

// 諫猿 囀蛤曖 偎熱蒂 掘и棻(憧 �蛾蠵�)
function getShopEdCodiCount( $mem_id ) {
	global $mainconn;

	$now_dt = date("Y-m-d H:i:s", time());

	// 諫猿 囀蛤
	$sql = "select count(*) from tblProduct A, tblProductEach B where A.p_idx = B.p_idx and A.mem_id='$mem_id' and B.end_dt < '$now_dt' ";
	return $mainconn->count($sql);
}

// ゎ陛и 囀蛤 偎熱蒂 掘и棻(橾奩 �蛾蠵�)
function getUserCodiCount( $mem_id ) {
	global $mainconn;

	// 霤罹醞檣 ゎ陛
	$codi_cnt = 0;
	$now_dt = date("Y-m-d H:i:s", time());
	$sql = "select p_e_idx from tblProductEach where start_dt < '$now_dt' and end_dt > '$now_dt' ";
	$res = $mainconn->query($sql);
	
	$p_e_idxs = "";
	while ( $row = $mainconn->fetch($res) ) {
		$p_e_idxs .= $row['p_e_idx'].",";
	}
	if ( $p_e_idxs ) {
		$p_e_idxs = substr($p_e_idxs, 0, strlen($p_e_idxs)-1);
		$sql = "select count(*) from tblProductUpDown where mem_id = '$mem_id' and p_e_idx in ( $p_e_idxs ) ";
		$codi_cnt = $mainconn->count($sql);
	}

	return $codi_cnt;
}

// 唳ヶ熱滄 偎熱蒂 掘и棻(橾奩 �蛾蠵�)
function getUserGiftCount( $mem_id ) {
	global $mainconn;

	// 唳ヶ熱滄 偎熱(雖旎梱雖 渡繩�挫� 脹剪 瞪睡棻)
	$sql = "select count(*) from tblGiftTracking where user_mem_id = '$mem_id' ";
	return $mainconn->count($sql);
}

// 唳ヶ熱滄 偎熱(�挫徆�и剪) - 憧, 橾奩 �蛾蠵� 評塭 殖塭霞棻.
function getNotNotifyGiftCount( $kind, $mem_id ) {
	global $mainconn;

	if ( $kind == "U" ) {
		$sql = "select count(*) from tblGiftTracking where user_mem_id = '$id' and gt_reg_dt = status_reg_dt ";
	} else {
		$sql = "select count(*) from tblGiftTracking where shop_mem_id = '$id' and gt_status = 'A' ";
	}
	return $mainconn->count($sql);
}


// 渠ル憧曖 雖陪輿牖嬪, 瞪羹牖嬪蒂 掘и棻.
function getMainShopRank( $mem_id ) {
	global $mainconn;
	$arr_rank = array();

	// 渠ル憧曖 shop_idx 蒂 掘и棻.
	$sql = "select shop_idx from tblShop where mem_id='$mem_id' and shop_kind='I' ";
	$shop_idx = $mainconn->count($sql);

	$arr_week = getWeekDay( "last", time() );
	$sql = "select rs_rank, rs_total_rank from tblRankShop where shop_idx = $shop_idx and rs_start_dt = '".$arr_week[0]."' and rs_end_dt = '".$arr_week[1]."' ";
	$res = $mainconn->query($sql);
	$row = $mainconn->fetch($res);

	if ( $row ) {
		$last_rank = $row['rs_rank'];
		$total_rank = $row['rs_total_rank'];
	} else {
		$total_rank = $last_rank = 0;
	}

	array_push($arr_rank, $last_rank, $total_rank);
	return $arr_rank;
}

// 釭曖 議蓮蒂 掘и棻.
function getCash( $mem_id ) {
	global $mainconn;

	$sql = "select mem_cash from tblMember where mem_id = '$mem_id' ";
	return $mainconn->count($sql);
}

// 釭曖 薄熱,蛔晝,渡繩�挫窕� 掘и棻.
function getLottoInfo( $mem_id ) {
	global $mainconn;
	$arr = array();

	$sql = "select A.mem_grade,A.mem_score,B.lg_percent from tblMember A, tblLottoGrade B where A.mem_grade = B.lg_grade and A.mem_id = '$mem_id' ";
	$res = $mainconn->query($sql);
	$row = $mainconn->fetch($res);
	$my_score = $row['mem_score'];
	$my_grade = $row['mem_grade'];
	$my_percent = $row['lg_percent'];

	array_push($arr, $my_score, $my_grade, $my_percent);
	return $arr;
}

// ⑷營 濠褐曖 url擊 盪濰и棻.
$RURL = my64encode($_SERVER['REQUEST_URI']);
?>
