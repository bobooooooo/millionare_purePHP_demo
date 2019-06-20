<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo</title>
	<style>
		/*clear browser*/
		html, body, header, main, footer, div, span, h1, h2, h3, h4, a ,ul, ol, li, img, p, section, article, button, form, input{
			margin: 0;
			padding: 0;
		}
		html{
			font-size: 62.5%;
			font-family: 'Ubuntu', sans-serif;
			color:#fff;
			background-color: #000;
		}
		.container {
			width: 100%;
			margin: auto;	
			background-color: #000;
			color: #fff;
			padding: 0;
			margin: 0;
		}
		.desktop{
			display: inline-block;
			background-image: url(img/millionaire01.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			width: 75%;
			height: 400px;
		}
		.winnings{
			display: inline-block;
			position: absolute;
			top: 0;
			width: 23%;
			height: 400px;
			font-size: 20px;
		}
		.winings ul{
			list-style-type: none;
		}
		.winnings li{
			display: block;
			border: 2px solid blue;
			border-radius: 5px;
			padding: 10px 5px;
			margin: 5px;
			text-align: center;
		}	
		.question {
			border: 2px solid blue;
			border-radius: 5px;
			text-align: center;
			padding: 2px 5px;
			margin: 5px;
		}
		.green_color{
			background-color: green;
		}
		h2{
			font-size: 50px;
			margin: 0;
			padding: 0;
		}		
		a {
			text-decoration: none;
			display: inline-block;
			border: 2px solid blue;
			border-radius: 5px;
			text-align: center;
			padding: 2px 5px;
			margin: 1% 3%;
			width: 40%;
			height: 60px;
			color: #fff;
			font-size: 50px;

		}
		a:hover{
			background-color: #DACA27;
			color: blue;
		}
		.answers{
			width: 100%;
		}
	</style>
	<?php
	session_start();
	$question=array_shift(($_SESSION['questions'][0]));
	$answers = $_SESSION['questions'][0];
	shuffle($answers);
	?>
</head>
<body>
	<div class="container">
		<div class="desktop">		
		</div>
		<div class="winnings">
			<ul>
				<li>
					1000
				<li>
					800
				</li>
				<li>
					600
				</li>
				<li>
					500
				</li>
				<li>
					400
				</li>
				</li>
				<li <?php echo ($_SESSION['result']==2) ? 'class="green_color"' : ''?>>
					300
				</li>
				<li <?php echo ($_SESSION['result']==1) ? 'class="green_color"' : ''?>>
					200
				</li>
			</ul>
		</div>
		<div class="question">
			<h2> <!-- Въпрос  --> <?php echo $question;?></h2>
		</div> 
		<div class="answers">
			<div>
				<a <?php echo 'href="http://localhost/project/dem/judge.php?answer='.$answers[0].'"' ?>> A: <?php echo $answers[0];?></a>
				<a <?php echo 'href="http://localhost/project/dem/judge.php?answer='.$answers[1].'"' ?>> B: <?php echo $answers[1];?></a>
			</div>
			<div>
				<a <?php echo 'href="http://localhost/project/dem/judge.php?answer='.$answers[2].'"' ?>> C: <?php echo $answers[2];?></a>
				<a <?php echo 'href="http://localhost/project/dem/judge.php?answer='.$answers[3].'"' ?>> D: <?php echo $answers[3];?></a>
			</div>
		</div> 
	</div>
</body>
</html>