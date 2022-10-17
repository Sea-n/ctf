<?php
if (isset($_GET['src'])) {
	highlight_file('api.php');
	exit();
}
?>
<!DOCTYPE html>
<html data-background="secondary" data-scheme="dark">
    <head>
		<title>連線狀態檢測 - CTF</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.css">
        <meta charset="UTF-8" />
    </head>
    <body>
        <div class="ts-container is-narrow">
            <div class="ts-space is-big"></div>
            <div class="ts-header is-huge is-center-aligned is-heavy">連線狀態檢測</div>
			<div class="ts-space is-big"></div>
			<p>請輸入要執行 Ping 檢測的 IP 位址（<a target="_blank" href="?src=1">Source Code</a>）</p>
            <div class="ts-input is-large is-fluid is-solid is-start-icon">
                <span class="ts-icon is-magnifying-glass-icon"></span>
				<input type="text" id="addr" placeholder="140.113.168.192" />
				<button id="btn" class="ts-button is-circular is-outlined" onclick="ping()">Ping!</button>
            </div>
            <div class="ts-space"></div>
            <div class="ts-space is-big"></div>
        </div>
        <div class="ts-divider"></div>
        <div class="ts-space is-large"></div>
		<div class="ts-container is-narrow">
			<pre><code id="output">No output yet.</code></pre>
        </div>
		<div class="ts-space is-huge"></div>
<script>
async function ping() {
	let output = document.getElementById('output');
	let addr = document.getElementById('addr');
	let btn = document.getElementById('btn');

	btn.classList.add('is-loading')
	btn.disabled = true;

	const resp = await fetch('./api.php', {
		method: 'POST',
			headers: {
			'Content-Type': 'application/json',
		},
		body: JSON.stringify({
			target: addr.value,
		}),
	}).then(resp => {
		return resp.text();
	});

	output.innerText = resp;

	btn.disabled = false;
	btn.classList.remove('is-loading')
}

let addr = document.getElementById('addr');
addr.addEventListener("keypress", function(event) {
	if (event.key === "Enter") {
		ping();
	}
})
</script>
<style>
pre code {
	white-space: pre-wrap;
}
</style>
<script src="/assets/js/clarity.js"></script>
    </body>
</html>
