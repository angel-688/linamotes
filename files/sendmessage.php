<?php
$content = '';
foreach ($_POST as $key => $values) {
	if (is_array($values)) {
		$content .= "<b>$key</b>: ";
		foreach ($values as $value) {
			if ($value) {
				$content .= "<i>$value</i>, ";
			}
		}
		$content = rtrim($content, ', ');
		$content .= "\n";
	} else {
		if ($_POST[$key]) {
			$content .= "<b>$key</b>: <i>{$_POST[$key]}</i>\n";
		}
	}
}
if(trim($content)){
	$content = "<b>Message from LinaStore:</b>\n".$content;
	$apiToken = "6250779170:AAFph8q7jhJXcTdvmz70mVZYL9XbGZNY4OE";
	$data =[
		'chat_id' => '@linamotesSHOP',
		'text' => $content,
		'parse_mode' => 'HTML'
	];
	$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}
?>