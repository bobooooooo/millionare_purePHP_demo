<?php
	session_unset();
	session_start();

	$questions = [ 
		[
			"Кой е най използваният език за програмиране в web","Javascript","PHP","Rubby","Python"		
		],
		[
			"Коя е най-дългата река в България","Дунав","Марица","Янтра","Камчия"		
		],
		[
			"В коя планина е най-високият връх в България","Рила","Пирин","Родопи","Витоша"		
		],
	];
	$_SESSION['questions'] = $questions;
	$_SESSION['result'] = 0;
	$_SESSION['question'] = 1;
	header('Location: http://localhost/project/dem/game.php');
	exit;