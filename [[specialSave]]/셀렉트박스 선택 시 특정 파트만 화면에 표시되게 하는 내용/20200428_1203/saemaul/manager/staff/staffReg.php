<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/head.php';
	$lCode					=	'0103';
?>
<body>

<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/header.php'; ?>

	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/leftMenu.php'; ?>
		<div class="contents">
			<div class="section regimentSect">
				<div class="titleBox sectionSort">직원등록</div>
				<div class="conGroup regInfoSort">
					<div class="tabGroup conRadioSort">
						<ul>
							<li>
								<div class="radioCase">
									<div class="radioIconBox">
										<input type="radio" name="staffType" value="1" checked>
										<label></label>
									</div>
									<div class="radioTitle">지사직원</div>
								</div>
							</li>
							<li>
								<div class="radioCase">
									<div class="radioIconBox">
										<input type="radio" name="staffType" value="2">
										<label></label>
									</div>
									<div class="radioTitle">콜센터직원</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="subConGroup branchStaffSort activated">
						<div>
							<span class="sbox">
								<a href="javascript:void(0);">지사선택</a>
								<ul>
									<li><a href="javascript:void(0);">지사1</a></li>
									<li><a href="javascript:void(0);">지사2</a></li>
								</ul>
							</span>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="아이디를 입력해주세요"/>
							<a class="btn f_white bg_emerald withTbox">중복확인</a>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="비밀번호를 입력해주세요"/>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="비밀번호를 다시 한번 입력해주세요"/>
						</div>
						<div class="mt15">
							<input class="tbox long" placeholder="이름을 입력해주세요"/>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="전화번호를 입력해주세요"/>
							<a class="btn f_white bg_emerald withTbox col_emerald">중복확인</a>
						</div>
					</div>
					<div class="subConGroup callStaffSort">
						<div>
							<input class="tbox" placeholder="아이디를 입력해주세요"/>
							<a class="btn f_white bg_emerald withTbox">중복확인</a>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="비밀번호를 입력해주세요"/>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="비밀번호를 다시 한번 입력해주세요"/>
						</div>
						<div class="mt15">
							<input class="tbox long" placeholder="이름을 입력해주세요"/>
						</div>
						<div class="mt15">
							<input class="tbox" placeholder="전화번호를 입력해주세요"/>
							<a class="btn f_white bg_emerald withTbox col_emerald">중복확인</a>
						</div>
					</div>
				</div>
				<div class="btnGroup">
					<a href="/saemaul/manager/staff/" class="btn f_white bg_navy">저장</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
// :: 라디오박스 선택시 해당 직원 타입에 관한 내용을 표시하는 스크립트
$(document).on('click', '.radioCase input', function(){
	$('.subConGroup').removeClass('activated');
	if ($(this).val() == ('1') && $(this).is(':checked')){
		$('.subConGroup.branchStaffSort').addClass('activated');
	} else if ($(this).val() == ('2') && $(this).is(':checked')){
		$('.subConGroup.callStaffSort').addClass('activated');
	}
})
</script>
</body>
</html>
