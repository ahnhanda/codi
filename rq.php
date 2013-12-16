<?
require_once "/coditop/inc/common.inc.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<TITLE> New Document </TITLE>
<link rel = StyleSheet HREF='/css/style.css' type='text/css' title='thehigh CSS'>
<SCRIPT LANGUAGE="JavaScript" SRC="/js/ajax.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="/js/common.js"></SCRIPT>
</head>
<body>

<script>
rq = createXMLHttpRequest();
rq.onreadystatechange = rCallBack;
rq.open("GET", "/common/ajax_product_comment.php", true);
rq.send("");


// callback
function rCallBack() {
	//alert("test:"+req_cc.readyState);
	if (rq.readyState == 4) {
		if (rq.status == 200) {
			alert("result:"+rq.responseText);
		} else {
			alert("codi comment:getProductCommentCallBack \n" + rq.statusText);
		}
	}
}
</script>


</BODY>
</HTML>