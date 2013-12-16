이미지를 추가해 보자 !!!
<p>

<form id="frm" name="frm" action='upproc.php' method="post" enctype="multipart/form-data">

<!--<input type=text name=photo size="50" maxlength="50">-->
<span style="overflow:hidden; width:106; height:37; background-image:url(http://www.supert.co.kr/banti/img/order/img_btn01.gif);">
<input  type='file' name=attachedfile style="width:0;height:37;filter:alpha(opacity=0);" >
</span>

<p>

<input type="file" name="real">

<p>
<a href="javascript:S();">submit</a>

</form>

<script>
function S() {
	var f = document.frm;

	f.submit();
}
</script>
