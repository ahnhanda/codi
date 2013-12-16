<? include "./include/_head.php"; ?>



<script LANGUAGE="JavaScript">
<!--
/*FAQ*/
var old=''; 
function qClick(name) 
{ 
        answer=eval("document.all.a"+name+".style"); 
        if(old!=answer)
        { 
                if(old!='') 
                { 
                        old.display='none'; 
                }
                answer.display='block'; 
                old=answer;
        } 
        else 
        { 
                answer.display='none'; 
                old=''; 
        }
}
//-->
</script>



<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" valign="top">
        <table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
			
			 <!-- 마이페이지 시작 //-->
			
			<? include "./include/left_info.php" ?>
			
			 <!-- 마이페이지 시작 //-->
			</td>
          </tr>
        </table>
      
        </td>
    <td width="15"></td>
    <td valign="top"><table width="645" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19"><img src="img/bar01.gif" width="19" height="37" /></td>
        <td background="img/bar03.gif"><b><font color="FFFC11">FAQ :</font></b> <font color="#FFFFFF">코디탑텐의 FAQ입니다.</font> </td>
        <td width="19"><img src="img/bar02.gif" width="19" height="37" /></td>
      </tr>
    </table>
      <table width="100" height="6" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="645" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" colspan="2" bgcolor="FF5B5C" ></td>
        </tr>
        <tr>
          <td width="50" height="28" align="center" bgcolor="FFDADA"><font color="CC0000">번호</font></td>
          <td align="center" bgcolor="FFDADA"><font color="CC0000">질문내용</font></td>
        </tr>
        <tr>
          <td height="1" colspan="2" bgcolor="FF5B5C" ></td>
        </tr>
      </table>
      <table width="645" border="0" cellpadding="0" cellspacing="0">
       
        <tr onClick="qClick(1)">
          <td width="50" height="30" align="center">5</td>
          <td width="595"><img src="img/icon_q.gif"  align="absmiddle"> <a href="#">여기는 질문이 보이는 곳입니다.여기는 질문이 보이는 곳입니다. </a></td>
        </tr>
		
		<tr id="a1" style="display:none;">
          <td height="28" colspan="2"  class="faqATp"><table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style='border:1 dotted #BFBFBF;'>
            <tr>
              <td bgcolor="F9F9F9" class="intext" style="padding:10 10 10 10"><img src="img/icon_a.gif"  align="absmiddle"> 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. </td>
            </tr>
          </table>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="1" colspan="2" bgcolor="#CCCCCC" ></td>
        </tr>
		<tr onClick="qClick(2)">
          <td height="30" align="center">4</td>
          <td><img src="img/icon_q.gif"  align="absmiddle"> <a href="#">여기는 질문이 보이는 곳입니다.여기는 질문이 보이는 곳입니다. </a></td>
        </tr>
		
		<tr id="a2" style="display:none;">
          <td height="28" colspan="2"  class="faqATp"><table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style='border:1 dotted #BFBFBF;'>
            <tr>
              <td bgcolor="F9F9F9" class="intext" style="padding:10 10 10 10"><img src="img/icon_a.gif"  align="absmiddle"> 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. </td>
            </tr>
          </table>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="1" colspan="2" bgcolor="#CCCCCC" ></td>
        </tr>
		<tr onClick="qClick(3)">
          <td height="30" align="center">3</td>
          <td><img src="img/icon_q.gif"  align="absmiddle"> <a href="#">여기는 질문이 보이는 곳입니다.여기는 질문이 보이는 곳입니다. </a></td>
        </tr>
		
		<tr id="a3" style="display:none;">
          <td height="28" colspan="2"  class="faqATp"><table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style='border:1 dotted #BFBFBF;'>
            <tr>
              <td bgcolor="F9F9F9" class="intext" style="padding:10 10 10 10"><img src="img/icon_a.gif"  align="absmiddle"> 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. </td>
            </tr>
          </table>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="1" colspan="2" bgcolor="#CCCCCC" ></td>
        </tr>
		<tr onClick="qClick(4)">
          <td height="30" align="center">2</td>
          <td><img src="img/icon_q.gif"  align="absmiddle"> <a href="#">여기는 질문이 보이는 곳입니다.여기는 질문이 보이는 곳입니다. </a></td>
        </tr>
		
		<tr id="a4" style="display:none;">
          <td height="28" colspan="2"  class="faqATp"><table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style='border:1 dotted #BFBFBF;'>
            <tr>
              <td bgcolor="F9F9F9" class="intext" style="padding:10 10 10 10"><img src="img/icon_a.gif"  align="absmiddle"> 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. </td>
            </tr>
          </table>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="1" colspan="2" bgcolor="#CCCCCC" ></td>
        </tr>
		<tr onClick="qClick(5)">
          <td height="30" align="center">1</td>
          <td><img src="img/icon_q.gif"  align="absmiddle"> <a href="#">여기는 질문이 보이는 곳입니다.여기는 질문이 보이는 곳입니다. </a></td>
        </tr>
		
		<tr id="a5" style="display:none;">
          <td height="28" colspan="2"  class="faqATp"><table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style='border:1 dotted #BFBFBF;'>
            <tr>
              <td bgcolor="F9F9F9" class="intext" style="padding:10 10 10 10"><img src="img/icon_a.gif"  align="absmiddle"> 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. 질문에 대한 답변이 모두 보이게 됩니다. </td>
            </tr>
          </table>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="6" colspan="2" bgcolor="FF5B5C" ></td>
        </tr>
      </table>
      <table width="645" height="45" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><a href="#"><img src="img/btn_first_go2.gif" width="20" height="16" border="0" align="absmiddle" /></a><a href="#"><img src="img/btn_prev6.gif" width="44" height="16" border="0" align="absmiddle" /></a>&nbsp;<a href="#"> 1</a> | <a href="#"><b><font color="#333333">2</font></b></a> | <a href="#">3</a> | <a href="#">4</a> | <a href="#">5</a> | <a href="#">6</a> | <a href="#">7</a> | <a href="#">8</a> | <a href="#">9</a> | <a href="#">10</a>&nbsp; <a href="#"><img src="img/btn_next6.gif" width="44" height="16" border="0" align="absbottom" /></a><a href="#"><img src="img/btn_end_go2.gif" width="20" height="16" border="0" align="absmiddle" /></a></td>
        </tr>
      </table></td>
  </tr>
</table>
<? include "./include/_foot.php"; ?>