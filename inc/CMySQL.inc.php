<?
/*收[ Щ煎斜極  薑爾 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 Щ煎斜極 : CMySQL (MySQL class) Ver 1.05                                 早
早 濛 撩 濠 : 檜惜繹 (評衝檜)                                               早
早 �倣狨抶� : CMySQL.inc.php                                                早
早 撲    貲 : MySQL 贗楚蝶                                                  早
早 餌辨樹橫 : PHP                                                           早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旭

旨收[ 滲唳檜溘 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
早 濛機濠 濛  機  橾 滲唳頂辨                                               早
早 ------ ---------- ------------------------------------------------------ 早
早 檜惜繹 2004.05.21 譆蟾濛撩                                               早
早 檜惜繹 2007.02.09 輿戮濛機                                               早
曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/



function GetMicrotime($old, $new) 
{
	// 輿橫霞 僥濠翮擊 釭揹 (sec, msec戲煎 釭援橫颶) 
	$old = explode(" ", $old); 
	$new = explode(" ", $new); 

	$time[msec] = $new[0] - $old[0]; 
	$time[sec]  = $new[1] - $old[1]; 

	if($time[msec] < 0)
	{
		$time[msec] = 1.0 + $time[msec]; 
		$time[sec]--; 
	}

	$time = sprintf("%.2f", $time[sec] + $time[msec]); 

	return $time; 
}



class CMySQL
{
	var $host, $id, $password, $db, $port;
	var $oldhost, $olddb, $conn;
	var $mbuff;

	function CMySQL()
	{
		$this->oldhost = "";
		$this->id      = "";
		$this->pass    = "";
		$this->db      = "";

		$this->mbuff   = array();
		$this->conn = null;
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::close()                                      早
	早 撲    貲 : MySQL餌辨 謙猿 (模鰍殘晦)                                     早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function close()
	{
		if($this->conn == null)
			return;

		$this->oldhost = "";
		$this->id      = "";
		$this->pass    = "";
		$this->db      = "";

		$this->port    = 3306;
		mysql_close($this->conn);
		unset($this->conn);

		$this->conn = null;
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::set()                                        早
	早 撲    貲 : MySQL餌辨擊 嬪и 撲薑 (褒薯 翱唸擎 ж雖 彊堅 遽綠)            早
	早 殮 溘 高 : $host     = 憮幗輿模 (localhost, www.test.com, 嬴檜Я)        早
	早            $id       = 嬴檜蛤                                            早
	早            $password = 綠塵廓��                                          早
	早            $db       = 蕾樓婁 翕衛縑 餌辨й 等檜顫漆檜蝶貲               早
	早            $port     = んお廓��                                          早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function set($host, $id, $password, $db, $port = 3306)
	{
		if($host == $this->oldhost && $db == $this->olddb)
			return;
	
		$this->close();
	
		$this->host = $host;
		$this->id   = $id;
		$this->pass = $password;
		$this->db   = $db;
		$this->port = $port;

		$this->oldhost = $host;
		$this->olddb   = $db;
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::open()                                       早
	早 撲    貲 : 等檜顫漆檜蝶 憮幗縑 翱唸                                      早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function open()
	{
		if($this->conn != null)
			return;
//print __FILE__ . __LINE__ . "host:" . $this->host . "<br>"; 
//print __FILE__ . __LINE__ . "id:" . $this->id . "<br>"; 
//print __FILE__ . __LINE__ . "pass:" . $this->pass . "<br>"; 
//print __FILE__ . __LINE__ . "db:" . $this->db . "<br>"; 
//TODO TEMPCODE
if ($_SERVER['HTTP_HOST'] == "localhost")
{
	$this->id = "root";
	$this->pass = "";
	$this->db = "master";
}
else /* hostinger http://codi.esy.es */
{
	$this->host = "mysql.hostinger.kr";
	$this->id = "u929226436_codi";
	$this->pass = "codi1234!";
	$this->db = "u929226436_codi";
}
/*
print __FILE__ . __LINE__ . "_SERVER['HTTP_HOST']:" . $_SERVER['HTTP_HOST'] . "<br>"; 
print __FILE__ . __LINE__ . "host:" . $this->host . "<br>"; 
print __FILE__ . __LINE__ . "id:" . $this->id . "<br>"; 
print __FILE__ . __LINE__ . "pass:" . $this->pass . "<br>"; 
print __FILE__ . __LINE__ . "db:" . $this->db . "<br>"; 
*/

		$this->conn = mysql_connect($this->host, $this->id, $this->pass) or die("exit");
		mysql_select_db($this->db, $this->conn);

//print __FILE__ . __LINE__ . "<br>";  exit;
//		register_shutdown_function($this->close);
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::query()                                      早
	早 撲    貲 : 憮幗縑 翱唸諫猿�� 蘭葬 瞪歎                                   早
	早 殮 溘 高 : $str      = 蘭葬 僥濠翮                                       早
	早 葬 欐 高 : 唸婁 等檜顫 (fetchRow, fetchл熱蒂 檜辨ж罹 餌辨)             早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	// 褒薯 蘭葬蒂 陳萼棻
	function query($str)
	{
		$ret = null;

		if($this->conn == null)
			return null;

		if(strlen($str) < 1)
			return null;

		$start = microtime();
		$ret = mysql_query($str, $this->conn);
		$ftime = GetMicrotime($start, microtime());

		if($ftime >= 1)
		{
			$fp = fopen(MYSQL_LOG_DIR."/query_delay/".date("Y-m-d").".log", "a");
			fputs($fp, "=== [".date("Y/m/d H:i:s")."] =========================== [熱ч衛除: ".$ftime."]======================\n");
			fputs($fp, $str."\n");
			fputs($fp, "===========================================================================================\n\n");
			fclose($fp);

			chmod(MYSQL_LOG_DIR."/query_delay/".date("Y-m-d").".log", 0777);
		}

		if ( mysql_errno() || mysql_error() )
		{
			echo mysql_errno() . " : " . mysql_error();

			$fp = fopen(MYSQL_LOG_DIR."/query_error/".date("Y-m-d").".log", "a");
			fputs($fp, "=== [".date("Y/m/d H:i:s")."] =================================================================\n");
			fputs($fp, "filename: $_SERVER[REQUEST_URI]\n");
			fputs($fp, $str."\n");
			fputs($fp, "------------------------------------------------------------------------------------------\n");
			fputs($fp, mysql_errno()." : ".mysql_error()."\n");
			fputs($fp, "===========================================================================================\n\n");
			fclose($fp);

			chmod(MYSQL_LOG_DIR."/query_error/".date("Y-m-d").".log", 0777);
		}

		return $ret;
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::fetchRow()                                   早
	早 撲    貲 : query煎 嫡嬴螞 等檜顫蒂 陛奢ж罹 寡翮縑 厥晦                  早
	早            $res = query("SELECT idx, name, jumin FROM member_info");     早
	早            while(($row = fetchRow($res)))                                早
	早            {                                                             早
	早                echo $row[0]."/".$row[1];  // $row["name"] (x)            早
	早            }                                                             早
	早                                                                          早
	早            freeResult($res) // 詭賅葬 奩�� (奩萄衛 賅舒 餌辨�醴� ��轎)   早
	早                                                                          早
	早 殮 溘 高 : $res  = 蘭葬 僥濠翮                                           早
	早 葬 欐 高 : 寡翮 等檜顫 (餌辨衛 僥濠翮擎 餌辨ж雖 跤л)                   早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function fetchRow($res)
	{
		if($res == null)
			return null;

		return mysql_fetch_row($res);
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::fetch()                                      早
	早 撲    貲 : query煎 嫡嬴螞 等檜顫蒂 陛奢ж罹 寡翮縑 厥晦                  早
	早            $res = query("SELECT idx, name, jumin FROM member_info");     早
	早            while(($row = fetchRow($res)))                                早
	早            {                                                             早
	早                echo $row[0]."/".$row["name"];  // $row["name"] (o)       早
	早            }                                                             早
	早                                                                          早
	早            freeResult($res) // 詭賅葬 奩�� (奩萄衛 賅舒 餌辨�醴� ��轎)   早
	早 殮 溘 高 : $res  = 蘭葬 僥濠翮                                           早
	早 葬 欐 高 : 寡翮 等檜顫 (僥濠翮 餌辨 陛棟)                                早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function fetch($res)
	{
		if($res == null)
			return null;

		return 	mysql_fetch_assoc($res);
	}



	function rand($start, $end)
	{
		$end = ($end-$start+1);
		return "rand()*".$end."%".$end."+".$start;
	}



	function addslashes($str)
	{
		return ereg_replace("('|\\\)", "\\\\1", $str);
	}



	function seek($res, $pos)
	{
		if($res == null)
			return null;

		if($this->numRows($res) < 1)
			return null;

		if($pos >= $this->numRows($res))
			$pos = $this->numRows($res) - 1;

		return mysql_data_seek($res, $pos);
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::count()                                      早
	早 撲    貲 : 陛螳螢 в萄陛 ж釭檜貊 璋濠煎脹 唳辦橾陽 餌辨                 早
	早 殮 溘 高 : $str      = 蘭葬 僥濠翮                                       早
	早 葬 欐 高 : 唸婁 等檜顫                                                   早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function count($str)
	{
		$row = $this->fetchRow($this->query($str));
		if($row == null)
			return 0;

		return $row[0];
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::freeResult()                                 早
	早 撲    貲 : result縑 渠и 詭賅葬(memory)縑 氈朝 頂辨擊 賅舒 薯剪и棻.     早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function freeResult($res)
	{
		if($res == null)
			return;

		mysql_free_result($res);
	}
	



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::numRows()                                    早
	早 撲    貲 : 唸婁煎睡攪 翮 偃熱蒂 奩��                                     早
	早 葬 欐 高 : 翮 偃熱                                                       早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function numRows($res)
	{
		if($res == null)
			return 0;

		return mysql_num_rows($res);
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::affectedRows()                               早
	早 撲    貲 : 譆斬 褒ч脹 INSERT, UPDATE, DELETE 韓曖煎 籀葬脹 ч曖 偃熱奩�祕�
	早            葆雖虞 韓曖陛 WHERE 瞰檜 橈朝 DELETE 韓曖塭賊,                早
	早            纔檜綰曖 賅萇 溯囀萄陛 餉薯腎渦塭紫 檜 л熱朝 0高擊 給溥遽棻. 早
	早            檜 л熱朝 SELECT 僥縑朝 翕濛ж雖 彊戲貊, 溯囀萄陛 熱薑腎朝    早
	早            唳辦縑虜 翕濛и棻.                                            早
	早            SELECT 掘僥戲煎睡攪 給溥嫡擎 還曖 偃熱蒂 橢戲溥賊,            早
	早            numRows()蒂 噙賊 脹棻.                                        早
	早 葬 欐 高 : 滲唳脹 溯囀曖 熱                                              早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function affectedRows()
	{
		if($this->conn == null)
			return 0;

		return mysql_affected_rows($this->conn);
	}



	/*收[ л熱撲貲 ]收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收旬
	早 л 熱 貲 : function CMySQL::fetch()                                      早
	早 撲    貲 : 譆斬 INSERT 濛機戲煎睡攪 儅撩脹 identifier 高擊 奩��          早
	早 葬 欐 高 : identifier 高                                                 早
	曲收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收收*/

	function lastInsertID()
	{
		return $this->count("SELECT LAST_INSERT_ID()");
	}


	function errstr()
	{
		if ( mysql_error() || mysql_error() )
		{
			return mysql_errno() . " : " . mysql_error();
		}
		else
		{
			return 0;
		}
	}



	function mclear()
	{
		unset($this->mbuff);
		$this->mbuff = array();
	}


	function mpush($str)
	{
		if(strlen($str) < 1)
			return;

		array_push($this->mbuff, $str);
	}

	function mquery()
	{
		if(count($this->mbuff) < 1)
			return;

		for($i=0; $i<count($this->mbuff); $i++)
		{
	//		$str = join($this->mbuff, ";");
			$this->query($this->mbuff[$i]);
		}

		$this->mclear();
	}
}

?>