<!–– Rajiv Basnet - Casino Craps  ––>

<?php

	session_start();
	
	$gameCount = 0;
	
	$dice1 = mt_rand(1,6);
	$dice2 = mt_rand(1,6);
	$sum = $dice1 + $dice2;	
	
	include 'functionsFile.php';
	
	$_SESSION['firstSum'] = $sum;
	$result = firstRoll($sum);
	$_SESSION['firstResult'] = $result;
	$_SESSION['firstGameD1'] = $dice1;
	$_SESSION['firstGameD2'] = $dice2;
	$_SESSION['gameCount'] = $gameCount;
	
	
?>

<html>
<head>
	<title>Casino Craps Web Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src = "main.js"> </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body onload="startform()">
	
	<div class="heading" id ="content">
		<h1> Welcome to Rajiv's Casino Craps</h1>
		<h2> Roll the Dices, Get the Numbers on the Right to Win! </h2>
	</div>
	
	<div id="content">
	
	<form name = "myform" action = "second.php" method="post">
	
		<section>
		
			<fieldset class = "fieldsetLeft">
			<legend> Rules of the Game: </legend>
			<div class = "boxes Rules">
				<ul>
					<li>
						In the First Game, if you roll a 7 or an 11,  you win. If you roll a 2, a 3, or a 12, you lose. 
					</li>
					<li>
					If you get any other numbers, you can keep rolling. 
					If you get a 7 after the first roll you will lose. 
					You can keep rolling untill you reach the number you first rolled and win.
					</li>
					<li>
					NOTE: Please, follow the instructions carefully as well as see the note on the 'Result' box!
					</li>
				</ul>
			</div>
			
			</fieldset class = "fieldsetLeft">
			
			<br/>
			
			<fieldset>
			<legend> Your Dices: </legend>
			
				<div class = "boxes dicePictures">
				<div id="firstDice">
					<img src  = "dice0.jpg"> 
				</div>
				<div id="secondDice">
					<img src  = "dice0.jpg">
				</div>
</div>
			</fieldset>
			
		</section>
	
		<section>
		
		<fieldset class = "fieldsetRight">
		<legend> Play the Game: </legend>
		<br/>
		<div>
			<label>Sum of Numbers that will Win :</label> 
			<input class = "inputbox" type="text" name="resultNumber" placeholder = "7, 11" disabled/>
			
			<br/>
			
		</div>
		
			<br/>
			
		  <div class = "roll">
		  
		
			<div class = "boxes boxesRight">
				<table>
					<tr>
								<input type="submit" value="Roll the Die" class = "button" id = "calculate">
					</tr>
				</table>
			</div>
			
		  </div>
		  
		<br/> 
		<br/>
		  
		<div>
			<label> Sum of the Numbers you Got: </label> 
			<input class = "inputbox" type="text" name="resultNumber" placeholder = "Roll to Get!" disabled/>
		</div>
		</fieldset>
		
		</section>
		
	</form>
	</div>
	
	<div id = "content" class = "footer">
		Designed By Rajiv Basnet
	</div>
</body>
</html>
