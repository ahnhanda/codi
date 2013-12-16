<? include "./include/_head.php"; ?>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>




<body onload="MM_preloadImages('img/tap_codi_ov_02.gif','img/tap_codi_ov_04.gif','img/codi_list_ov_01.gif','img/codi_list_ov_03.gif')">



<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" valign="top">
        <table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
			
			 <!-- 오늘의 추천코디 시작 //-->
			
			<? include "./include/today_codi.php" ?>
			
			 <!-- 오늘의 추천코디 끝 //-->
			</td>
          </tr>
        </table>
      
        <table width="100" height="10" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td></td>
          </tr>
        </table>
   
      <!-- 주간 베스트 샵 10위 시작 //-->
	  
	  <? include "./include/week_best.php" ?>
	  
	  
      <!-- 주간 베스트 샵 10위 끝 //-->
    </td>
    <td width="15"></td>
    <td valign="top">
        <table width="645" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="375"><img src="img/title_top103.gif" width="374" height="37"></td>
            <td >&nbsp;</td>
          </tr>
        </table>
        <table width="645" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td height="1" background="img/dot00.gif"></td>
          </tr>
        
        </table>  
        <table width="645" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="img/codi_list_ov_02.gif" width="215" height="50"></td>
            <td><a href="codi_list.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image57','','img/codi_list_ov_01.gif',1)"><img src="img/codi_list_01.gif" name="Image57" width="215" height="50" border="0" id="Image57" /></a><a href="#"></a></td>
            <td><a href="shop_list.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image58','','img/codi_list_ov_03.gif',1)"><img src="img/codi_list_03.gif" name="Image58" width="215" height="50" border="0" id="Image58" /></a><a href="#"></a></td>
          </tr>
        </table>
        <table width="100" height="10" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td></td>
          </tr>
        </table>
        <table id="Table_01" width="645" height="48" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="img/top10_codi_ov_01.gif" width="113" height="48"></td>
            <td><a href="#"><img src="img/top10_codi_02.gif" width="87" height="48" border="0"></a></td>
            <td><a href="#"><img src="img/top10_codi_03.gif" width="89" height="48" border="0"></a></td>
            <td><a href="#"><img src="img/top10_codi_04.gif" width="130" height="48" border="0"></a></td>
            <td><a href="#"><img src="img/top10_codi_05.gif" width="133" height="48" border="0"></a></td>
            <td><a href="#"><img src="img/top10_codi_06.gif" width="93" height="48" border="0"></a></td>
          </tr>
        </table>
        <table width="100" height="10" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td></td>
          </tr>
        </table>
      <table width="645" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="129"><img src="img/tap_codi_ov_01.gif" width="129" height="30"></td>
          <td width="130"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image55','','img/tap_codi_ov_02.gif',1)"><img src="img/tap_codi_02.gif" name="Image55" width="131" height="30" border="0" id="Image55" /></a></td>
          <td width="130"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image56','','img/tap_codi_ov_04.gif',1)"><img src="img/tap_codi_04.gif" name="Image56" width="131" height="30" border="0" id="Image56" /></a></td>
          <td align="right" background="img/tap_04.gif"><table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="52"><a href="#"><img src="img/btn_a01.gif" width="50" height="14" border="0"></a></td>
              <td width="52"><a href="#"><img src="img/btn_a03.gif" width="50" height="14" border="0"></a></td>
              <td><a href="#"><img src="img/btn_a02.gif" width="50" height="14" border="0"></a></td>
            </tr>
          </table>			  </td>
        </tr>
      </table>
      <table width="645" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1" rowspan="2" background="img/dot02.gif"></td>
          <td style="padding:13 13 13 13"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="175" align="center"><table width="160" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="img/title_ranking1.jpg" width="160" height="35" /></td>
                </tr>
                <tr>
                  <td height="6"></td>
                </tr>
                <tr>
                  <td><a href="#"><img src="img/sample_img_160x160.jpg" width="160" height="160" border="0" /></a></td>
                </tr>
                <tr>
                  <td height="6"></td>
                </tr>
                <tr>
                  <td class="evmem"><a href="#">☆야외 데이트☆ 에 딱 어울리는  스프링 커플 코디</a> </td>
                </tr>

              </table>



                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                    <td height="18" class="shopname"><img src="img/icon_shop.gif"  align="absmiddle" /> <b><a href="#">super T</a> </b><img src="img_seri/icon_ks_mini.gif" border="0" align=absmiddle> </td>
                  </tr>
                  <tr>
                    <td height="18" class="evfont"><span class="shopname"><img src="img/icon_score.gif"  align="absmiddle" /> <b>245 점 </b></span></td>
                  </tr>
                  <tr>
                    <td height="18"  class="evfont"><span class="shopname"><img src="img/icon_codi.gif"  align="absmiddle" /> <b><font color="#CC3300">39</font></b></span></td>
                  </tr>
                </table>





                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="9"></td>
                  </tr>
                </table>
                <table width="100%" height="50" border="0" cellpadding="0" cellspacing="1" bgcolor="#FF3366">
                  <tr>
                    <td align="center" bgcolor="FEB7B7"><font color="#000000" class="date">2008년 6월 20일 기준</font><br />
                        <b><font color="#CC0000">총 등록코디 : <font size="3">1,052</font> </font></b></td>
                  </tr>
                </table></td>
              <td width="10">&nbsp;</td>
              <td width="1" bgcolor="#CCCCCC"></td>
              <td width="15">&nbsp;</td>
              <td valign="middle"><table width="427" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="img/title_2_6.gif" width="427" height="25" /></td>
                </tr>
              </table>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="6" ></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0"></a></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td align="center"  class="evmem">
						
						
						
						
						<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="D9D9D9">
                          <tr>
                            <td width="20" rowspan="2" valign="top" bgcolor="#FFFFFF"  class="shopname"><img src="img_seri/icon_ks_mini.gif" border="0" align=absmiddle> 
							
						</td>
                            <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><span onClick="MM_showHideLayers('shopview22','','show')" style="cursor:hand;">슈퍼다음다이</span></b>
							
							
							
														
							
				
				<div id="shopview22"  style="position:relative; z-index:2; left:0px; top: -85px;visibility: hidden;" > 
<div STYLE="position: absolute; z-index: 1;">
 

<table width="100" border="0" cellpadding="0" cellspacing="0" >
  <tr>
  <td width="6" align="right"><img src="img/arr_orage.gif"></td>
    <td bgcolor="#FFFFFF">

<table width="100" border="0" cellpadding="1" cellspacing="1" bgcolor="#FF7533">
  <tr>
    <td bgcolor="#FFFFFF">
	
<table width="150" height="150" border="0" cellpadding="7" cellspacing="4" bgcolor="#FF9966">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="2" cellspacing="3" bgcolor="#FF9966">
      <tr>
        <td align="center" class=evgray style="PADDING-top: 4px;"><b><font color="#FFFFFF">전체순위 <font color="#000000">50</font> 위 </font></b></td>
      </tr>
    </table>
      <table width="100" height="8" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="90%" border="0" cellspacing="0" cellpadding="0" align=center>
        <tr>
          <td height="22" class=evmem><img src="img/icon_homepage.gif" width="16" height="12" align="absmiddle"> <a href="#" target="_blank">홈페이지 바로가기</a></td>
        </tr>
        <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
        <tr>
          <td height="22" class=evmem><img src="img/icon_allcodi.gif" width="17" height="15" align="absmiddle"> <a href="#">등록코디 전체보기</a></td>
        </tr>
		       <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
        <tr>
          <td height="22" class=evmem><img src="img/icon_memo_tran.gif" width="17" height="14" align="absmiddle"> <a href="memo_send02.php">쪽지보내기</a></td>
        </tr>
			       <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
      </table>
      <table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="bottom"><img src="img/btn_pop_close.gif" width="13" height="13" border=0  onClick="MM_showHideLayers('shopview22','','hide')" style="cursor:hand;"></td>
        </tr>
      </table></td>
  </tr>
</table>
</td>
  </tr>
</table>
</td>
  </tr>
</table>

</div></div>



</td>
                          </tr>
                          <tr>
                            <td align="right" bgcolor="#FFFFFF" class="evfont">245 점</td>
                          </tr>
                        </table>
						
						
						
						
						
		
						
						
						
						
						
						
						</td>
                      </tr>
				

                  </table></td>
                  <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="6" ></td>
                    </tr>
                    <tr>
                      <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                          <tr>
                            <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                          </tr>
                          <tr>
                            <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td height="20" align="center"  class="date"><span class="evmem"><a href="#"><img src="img/btn_shop.gif" border="0"  align="absmiddle"/></a></span></td>
                    </tr>
                  </table></td>
                  <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="6" ></td>
                    </tr>
                    <tr>
                      <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                          <tr>
                            <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                          </tr>
                          <tr>
                            <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td height="20" align="center"  class="date">&nbsp;</td>
                    </tr>
                  </table></td>
                  <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="6" ></td>
                    </tr>
                    <tr>
                      <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                          <tr>
                            <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                          </tr>
                          <tr>
                            <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td height="20" align="center"  class="date"><span class="evmem"><a href="#"><img src="img/btn_shop.gif" border="0"  align="absmiddle"/></a></span></td>
                    </tr>
                  </table></td>
                  <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="6" ></td>
                    </tr>
                    <tr>
                      <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                          <tr>
                            <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                          </tr>
                          <tr>
                            <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                    <tr>
                      <td height="20" align="center"  class="date">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
              </table>
                <table width="100" height="12" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td></td>
                  </tr>
                </table>
                <table width="427" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="img/title_7_10.gif" width="427" height="25" /></td>
                  </tr>
                </table>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="6" ></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                            <tr>
                              <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                            </tr>
                            <tr>
                              <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td height="20" align="center"  class="date"><span class="evmem"><a href="#"><img src="img/btn_shop.gif" border="0"  align="absmiddle"/></a></span></td>
                      </tr>
                    </table></td>
                    <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="6" ></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                            <tr>
                              <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                            </tr>
                            <tr>
                              <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td height="20" align="center"  class="date">&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="6" ></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                            <tr>
                              <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                            </tr>
                            <tr>
                              <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td height="20" align="center"  class="date">&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="85" align="center" valign="top"><table width="70" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="6" ></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="img/sample_img_70x70.jpg" width="70" height="70" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td align="center"  class="evmem"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="D9D9D9">
                            <tr>
                              <td align="right" bgcolor="#FFFFFF"  class="shopname"><b><a href="#">super T</a></b></td>
                            </tr>
                            <tr>
                              <td align="right" bgcolor="#FFFFFF" class="evfont">245 점 </td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="4"></td>
                      </tr>
                      <tr>
                        <td height="20" align="center"  class="date">&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="85" align="center" valign="top"><a href="#"><img src="img/btn_gotop_codi.gif" width="70" height="142" border="0" usemap="#btn_codi" /></a></td>
                  </tr>
                </table></td>
            </tr>
          </table>
          </td>
          <td width="1" rowspan="2" background="img/dot02.gif"></td>
        </tr>
        <tr>
          <td height="1" background="img/dot01.gif"></td>
        </tr>
      </table>
      <table width="100" height="10" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="645" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="645" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="6" bgcolor="FF5B5C"></td>
            </tr>
            <tr>
              <td height="27"><table width="645" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center"><img src="img/title10.gif" width="70" height="20"></td>
                    <td width="3" align="center"><img src="img/title_line.gif" width="3" height="9"></td>
                    <td width="100" align="center"><img src="img/title43.gif" width="70" height="20"></td>
                    <td width="3"><img src="img/title_line.gif" width="3" height="9"></td>
                    <td width="130" align="center"><img src="img/title11.gif" width="70" height="20"></td>
                    <td width="3"><img src="img/title_line.gif" width="3" height="9"></td>
                    <td width="70" align="center"><img src="img/title12.gif" width="70" height="20"></td>
                    <td width="3"><img src="img/title_line.gif" width="3" height="9"></td>
                    <td width="70" align="center"><img src="img/title08.gif" width="70" height="20"></td>
                    <td width="3" align="center"><img src="img/title_line.gif" width="3" height="9"></td>
                    <td width="70" align="center"><img src="img/title09.gif" width="70" height="20"></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="1" bgcolor="FF5B5C"></td>
            </tr>
          </table>
            <table width="100" height="10" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
            </table>
            <table width="645" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100"><table width="96" height="96" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                  <tr>
                    <td bgcolor="#3D3D3D"><a href="#"><img src="img/sample_img_95x95.jpg" width="95" height="95" border="0"></a></td>
                  </tr>
                </table></td>
                <td  style="padding-left:5;padding-right:8"class="shopname">
				
				









				
				<a  onClick="MM_showHideLayers('shopview','','show')" style="cursor:hand;">슈퍼티</a>
		
				



				
					<div id="shopview"  style="position:relative; z-index:2; left:20px; top: -85px;visibility: hidden;" > 
<div STYLE="position: absolute; z-index: 1;">
 

<table width="100" border="0" cellpadding="0" cellspacing="0" >
  <tr>
  <td width="6" align="right"><img src="img/arr_orage.gif"></td>
    <td bgcolor="#FFFFFF">

<table width="100" border="0" cellpadding="1" cellspacing="1" bgcolor="#FF7533">
  <tr>
    <td bgcolor="#FFFFFF">
	
<table width="150" height="150" border="0" cellpadding="7" cellspacing="4" bgcolor="#FF9966">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="2" cellspacing="3" bgcolor="#FF9966">
      <tr>
        <td align="center" class=evgray style="PADDING-top: 4px;"><b><font color="#FFFFFF">전체순위 <font color="#000000">50</font> 위 </font></b></td>
      </tr>
    </table>
      <table width="100" height="8" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="90%" border="0" cellspacing="0" cellpadding="0" align=center>
        <tr>
          <td height="22" class=evmem><img src="img/icon_homepage.gif" width="16" height="12" align="absmiddle"> <a href="#" target="_blank">홈페이지 바로가기</a></td>
        </tr>
        <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
        <tr>
          <td height="22" class=evmem><img src="img/icon_allcodi.gif" width="17" height="15" align="absmiddle"> <a href="#">등록코디 전체보기</a></td>
        </tr>
		       <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
        <tr>



          <td  height="22" class=evmem><img src="img/icon_memo_tran.gif" width="17" height="14" align="absmiddle"> <a href="javascript:;"  height="22" class=evmem onClick="MM_openBrWindow('pop_memo_send.php','','width=500,height=315')">쪽지보내기</a></td>




        </tr>
			       <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
      </table>
      <table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="bottom"><a  onClick="MM_showHideLayers('shopview','','hide')"  style="cursor:hand;"><img src="img/btn_pop_close.gif" width="13" height="13" border=0></a></td>
        </tr>
      </table></td>
  </tr>
</table></td>
  </tr>
</table></td>
  </tr>
</table>
</div></div></td>
                <td width="102" align="center">010-225-7878</td>
                
                <td width="133" align="center">홍길동</td>
                <td width="74" align="center" >20</td>
                <td width="72" align="center"><font color="FF5D5E">254</font></td>
                <td width="72" align="center"><font color="9E6ED1"><b>254</b></font></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="1" bgcolor="E9E9E9"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="645" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="100"><table width="96" height="96" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                    <tr>
                      <td bgcolor="#3D3D3D"><a href="#"><img src="img/sample_img_95x95.jpg" width="95" height="95" border="0" /></a></td>
                    </tr>
                </table></td>
                <td  style="padding-left:5;padding-right:8"class="shopname"><img src="img_seri/icon_ks_mini.gif" border="0" align=absmiddle> 
				
				
				
				
				
				
				
				
				<a  onClick="MM_showHideLayers('shopview2','','show')" style="cursor:hand;">슈퍼티</a>
				
				
				
				
				
									<div id="shopview2"  style="position:relative; z-index:2; left:0px; top: -85px;visibility: hidden;" > 
<div STYLE="position: absolute; z-index: 1;">
 

<table width="100" border="0" cellpadding="0" cellspacing="0" >
  <tr>
  <td width="6" align="right"><img src="img/arr_orage.gif"></td>
    <td bgcolor="#FFFFFF">

<table width="100" border="0" cellpadding="1" cellspacing="1" bgcolor="#FF7533">
  <tr>
    <td bgcolor="#FFFFFF">
	
<table width="150" height="150" border="0" cellpadding="7" cellspacing="4" bgcolor="#FF9966">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="2" cellspacing="3" bgcolor="#FF9966">
      <tr>
        <td align="center" class=evgray style="PADDING-top: 4px;"><b><font color="#FFFFFF">전체순위 <font color="#000000">50</font> 위 </font></b></td>
      </tr>
    </table>
      <table width="100" height="8" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="90%" border="0" cellspacing="0" cellpadding="0" align=center>
        <tr>
          <td height="22" class=evmem><img src="img/icon_homepage.gif" width="16" height="12" align="absmiddle"> <a href="#" target="_blank">홈페이지 바로가기</a></td>
        </tr>
        <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
        <tr>
          <td height="22" class=evmem><img src="img/icon_allcodi.gif" width="17" height="15" align="absmiddle"> <a href="#">등록코디 전체보기</a></td>
        </tr>
		       <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
        <tr>
         <td  height="22" class=evmem><img src="img/icon_memo_tran.gif" width="17" height="14" align="absmiddle"> <a href="javascript:;"  height="22" class=evmem onClick="MM_openBrWindow('pop_memo_send.php','','width=500,height=315')">쪽지보내기</a></td>
        </tr>
			       <tr>
          <td height="1" background="img/dot_garo_max.gif"></td>
        </tr>
      </table>
      <table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="bottom"><img src="img/btn_pop_close.gif" width="13" height="13" border=0 onClick="MM_showHideLayers('shopview2','','hide')"  style="cursor:hand;"></td>
        </tr>
      </table></td>
  </tr>
</table></td>
  </tr>
</table></td>
  </tr>
</table>
</div></div>				</td>
                <td  width="102"  align="center" >02-565-5555</td>
                <td width="133" align="center">홍길동</td>
                <td width="74" align="center" >20</td>
                <td width="72" align="center"><font color="FF5D5E">254</font></td>
                <td width="72" align="center"><font color="9E6ED1"><b>254</b></font></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="6" bgcolor="FF5B5C"></td>
              </tr>
            
          </table>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="100%" height="45" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center"><a href="#"><img src="img/btn_first_go2.gif" width="20" height="16" border="0" align="absmiddle"></a><a href="#"><img src="img/btn_prev6.gif" width="44" height="16" border="0" align="absmiddle"></a>&nbsp;<a href="#"> 1</a> | <a href="#"><b><font color="#333333">2</font></b></a> | <a href="#">3</a> | <a href="#">4</a> | <a href="#">5</a> | <a href="#">6</a> | <a href="#">7</a> | <a href="#">8</a> | <a href="#">9</a> | <a href="#">10</a>&nbsp; <a href="#"><img src="img/btn_next6.gif" width="44" height="16" border="0" align="absbottom"></a><a href="#"><img src="img/btn_end_go2.gif" width="20" height="16" border="0" align="absmiddle"></a></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<? include "./include/_foot.php"; ?>
<map name="btn_codi" id="btn_codi">
<area shape="rect" coords="13,33,62,49" href="#" alt="인증샵이란?" onclick="MM_openBrWindow('pop_shop.htm','','width=300,height=131')" />
</map>