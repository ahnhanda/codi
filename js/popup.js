isIE=document.all;
isNN=!document.all&&document.getElementById;
isN4=document.layers;
isHot=false;

document.onmousedown=ddInit;
document.onmouseup=Function("ddEnabled=false");

function ddInit(e) {
	topDog=isIE ? "BODY" : "HTML";
	whichDog=isIE ? document.all.theLayer : document.getElementById("theLayer");
	hotDog=isIE ? event.srcElement : e.target;
	while (hotDog.id!="titleBar"&&hotDog.tagName!=topDog){
		hotDog=isIE ? hotDog.parentElement : hotDog.parentNode;
	}
	if (hotDog.id=="titleBar"){
		offsetx=isIE ? event.clientX : e.clientX;
		offsety=isIE ? event.clientY : e.clientY;
		nowX=parseInt(whichDog.style.left);
		nowY=parseInt(whichDog.style.top);
		ddEnabled=true;
		document.onmousemove=dd;
	}
}

function dd(e){
	if (!ddEnabled) return;
	whichDog.style.left=isIE ? nowX+event.clientX-offsetx : nowX+e.clientX-offsetx;
	whichDog.style.top=isIE ? nowY+event.clientY-offsety : nowY+e.clientY-offsety;
	return false;
}

function ddN4(whatDog){
	if (!isN4) return;
	N4=eval(whatDog);
	N4.captureEvents(Event.MOUSEDOWN|Event.MOUSEUP);
	N4.onmousedown=function(e){
		N4.captureEvents(Event.MOUSEMOVE);
		N4x=e.x;
		N4y=e.y;
	}
	N4.onmousemove=function(e){
		if (isHot){
			N4.moveBy(e.x-N4x,e.y-N4y);
			return false;
		}
	}
	N4.onmouseup=function(){
	N4.releaseEvents(Event.MOUSEMOVE);
	}
}

function hideMe(){
	if (isIE||isNN) whichDog.style.visibility="hidden";
	else if (isN4) document.theLayer.visibility="hide";
	//else if (isN4) eval("document.theLayer_"+idx).visibility="hide";
}

function showMe(){
	if (isIE||isNN) whichDog.style.visibility="visible";
	else if (isN4) document.theLayer.visibility="show";
}

function popup_setCookie( name, value, expiredays ){
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + '=' + escape( value ) + '; path=/; expires=' + todayDate.toGMTString() + ';'
	return;
}

function popup_getCookie( name ){
	var nameOfCookie = name + "=";
	var x = 0;
	while ( x <= document.cookie.length ){
		var y = (x+nameOfCookie.length);
		if ( document.cookie.substring( x, y ) == nameOfCookie ) {
			if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
				endOfCookie = document.cookie.length;
			return unescape( document.cookie.substring( y, endOfCookie ) );
		}
		x = document.cookie.indexOf( " ", x ) + 1;
		if ( x == 0 ) break;
	}
	return "";
}
