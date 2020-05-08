// :: 셀렉트박스 스크립트(공용)
$(document).on('click', '.sbox a', function(){
	$('.sbox a').not($(this)).siblings('ul').slideUp(200);
	$(this).siblings('ul').slideToggle();
})
// :: 셀렉트박스 내용 선택시, 셀렉트박스 리스트 닫기 스크립트(공용)
$(document).on('click', '.sbox ul li', function(){
	$(this).parent('ul').slideUp();
})