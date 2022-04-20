<?php
$input = file_get_contents('php://input');
$input = json_decode($input, true);

if (!isset($input['target'])) {
	header('Content-Type: application/json');

	echo json_encode([
		'ok' => false,
		'msg' => 'No `target` specified.',
	], JSON_PRETTY_PRINT);

	exit();
}

$target = $input['target'];

$content = shell_exec("ping -c 2 $target");

echo $content;

if (strlen($content) == 0) {
	echo '<No output>';
}
