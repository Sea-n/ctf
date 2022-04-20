<!DOCTYPE html>
<html data-background="secondary">
	<head>
		<meta charset="UTF-8" />
		<title>CTF 題目一覽 - 建功軟研</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.js"></script>
		<meta name="description" content="建功軟研社課 資安入門教學" />
		<meta property="og:title" content="CTF 題目列表" />
		<meta property="og:description" content="建功軟研社課 資安入門教學" />
		<meta property="og:image" content="/img/ctf.png" />
	</head>
	<!-- Source: Tocas UI v4 範例頁面 -->
	<body>
		<div class="ts-content is-secondary is-fitted">
			<div class="ts-container">
				<div class="ts-tab">
					<div class="item is-active">題目列表</div>
					<a href="https://hackmd.io/@Sean64/sec" target="_blank" class="item">簡報</a>
				</div>
			</div>
		</div>
		<div class="ts-divider"></div>
		<div class="ts-content is-center-aligned is-vertically-very-padded" style="background: var(--ts-gray-50)">
			<div class="ts-space"></div>
			<div class="ts-container">
				<div class="ts-header is-center-aligned is-huge is-heavy">CTF 題目列表</div>
				<div class="ts-text is-secondary">建功軟研社課 資安入門教學</div>
			</div>
			<div class="ts-space"></div>
		</div>
		<div class="ts-divider"></div>
		<div class="ts-space is-big"></div>
		<div class="ts-container">
			<div class="ts-grid is-3-columns is-relaxed">
				<div class="column">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/f12">
								<img src="img/f12.png" />
							</a>
						</div>
						<div class="ts-content">學弟的瀏覽器幫他記住密碼了，要怎麼找出預先填入的密碼呢</div>
					</div>
				</div>
				<div class="column">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/xss">
								<img src="img/xss.png" />
							</a>
						</div>
						<div class="ts-content">每個人都可以留言欸！看起來沒有過濾文字，來試試上課教到的 XSS 程式碼注入吧</div>
					</div>
				</div>
				<div class="column">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/bac">
								<img src="img/bac.png" />
							</a>
						</div>
						<div class="ts-content">有人偷懶只在前端驗證帳號密碼，動點小巧思就能繞過限制</div>
					</div>
				</div>
				<div class="column">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/cmdi">
								<img src="img/cmdi.png" />
							</a>
						</div>
						<div class="ts-content">我開發了一個可以 Ping 任何網站的小工具，放到網路上給大家使用。等等... 是不是哪裡寫壞了？</div>
					</div>
				</div>
				<div class="column">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/caesar">
								<img src="img/caesar.png" />
							</a>
						</div>
						<div class="ts-content">前陣子破解同學電腦，看到了聊天訊息，但似乎被某種方式加密過了，試著找到工具破譯密文吧</div>
					</div>
				</div>
				<div class="column">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/stego">
								<img src="img/stego.png" />
							</a>
						</div>
						<div class="ts-content">這題我想不到可以出什麼情境 (´･ω･`)</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ts-space is-big"></div>
		<div class="ts-divider"></div>
		<div class="ts-content is-vertically-very-padded" style="background: var(--ts-gray-50)">
			<div class="ts-container">
				<div class="ts-header is-large is-heavy">感謝&nbsp;<a target="_blank" href="https://v4.tocas-ui.com/zh-tw/">Tocas UI</a>&nbsp;提供範例頁面作為模版</div>
				<div class="ts-text is-secondary">講者：<a target="_blank" href="https://www.sean.taipei/">Sean 韋詠祥</a></div>
				<!--
					Good Job! Here is your flag:
					FLAG{wElC0me_T0_mY_W3b$iT3}
				-->
			</div>
		</div>
	<style>
		a {
			text-decoration: dotted underline;
		}
	</style>
	</body>
</html>
