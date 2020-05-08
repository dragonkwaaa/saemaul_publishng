<div class="topMenuSection">
	<a href="/saemaul/app/" class="backBtn <?=($backShowCheck == 'main' ? 'invisible' : '')?>"></a>  <!-- :: 페이지가 main 계열일 때는 사라지게 함. -->
	<span class="titleText"><?=$titleName?></span>		<!-- :: 각 페이지의 고유 타이틀 문구가 여기에 표시됨. -->
    <a href="javascript:slidePop()" class="hamBtn <?=($hamShowCheck == 'show' ? '' : 'invisible')?>"></a>  <!-- :: 페이지가 show 계열일 때만 햄버거 버튼이 표시되게 함. -->
</div>

<!-- :: 햄버거 슬라이드 팝업 -->
<div class="slidePop mainSlideSort">
	<a href="javascript:void(0);" class="closeBtn iconXSort"></a>
	<div class="titleBox">Logo</div>
	<div class="linkBtnGroup">
		<a href="javascript:void(0);">AS 접수 전체 내역</a>
		<a href="/saemaul/app/issue/regIssue">AS 접수 등록</a>
	</div>
	<div class="slideFooterGroup">
		<div class="versionNumber">V.01</div>
		<a href="/saemaul/app/intro/login" class="logoutBtn">로그아웃</a>
	</div>
</div>

<script>
// :: 상단 우측 햄버거 버튼 클릭 시, 메뉴 슬라이드 팝업 두둥등장. 
function slidePop(){
	$('.slidePop').slideDown(400);
}
// :: 슬라이드 팝업의 X 버튼 클릭 시 슬라이드 숨김.
$(document).on('click', '.closeBtn.iconXSort', function(){
	$('.slidePop').slideUp(400);
})
</script>
