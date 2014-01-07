<?
/*******************************************************
 * author : Chan Hwang (gogisnim@gmail.com)
 * file   : /coditop/board/bad_shop_view.php
 * date   : 2009.01.23
 * desc   : 불량샵 상세보기 (전체 카테고리)
 *******************************************************/
session_start();
require_once "../inc/common.inc.php";

$bad_idx = trim($_REQUEST['bad_idx']);

if ( !$bad_idx ) {
	echo "<script>alert('잘못된 접근입니다.');history.go(-1);</script>";
	exit;
}

$mainconn->open();

$sql = "select A.bad_title, A.bad_content, A.bad_file, A.bad_view, A.bad_reg_dt, B.mem_id, B.mem_name, C.shop_idx, C.shop_name from tblBadShop A, tblMember B, tblShop C where A.mem_id = B.mem_id and A.shop_idx = C.shop_idx and A.bad_idx = $bad_idx ";
$res = $mainconn->query($sql);
$row = $mainconn->fetch($res);

$mem_id			= trim($row['mem_id']);
$mem_name		= trim($row['mem_name']);
$bad_title		= trim($row['bad_title']);
$bad_content	= trim($row['bad_content']);
$bad_file		= trim($row['bad_file']);
$bad_view		= trim($row['bad_view']);
$bad_reg_dt		= trim($row['bad_reg_dt']);
$shop_idx		= trim($row['shop_idx']);
$shop_name		= trim($row['shop_name']);

$bad_title		= strip_str($bad_title,"V");
$bad_content	= strip_str($bad_content,"V");
$bad_reg_dt		= str_replace("-",".",substr($bad_reg_dt,0,10));

// 최근 1시간 이내 보지 않았으면 조회수를 증가시킨다.(ip+categ+idx)
if ( !$_COOKIE["cookie_B_".$bad_idx] ) {
	$sql = "update tblBadShop set bad_view = bad_view + 1 where bad_idx = $bad_idx ";
	$res = $mainconn->query($sql);
	if ( $res ) {	// 쿠키를 굽는다.
		setcookie("cookie_B_".$bad_idx, "Y", time()+3600, "/", "coditop10.com");
	}
}

$mainconn->close();

$view_url = "/common/ajax_comment.php?p_idx=$bad_idx";
$write_url = "/common/ajax_comment_ok.php";
$rurl = my64encode($_SERVER['REQUEST_URI']."#reply_anc");
?>

<? require_once "../include/_head.php"; ?>


<iframe name="__blank__" width="0" height="0"></iframe>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" valign="top">
        <table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
			
			 <!-- 게시판 메뉴 시작 //-->
			
			<? include "../include/left_board.php" ?>
			
			 <!-- 게시판 메뉴 끝 //-->
			</td>
          </tr>
        </table>
       
          </td>
    <td width="15"></td>
    <td valign="top">
	<table width="645" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19"><img src="/img/bar01.gif" width="19" height="37" /></td>
        <td background="/img/bar03.gif"><b><font color="FFFC11">불량샵 신고 :</font></b> <font color="#FFFFFF">불량샵을 신고해 주세요. 해당샵의 책임사항이 확인되는 즉시 조치를 취하겠습니다.</font> </td>
        <td width="19"><img src="/img/bar02.gif" width="19" height="37" /></td>
      </tr>
    </table>
      <table width="100" height="6" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="645" border="0" cellspacing="0" cellpadding="7">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="26"><img src="/img/icon_list.gif"  align="absmiddle" /> <font color="#DD2457"><?=$bad_title?></font></td>
              <td width="160" align="right">작성자 : <b><?=$mem_name?></b></td>
            </tr>
            <tr>
              <td height="1" colspan="2" background="/img/dot00.gif"></td>
            </tr>
            <tr>
              <td height="28" colspan="2" style="padding-top:3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100" style="padding-left:16" class="date"><?=$bad_reg_dt?> </td>
                    <td align='right'>조회수 : <?=$bad_view?> </td>
                  </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="645" border="0" cellpadding="15" cellspacing="1" bgcolor="#E1E1E1">
        <tr>
          <td bgcolor="#FFFFFF">

				<?
				if ( $bad_file ) {
					$arr_file = explode(";", $bad_file);
					foreach ( $arr_file as $k => $v ) {
						if ( trim($v) == "" ) continue;
						$t_bad_file = trim($v);
						$t_bad_file = $UP_URL."/attach/".$t_bad_file;
						$file_disp .= "<a href='$t_bad_file' rel='lightbox'><img id='big_pic_$k' src='$t_bad_file' border='0'></a>&nbsp;<br>";
					}
					echo $file_disp;
				}
				?>
				
				<br>

				<?=$bad_content?>


		  </td>
        </tr>
      </table>

      <table width="100" height="3" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>

		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tr>
			  <td height='24' align='right' valign='bottom'>
				<a href='#' onClick="go_bad_shop_write('','')"><img src='/img/btn_write.gif' width='60' height='20' border='0' /></a>
				<? if ( $_SESSION['mem_id'] == $mem_id ) { ?>
				<a href='#' onClick="go_bad_shop_write('E','<?=$bad_idx?>')"><img src='/img/btn_modify03.gif' width='60' height='20' border='0' /></a>
				<a href='#' onClick="go_bad_shop_del()"><img src='/img/btn_delete.gif' width='60' height='20' border='0' /></a>
				<? } ?>
			  </td>
			</tr>
		</table>

      <table width="100" height="3" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>

	  
      <table width="100" height="12" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>



<!-- 댓글 영역 시작 -->
	  <a name="reply_anc"></a>
	  <div id="BoardCommentArea"></div>
<!-- 댓글 영역 끝 -->


      <table width="100" height="35" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>

	  

<!-- 하단 게시판 시작 -->
	  <a name="tail_board_anc"></a>
	  <div id="TailBoardArea"></div>
<!-- 하단 게시판 끝 -->
	  



	  </td>
  </tr>
</table>


<form id="board_frm" name="board_frm" method="post">
<input type="hidden" id="bad_idx" name="bad_idx" value="<?=$bad_idx?>" />
<input type="hidden" id="mode" name="mode" value="" />
</form>

<script language="javascript">
// lightbox 로딩
initLightbox();

// 이미지 크기에 맞게 로딩
// 페이지 로딩되고 1초후에 리사이즈 된다.
window.setTimeout("img_resize(600)",500);

// 댓글
loadBoardComment('B','<?=$bad_idx?>','<?=$view_url?>','1','<?=$write_url?>','<?=$_SESSION[mem_id]?>','<?=$rurl?>');

<?
/*
loadTailBoard(tkind,tkey,tkwd,tpage,ttkind)
tkind : "U"->UCC, "N"->Notice, "P"->Pr, "B"->Bad
tkey : 검색구분자("M"->회원이름, "T"->제목, "C"->내용, "TC"->제목+내용
tkwd : 검색어
tpage : 페이지, 위 댓글 페이지와 구분하기 위해 page가 아닌 tpage
ttkind : UCC일때 ""->전체, "A"->코디평가, "B"->코디추천, "C"->코디의뢰, UCC가 아닐때는 그냥 공백
*/
?>
// 하단 게시판
loadTailBoard('B','','','1','');
</script>

<? include "../include/_foot.php"; ?>