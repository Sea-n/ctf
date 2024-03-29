<!DOCTYPE html>
<html lang="zh-TW" data-background="secondary" data-scheme="dark">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>CTF 入門題目 - Sean 教學例題</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.js"></script>
		<meta name="description" content="資安入門教學題目" />
		<meta property="og:url" content="https://ctf.sean.cat/">
		<meta property="og:title" content="CTF 入門題目列表" />
		<meta property="og:description" content="資安入門教學題目" />
		<meta property="og:image" content="https://ctf.sean.cat/assets/img/ctf.png" />
		<link rel="canonical" href="https://ctf.sean.cat/">
	</head>
	<!-- Source: Tocas UI v4 範例頁面 -->
	<body>
		<div class="ts-content is-secondary is-fitted">
			<div class="ts-container">
				<div class="ts-tab">
					<b class="item is-active">題目列表</b>
					<a class="item" target="_blank" href="https://hackmd.io/@Sean64/sec">教學簡報</a>
					<a class="item" target="_blank" href="https://bamboofox.cs.nctu.edu.tw/courses/15/challenges">計分板</a>
					<a class="item" target="_blank" href="https://www.sean.taipei/" style="margin-left: auto">關於我</a>
					<a class="item" target="_blank" href="https://blog.sean.taipei/">部落格</a>
				</div>
			</div>
		</div>
		<div class="ts-divider"></div>
		<div class="ts-content is-center-aligned is-vertically-very-padded" style="background: var(--ts-gray-50)">
			<div class="ts-space"></div>
			<div class="ts-container">
				<div class="ts-header is-center-aligned is-huge is-heavy">CTF 入門題目</div>
				<div class="ts-text is-secondary">資安教學範例題</div>
			</div>
			<div class="ts-space"></div>
		</div>
		<div class="ts-divider"></div>
		<div class="ts-space is-big"></div>
		<div class="ts-container">
			<div class="ts-grid is-12-columns is-relaxed">
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/f12">
								<img src="/assets/img/f12.png" />
							</a>
						</div>
						<div class="ts-content">學弟的瀏覽器幫他記住密碼了，要怎麼找出預先填入的密碼呢</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/bac">
								<img src="/assets/img/bac.png" />
							</a>
						</div>
						<div class="ts-content">有人偷懶只在前端驗證帳號密碼，動點小巧思就能繞過限制</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/cmdi">
								<img src="/assets/img/cmdi.png" />
							</a>
						</div>
						<div class="ts-content">我開發了一個可以 Ping 任何網站的小工具，放到網路上給大家使用。等等... 是不是哪裡寫壞了</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/xss">
								<img src="/assets/img/xss.png" />
							</a>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <!-- Here is your F1@g: RkxBR3t3RWxDMG1lX1QwX21ZX1czYiRpVDN9, remember to decode before submit. -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
						</div>
						<div class="ts-content">每個人都可以留言欸！看起來沒有過濾文字，來試試上課教到的 XSS 程式碼注入吧</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/caesar">
								<img src="/assets/img/caesar.png" />
							</a>
						</div>
						<div class="ts-content">前陣子破解同學電腦，看到了聊天訊息，但似乎被某種方式加密過了，試著找到工具破譯密文吧</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/stego">
								<img src="/assets/img/stego.png" />
							</a>
						</div>
						<div class="ts-content">朋友竟然在河道上發布生活照，好像有些資訊沒有移除掉</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/filter">
								<img src="/assets/img/filter.png" />
							</a>
						</div>
						<div class="ts-content">我今天剛學會寫程式，架了一個自己的部落格，要麻煩讀者自己輸入文章的檔案名稱</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/ip-addr">
								<img src="/assets/img/ip-addr.png" />
							</a>
						</div>
						<div class="ts-content">共享雲端硬碟可以放些公開的檔案，只有我透過本機存取才能看到自己的秘密</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/slash">
								<img src="/assets/img/slash.png" />
							</a>
						</div>
						<div class="ts-content">透過 Proxy 存取定價 API，這個頁面只有我自己才看得到 Flag</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/xxe">
								<img src="/assets/img/xxe.png" />
							</a>
						</div>
						<div class="ts-content">匯入文章真是方便的功能，過濾什麼的才不重要呢</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="/ssti">
								<img src="/assets/img/ssti.png" />
							</a>
						</div>
						<div class="ts-content">名字包含大括號錯了嗎</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="https://ctf.sean.cat:43798/">
								<img src="/assets/img/grafana.png" />
							</a>
						</div>
						<div class="ts-content">Grafana (CVE-2021-43798)</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="https://ctf.sean.cat:41773/">
								<img src="/assets/img/apache2-4-49.png" />
							</a>
						</div>
						<div class="ts-content">Apache 2 (CVE-2021-41773)</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="https://ctf.sean.cat:42013/">
								<img src="/assets/img/apache2-4-50.png" />
							</a>
						</div>
						<div class="ts-content">Apache 2 Revenge (CVE-2021-42013)</div>
					</div>
				</div>
				<div class="column is-12-minimal is-6-standard is-4-maximal">
					<div class="ts-box">
						<div class="ts-image">
							<a target="_blank" href="https://ctf.sean.cat:32682/">
								<img src="/assets/img/unzip.png" />
							</a>
						</div>
						<div class="ts-content">elFinder (CVE-2021-32682)</div>
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
			</div>
		</div>
		<style>
			a {
				text-decoration: dotted underline;
			}

			.ts-grid.is-12-columns {
				grid-template-columns: repeat(12, minmax(0, 1fr));
			}
		</style>
		<script src="/assets/js/clarity.js"></script>
	</body>
</html>
