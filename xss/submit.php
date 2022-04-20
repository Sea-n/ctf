<?php
session_start();
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';

// Should not be both empty
if (!strlen($title) && !strlen($content)) {
	echo <<<EOF
<script>
	alert('請輸入卡片內容');
	location.href = './';
</script>
EOF;
	exit();
}

if (!strlen($title))
	$title = '**無標題**';

if (!strlen($content))
	$content = '**空白卡片**';

if (!isset($_SESSION['xss_db']))
	$_SESSION['xss_db'] = __DIR__ . '/data/' . $_SERVER['REMOTE_ADDR'] . '-' . rand58(4) . '.json';

$cards = [];
if (file_exists($_SESSION['xss_db'])) {
	$cards = json_decode(file_get_contents($_SESSION['xss_db']), true);
}

$cards[] = [
	'title' => $title,
	'content' => $content,
];

file_put_contents($_SESSION['xss_db'], json_encode($cards, JSON_PRETTY_PRINT));

header('Location: ./');


function rand58(int $len = 1): string {
	$base58 = '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';

	$rand = '';
	for ($_=0; $_<$len; $_++)
		$rand .= $base58[rand(0, 57)];

	return $rand;
}
