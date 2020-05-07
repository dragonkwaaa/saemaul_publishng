// :: 셀렉트박스 스크립트(공용)
$(document).on('click', '.sbox a', function(){
	$(this).siblings('ul').slideToggle();
})
// :: 셀렉트박스 내용 선택시, 셀렉트박스 리스트 닫기 스크립트(공용)
$(document).on('click', '.sbox ul li', function(){
	$(this).parent('ul').slideToggle();
})	


//  :: 페이징 스크립트
$(document).on('click', '.page_group a',function(){
	let pageGroup	=	$(this).parent('li.pageNum').siblings('li');
	$(pageGroup).removeClass('on');
	$(this).parent('li.pageNum').addClass('on');
});