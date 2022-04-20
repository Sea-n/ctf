<?php
session_start();

if (!isset($_COOKIE['passwd'])) {
	setcookie('login', 'robert');
	setcookie('passwd', 'ji32k7au4a83');
}

$cards = [];
if (file_exists($_SESSION['xss_db'] ?? '')) {
	$cards = json_decode(file_get_contents($_SESSION['xss_db']), true);
}
$cards = array_reverse($cards);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.css" rel='stylesheet'>
	<script src="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.js"></script>
	<title>我的便利貼 - Tocas UI 範例</title>
	<style>
		input[name='title'] {
			font-size: 28px;
		}
	</style>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<!-- 窄容器網格系統 -->
	<div class="ts narrow relaxed stackable container grid">
		<!-- 欄位 -->
		<div class="sixteen wide column">
			<!-- 標題 -->
			<h1 class="ts center aligned header">
				便利貼
				<div class="sub header">
					在這裡留下你想保存的事物。
				</div>
			</h1>
			<!-- / 標題 -->
		</div>
		<!-- / 欄位 -->

		<!-- 表單欄位 -->
		<form action="./submit" method="POST" class="sixteen wide column">
			<!-- 片段 -->
			<div class="ts segment">
				<!-- 輸入欄位 -->
				<div class="field">
					<input name="title" placeholder="標題" autocomplete="off">
				</div>
				<div class="ts borderless horizontally fitted fluid input">
					<textarea name="content" placeholder="在此輸入你想保存的話語...." autocomplete="off"></textarea>
				</div>
				<!-- / 輸入欄位 -->

				<!-- 底部對齊用選單-->
				<div class="ts secondary fitted menu">
					<!-- 左側拉伸項目 -->
					<div class="stretched item">
						<div class="ts tiny faded fitted basic message">
							為了避免嚴重危害，此 Demo 只會顯示來自您自己的便利貼。
						</div>
					</div>
					<!-- / 左側拉伸項目 -->
					<div class="item">
						<button class="ts mini primary button" type="submit">送出</button>
					</div>
				</div>
				<!-- / 底部對齊用選單 -->
			</div>
			<!-- / 片段 -->
		</form>
		<!-- / 表單欄位 -->

		<!-- 便利貼欄位 -->
		<div class="sixteen wide column">
			<!-- 瀑布流卡片群組 -->
			<div class="ts stackable three waterfall cards">
<?php foreach ($cards as $card) { ?>
				<!-- 單張卡片 -->
				<div class="ts card">
					<div class="content">
						<div class="header"><?= $card['title'] ?></div>
						<div class="meta">
							<div>今天</div>
						</div>
						<div class="description">
							<p><?= $card['content'] ?></p>
						</div>
					</div>
				</div>
				<!-- / 單張卡片 -->
<?php } ?>

				<!-- 單張卡片 -->
				<div class="ts card">
					<div class="content">
						<div class="header">台灣－維基百科</div>
						<div class="meta">
							<div>一天前</div>
						</div>
						<div class="description">
							<p>歷經日治時期所打下的現代化基礎、以及中華民國政府遷臺後運用美援所進行的一系列經濟建設，臺灣自 1960 年代起在經濟與社會發展上突飛猛進，締造舉世聞名的臺灣奇蹟，名列亞洲四小龍之一。</p>
						</div>
					</div>
				</div>
				<!-- / 單張卡片 -->

				<!-- 單張卡片 -->
				<div class="ts card">
					<div class="content">
						<div class="header">我的密碼</div>
						<div class="meta">
							<div>一天前</div>
						</div>
						<div class="description">
							<p>Facebook: yeedali1234556789</p>
							<p>Google: mA$2l9avKe!o0k3V</p>
						</div>
					</div>
				</div>
				<!-- / 單張卡片 -->

				<!-- 單張卡片 -->
				<div class="ts card">
					<div class="content">
						<div class="header">呆丸</div>
						<div class="meta">
							<div>兩天前</div>
						</div>
						<div class="description">
							<p>呆丸（俗名：Die-wan，學名：Idiot Ball）</p>
							<p>全名浩呆的丸仔（Hao-Die-E-Wan-A），又稱歹丸，是檯灣特有的一種毒品食物，主要產地在呆丸國。</p>
							<p>呆丸是除貢丸以外，呆丸國鄉民食用率較多的丸類製品。</p>
						</div>
					</div>
				</div>
				<!-- / 單張卡片 -->

				<!-- 單張卡片 -->
				<div class="ts card">
					<div class="content">
						<div class="header">Tocas 介紹</div>
						<div class="meta">
							<div>一天前</div>
						</div>
						<div class="description">
							<p>更簡潔，沒有像 Bootstrap 那樣雜亂的樣式名稱。（如：.m-l-1, .p-x-2, .p-a-3）</p>
							<p>以意義為樣式命名的主要精神。</p>
							<p>以支援行動裝置為優先。</p>
							<p>更加彈性的格線系統，並達到 16 格線。</p>
							<p>可自訂元件顏色，甚至只需一行指令。</p>
							<p>據有回饋力的動畫。</p>
							<p>元件之間可交互使用。</p>
							<p>模塊不需要 jQuery（耶！）。</p>
						</div>
					</div>
				</div>
				<!-- / 單張卡片 -->
			</div>
			<!-- / 瀑布流卡片群組 -->
		</div>
		<!-- / 便利貼欄位 -->

		<button class="ts negative large button" onclick="location.href = './flush';" style="margin: 42px;">清除紀錄</button>
	</div>
	<!-- / 窄容器網格系統 -->
</body>
</html>
<!-- Modified from https://examples.tocas-ui.com/pages/notes.html -->
