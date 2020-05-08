<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/saemaul/app/common/pages/head.php';
$titleName					=	'AS 답변 등록';		// :: 이 문구가 header.php 파일의 타이틀 부분에 표시됨.
$backShowCheck				=	'';			// :: 헤더의 뒤로가기 버튼이 "main" 일 때는 사라지게 함.
$hamShowCheck				=	'';			// :: 헤더의 햄버거 버튼이 "show" 계열 페이지일 때 보이게 함.
?> 
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/saemaul/app/common/pages/header.php';?> 
	<!-- :: 컨텐츠  파트 -->
	<div class="contents">
		<div class="section regSect">
			<div class="titleGroup sectionSort">
				<i class="pencilIcon"></i>
				<span>답변 등록하기</span>
			</div>
			<div class="conGroup sectionSort">
				<div class="infoGroup answerRegSort">

					<div class="sboxCase">
						<div class="sbox singleSort">
							<a href="javascript:void(0);" class="f16">AS 상태</a>
							<ul>
								<li><a href="javascript:void(0);">미완료</a></li>
								<li><a href="javascript:void(0);">완료</a></li>
							</ul>
						</div>
					</div>
					<div class="textAreaCase mt20">
						<textarea class="tarea" placeholder="답변 입력"></textarea>
					</div>	
					<div class="imgUploadCase mt20">
						<div class="sizeFixImg">
							<div class="imgUploadBox">
								<input type="file" class="hide" accept="image/*" name="img_1" onchange="img_sel(this, event)">
								<a href="javascript:void(0)" class="upload_btn" onclick="img_upload(this)"></a>
							</div>
						</div>
					</div>
					<div class="btnGroup regBtnSort">
						<a href="javascript:void(0);" class="btn singleSort">저장</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/saemaul/app/common/js/exif-js.js"></script>
<script src="/saemaul/app/common/js/imgSet.js"></script>
<script>	
</script>
</body>
</html>
