<?php
	session_start();
	if($_SESSION['questions'][0][0]==$_GET['answer']){
		$_SESSION['result']+=1;
		
		array_shift($_SESSION['questions']);
		echo "Успех&nbsp;";
		echo '<a href="http://localhost/project/dem/game.php">Напред</p>';

	}
	else{
		echo "Грешка&nbsp;";
		session_unset();
		echo '<a href="http://localhost/project/dem/index.php">Начало>';
	}
	