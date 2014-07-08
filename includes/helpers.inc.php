<?php
function HTML($text){
	$text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	return $text;
}