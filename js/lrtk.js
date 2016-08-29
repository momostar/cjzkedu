// 懒人图库 搜集整理 www.lanrentuku.com

var flag=1;
$('#rightArrow').click(function(){
	if(flag==1){
		$("#floatDivBoxs").animate({right: '-150px'},300);
		$(this).animate({right: ''},300);
		$(this).css('background-position','-36px 0');
		flag=0;
	}else{
		$("#floatDivBoxs").animate({right: '0'},300);
		$(this).animate({right: '150px'},300);
		$(this).css('background-position','0px 0');
		flag=1;
	}
});