


<script language='javascript'>
// 타이머 설정
var timer = 0;

// 전체 레이어갯수를 저장
var detail_cnt = parseInt('0');

// 중지된 시점의 현재 페이지
var n_p = 1;


function main_codi_page_view(t, p) {
	if ( p < 1 || p > t ) return;
	for ( var i=1; i<=t; i++ ) {
		obj = document.getElementById('main_codi_page_'+i);
		obj.style.display = 'none';
	}

	document.getElementById('main_codi_page_'+p).style.display = 'block';

	// next
	if ( p == t ) {
		n_p = 1;
	} else {
		n_p = p + 1;
	}

	timer = setTimeout('main_codi_page_view('+t+','+n_p+')', 1000*5);
}

function clear_chk() {
	cnt = 0;
	for ( j=1; j<=detail_cnt; j++ ) {
		d_obj = document.getElementById('main_codi_detail_'+j);
		if ( d_obj.style.visibility == 'hidden' ) {
			cnt++;
		}
	}
	if ( cnt == detail_cnt ) {
		if ( timer == 0 ) {
			main_codi_page_view(0,n_p);
		}
	} else {
		if ( timer ) {
			clearTimeout(timer);
			timer = 0;
		}
	}
	setTimeout('clear_chk()',1000*1);
}

main_codi_page_view(0,1);
clear_chk();
</script>
