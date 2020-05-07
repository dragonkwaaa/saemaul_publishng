<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/head.php';
	$lCode					=	'0105';
?>
<body>

<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/header.php'; ?>

	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/saemaul/manager/common/pages/leftMenu.php'; ?>
		<div class="contents">


			<div class="section searchSection">
				<div class="conGroup searchSort">


					<div class="dateSelectGroup">
						<div class="dateInputCase">
							<input class="tbox dateBox shortMod" id="startDate" readonly="">
						</div>
						<div class="dateInputCase ml12">
							<input class="tbox dateBox shortMod" id="endDate" readonly="">
						</div>
					</div>


					<span class="sbox">
						<a href="javascript:void(0);">지사명</a>
						<ul>
							<li><a href="javascript:void(0);">아이디</a></li>
							<li><a href="javascript:void(0);">전화번호</a></li>
						</ul>
					</span>
					<input class="tbox" placeholder="지사명을 입력해주세요"/>
					<a href="javascirpt:void(0));" class="btn f_white bg_emerald withTbox">검색</a>
				</div>
			</div>

			<div class="section tableSect">
				<div class="titleBox sectionSort">
					<div>장애접수관리</div>
					<a href="/saemaul/manager/issue/issueReg" class="btn regLinkBtn">장애접수등록</a>
				</div>
				<div class="conGroup tableSort">
					<div class="headLineBox">
						<a href="javascript:void(0);" class="btn listDelSort">선택삭제</a>
					</div>
					<table class="listTable">
						<colgroup>
							<col width="30">
							<col width="40">
							<col width="40">
							<col width="90">
							<col width="90">
							<col width="30">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</th>
							<th>지사명</th>
							<th>담당AS기사</th>
							<th>고객 전화번호</th>
							<th>장애처리 상태</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						<tr>
							<td>
								<div class="checkBoxCase">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
							</td>
							<td>지사1</td>
							<td>주소1</td>
							<td>아이디1</td>
							<td>전번1</td>
							<td>
								<a href="/saemaul/manager/issue/issueSpec" class="btn modifySort">수정</a>
								<a href="javascript:void(0);" class="btn delSort ml7">삭제</a>
							</td>
						</tr>
						</tbody>
					</table>

					<div class="page_group absoluteMod">
						<ul class="page_box">
							<li class="prev arrow">
								<a href="javascript:void(0);"></a>
							</li>
							<li class="pageNum on">
								<a href="javascript:void(0);">1</a>
							</li>
							<li class="pageNum">
								<a href="javascript:void(0);">2</a>
							</li>
							<li class="next arrow">
								<a href="javascript:void(0); "></a>
							</li>
						</ul>
					</div>
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
