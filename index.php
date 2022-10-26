<?php

if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	include dirname(__FILE__) . '/../../lang/lang-'.$lang.'.php';
} else {
	include dirname(__FILE__) . '/../../lang/lang-fr.php';
}
