<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/saemaul/app/common/pages/head.php';
$titleName					=	'AS 접수 등록';		// :: 이 문구가 header.php 파일의 타이틀 부분에 표시됨.
$backShowCheck				=	'';			// :: 헤더의 뒤로가기 버튼이 "main" 일 때는 사라지게 함.
$hamShowCheck				=	'show';			// :: 헤더의 햄버거 버튼이 "show" 계열 페이지일 때 보이게 함.
?> 
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/saemaul/app/common/pages/header.php';?> 
	<!-- :: 컨텐츠  파트 -->
	<div class="contents">
		<div class="section regSect">
			<div class="conGroup sectionSort">
				<div class="inputGroup doubleSort cofferCheckSort">
					<span class="inputCase">
						<div class="iputTitle">금고코드</div>
						<input class="tbox"/>
					</span>
					<span class="inputCase ml12">
						<div class="iputTitle">금고명</div>
						<input class="tbox"/>
					</span>
					<a href="javascript:showInfoGroup();" class="btn mt12">조회</a>
				</div>

				<div class="infoGroup asRegSort">
					<div class="sboxCase">
						<div class="sboxTitle">금고 선택</div>
						<div class="sbox singleSort">
							<a href="javascript:void(0);" class="f16">금고 선택</a>
							<ul>
								<li><a href="javascript:void(0);">마포1</a></li>
								<li><a href="javascript:void(0);">마포2</a></li>
								<li><a href="javascript:void(0);">종로1</a></li>
							</ul>
						</div>
					</div>
					<div class="inputCase mt20">
						<div class="iputTitle">고객주소</div>
						<div class="addressGroup">
							<input class="tbox" readonly/>
							<a href="javascript:void(0);" class="btn addressBtn">우편번호 검색</a>
						</div>
						<input class="tbox mt10" value="서울시 은평구"/>
						<input class="tbox mt10"/>
					</div>	
					<div class="inputCase mt20">
						<div class="iputTitle">전화번호</div>
						<input class="tbox"/>
					</div>
					<div class="sboxCase mt20">
						<div class="sboxTitle">기종</div>
						<div class="sbox singleSort">
							<a href="javascript:void(0);" class="f16">기종 선택</a>
							<ul>
								<li><a href="javascript:void(0);">MD1</a></li>
								<li><a href="javascript:void(0);">CF1</a></li>
							</ul>
						</div>
					</div>
					<div class="sboxCase mt20">
						<div class="sboxTitle">모델</div>
						<div class="sbox singleSort">
							<a href="javascript:void(0);" class="f16">모델 선택</a>
							<ul>
								<li><a href="javascript:void(0);">MD1-1004</a></li>
								<li><a href="javascript:void(0);">MD1-1234</a></li>
							</ul>
						</div>
					</div>
					<div class="inputCase mt20">
						<div class="iputTitle">의뢰자</div>
						<input class="tbox"/>
					</div>
					<div class="sboxCase doubleSort timeSort mt20">
						<div class="sboxTitle">약속시간</div>
						<span class="sbox">
							<a href="javascript:void(0);" class="f16">시</a>
							<ul>
								<?php for($i = 00 ; $i <=  24; $i ++){ ?>
								<li><a href="javascript:void(0);"><?= $i?>시</a></li>
								<?php } ?>
							</ul>
						</span>
						<span class="sbox ml12">
							<a href="javascript:void(0);" class="f16">분</a>
							<ul>
								<li><a href="javascript:void(0);">04/29/2020</a></li>
								<li><a href="javascript:void(0);">04/28/2020</a></li>
							</ul>
						</span>
					</div>
					<div class="inputCase mt20">
						<div class="iputTitle">접수 내용</div>
						<input class="tbox" placeholder="내용을 입력해주세요."/>
					</div>
					<div class="sboxCase mt20">
						<div class="sboxTitle">기기 상태</div>
						<div class="sbox singleSort">
							<a href="javascript:void(0);" class="f16">기기 상태 선택</a>
							<ul>
								<li><a href="javascript:void(0);">고장</a></li>
								<li><a href="javascript:void(0);">정상작동</a></li>
							</ul>
						</div>
					</div>
					<div class="sboxCase mt20">
						<div class="sboxTitle">접수 구분</div>
						<div class="sbox singleSort">
							<a href="javascript:void(0);" class="f16">접수 구분 선택</a>
							<ul>
								<li><a href="javascript:void(0);">접수대기</a></li>
								<li><a href="javascript:void(0);">접수완료</a></li>
							</ul>
						</div>
					</div>
					<div class="btnGroup regBtnSort">
						<a href="javascript:void(0);" class="btn singleSort">등록</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>	
// :: "조회" 버튼 클릭 시 내용 부분 나타나게 하는 스크립트.
// function showInfoGroup (){
// 	$('.infoGroup.asRegSort').show();
// };
</script>
</body>
</html>
