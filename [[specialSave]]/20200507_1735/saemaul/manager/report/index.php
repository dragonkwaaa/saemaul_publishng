<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/head.php';
	$lCode					=	'0106';
?>
<body>

<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/header.php'; ?>

	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/leftMenu.php'; ?>
		<div class="contents">
			<div class="section reportSearchSort">
				<div class="titleBox sectionSort">보고서작성관리</div>
				<div class="conGroup regInfoSort">
					<div>
						<input class="tbox shortMod" placeholder="금고 코드를 입력해주세요"/>
						<input class="tbox shortMod ml7" placeholder="금고명을 입력해주세요"/>
						<a class="btn f_white bg_emerald withTbox">조회</a>
					</div>
					<div class="mt15">
						<span class="sbox">
							<a href="javascript:void(0);">점검구분 선택</a>
							<ul>
								<li><a href="javascript:void(0);">구분1</a></li>
								<li><a href="javascript:void(0);">구분2</a></li>
							</ul>
						</span>
						<span class="sbox ml10">
							<a href="javascript:void(0);">기기구분 선택</a>
							<ul>
								<li><a href="javascript:void(0);">기기1</a></li>
								<li><a href="javascript:void(0);">기기2</a></li>
							</ul>
						</span>
					</div>
					<div class="dateSelectGroup mt15">
						<div class="dateInputCase">
							<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="점검일자선택">
						</div>
					</div>
					<div class="mt15">
						<span class="sbox">
							<a href="javascript:void(0);">점검시간(시)</a>
							<ul>
								<?php for($i = 00 ; $i <=  23; $i ++){ ?>
								<li><a href="javascript:void(0);"><?= $i?></a></li>
								<?php } ?>
							</ul>
						</span>
						<span class="sbox ml10">
							<a href="javascript:void(0);">점검시간(분)</a>
							<ul>
								<?php for($i = 00 ; $i <=  60; $i ++){ ?>
								<li><a href="javascript:void(0);"><?= $i?></a></li>
								<?php } ?>
							</ul>
						</span>
						<a href="javascript:void(0);" class="btn f_white bg_emerald withTbox">검색</a>
					</div>	
				</div>
			</div>
			<div class="section tableSect mt20">
				<div class="conGroup tableSort titleUnlinked">
					<table class="listTable">
						<colgroup>
							<col width="30">
							<col width="40">
							<col width="40">
							<col width="90">
						</colgroup>
						<thead>
						<tr>
							<th>지사명</th>
							<th>담당AS기사</th>
							<th>고객 전화번호</th>
							<th>장애처리 상태</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>마포지사</td>
							<td>강동원</td>
							<td>010-7788-7788</td>
							<td>처리</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="btnGroup centerSort">
					<a href="javascript:void(0);" class="btn f_white bg_navy">저장</a>
					<a href="javascript:void(0);" class="btn printSort ml6">출력</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/saemaul/manager/common/js/datePick.js"></script>
<script>
</script>
</body>
</html>
