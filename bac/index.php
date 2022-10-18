<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8" />
	<title>登入範例 | Tocas UI</title>
	<link href="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.css" rel="stylesheet" />
	<script src="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.js"></script>
	<script src="/assets/js/clarity.js"></script>
	<style>.segment { max-width: 300px; }</style>
</head>
<body>
	<div class="ts narrow container">
		<h1 class="ts center aligned header" style="margin-top: 20vh">
			管理員登入
			<div class="sub center aligned header">輸入正確帳號密碼後，將帶您至管理介面</div>
		</h1>

		<div class="ts centered secondary segment">
			<form class="ts form" onsubmit="return login()">
				<div class="field">
					<label>帳號</label>
					<input id="username" placeholder="admin" autocomplete="off" />
				</div>

				<div class="field">
					<label>密碼</label>
					<input id="password" placeholder="******" autocomplete="off" />
				</div>

				<button type="submit" class="ts positive fluid button">登入</button>
			</form>
		</div>
	</div>

	<div class="ts snackbar">
		<div class="content"></div>
	</div>

	<script>
		function login() {
			let user = document.getElementById("username").value;
			let pass = document.getElementById("password").value;

			// 驗證使用者帳密
			fetch(`./verify/user-${user}/pass-${pass}`, {}).then((data) => {
				// 如果檔案不存在，代表密碼輸入錯誤
				if (data.status == 404) {
					ts(".snackbar").snackbar({
						content: "密碼錯誤！",
					});
				}

				// 密碼正確才會導向管理頁面
				if (data.status == 200) {
					location.href = "./admin-panel-i5XEzWkb/";
				}
			});

			// 已經用 JavaScript 處理過表單了，不需要真的送出
			return false;
		}
	</script>
</body>
</html>
<!-- Modified from https://examples.tocas-ui.com/pages/login.html -->
