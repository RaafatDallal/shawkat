function fixLayout(){
var width = $(window).width();
if(width >=975){
	$('div#content').css('margin-top','-150');
}else{
	$('div#content').css('margin-top','0');
}
}

