<?php
if (isset($_GET['source'])) {
	highlight_file(__FILE__);
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.css" rel='stylesheet'>
	<script src="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.js"></script>
	<title>登入範例 | Tocas UI</title>
	<style type="text/css">
		.segment {
			max-width: 300px;
		}
	</style>
</head>
<body>
	<!-- 主要容器 -->
	<div class="ts narrow container">
		<br>
		<br>

		<!-- 抬頭標題 -->
		<h1 class="ts center aligned header">
			管理員登入
			<div class="sub header">輸入正確帳號密碼後，將帶您至管理介面</div>
		</h1>
		<!-- / 抬頭標題 -->

		<!-- 主要登入片段 -->
		<div class="ts centered secondary segment">
			<!-- 表單 -->
			<form class="ts form" onsubmit="return login()">
				<!-- 帳號欄位 -->
				<div class="field">
					<label>帳號</label>
					<input id="username" placeholder="admin" autocomplete="off">
				</div>
				<!-- / 帳號欄位 -->

				<!-- 密碼欄位 -->
				<div class="field">
					<label>密碼</label>
					<input id="password" placeholder="********" autocomplete="off">
				</div>
				<!-- / 密碼欄位 -->

				<!-- 登入按鈕 -->
				<button type="submit" class="ts positive fluid button">登入</button>
				<!-- / 登入按鈕 -->
			</form>
			<!-- / 表單 -->
		</div>
		<!-- / 主要登入片段 -->
	</div>
	<!-- / 主要容器 -->

	<div class="ts snackbar">
		<div class="content"></div>
	</div>

<script>
function login() {
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;

	if (username.length == 0 || password.length == 0) {
		ts('.snackbar').snackbar({
			content: '帳密不能為空！'
		});
		return false;
	}

	// 驗證使用者帳密
	let url = `./verify/${username}/${password}`;
	fetch(url, {})
	.then(data => {
		// 如果檔案不存在，代表密碼輸入錯誤
		if (data.status == 404) {
			ts('.snackbar').snackbar({
				content: '密碼錯誤！'
			});
		}

		// 密碼正確才會導向管理頁面
		if (data.status == 200) {
			location.href = './admin-panel-i5XEzWkb'
		}
	});

	// 已經用 JavaScript 處理過表單了，不需要真的送出
	return false;
}
</script>
</body>
</html>
<!-- Modified from https://examples.tocas-ui.com/pages/login.html -->
