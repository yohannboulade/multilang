<?php

if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {

	switch (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)) {
		case 'fr':

			include dirname(__FILE__) . '/../../lang/lang-fr.php';
			break;

		default:

			include dirname(__FILE__) . '/../../lang/lang-fr.php';
			break;
	}
} else {
	include dirname(__FILE__) . '/../../lang/lang-fr.php';
}
