
<?php

	session_start();

	$_SESSION['gameCount'] = $_SESSION['gameCount'] + 1;
	
	if ($_SESSION['gameCount'] == 1) {
			if (($_SESSION['firstSum'] == 2)|| ($_SESSION['firstSum'] == 3) || ($_SESSION['firstSum'] == 12) || ($_SESSION['firstSum'] == 7) || ($_SESSION['firstSum'] == 11)) {
					$$nextWinningValue = " ";
			}
			else {
					$nextWinningValue = $_SESSION['firstSum'];
			}
			
		$firstDice = $_SESSION['firstGameD1'];
		$secondDice = $_SESSION['firstGameD2'];
		$sum = $_SESSION['firstSum'];
		$result = $_SESSION['firstResult'];
	}
	else {
		$dice1 = mt_rand(1,6);
		$dice2 = mt_rand(1,6);
		$nextSum = $dice1 + $dice2;
	
		$firstDice = $dice1;
		$secondDice = $dice2;
		$sum = $nextSum;
		
		if ($sum == 7) {
					$$nextWinningValue = " ";
			}
			else {
					$nextWinningValue = $_SESSION['firstSum'];
			}
		
		include 'functionsFile.php';
		$result = secondRoll($nextSum, $nextWinningValue);
	}
	
	
?>


<!–– Rajiv Basnet - Casino Craps  ––>
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
	
	<form name = "myform" action = "second.php" method = "post">
	
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
					<?php 
						if ($firstDice == 1) {
							echo "<img src  = \"dice1.jpg\">";
						}
						elseif ($firstDice == 2) {
							echo "<img src  = \"dice2.jpg\">";
						}
						elseif ($firstDice == 3) {
							echo "<img src  = \"dice3.jpg\">";
						}
						elseif ($firstDice == 4) {
							echo "<img src  = \"dice4.jpg\">";
						}
						elseif ($firstDice == 5) {
							echo "<img src  = \"dice5.jpg\">";
						}
						else {
							echo "<img src  = \"dice6.jpg\">";
						}
					?>
				</div>
				
				<div id="secondDice">
					<?php 
						if ($secondDice == 1) {
							echo "<img src  = \"dice1.jpg\">";
						}
						elseif ($secondDice == 2) {
							echo "<img src  = \"dice2.jpg\">";
						}
						elseif ($secondDice == 3) {
							echo "<img src  = \"dice3.jpg\">";
						}
						elseif ($secondDice == 4) {
							echo "<img src  = \"dice4.jpg\">";
						}
						elseif ($secondDice == 5) {
							echo "<img src  = \"dice5.jpg\">";
						}
						else {
							echo "<img src  = \"dice6.jpg\">";
						}
					?>
				</div>
			</div>
			
			</fieldset>
			
		</section>
	
		<section>
		
		<fieldset class = "fieldsetRight">
		<legend> Play the Game: </legend>
		<br/>
		<div>
			<label>Sum of Numbers that Will Win : </label>
			<?php
				echo "<input class = \"inputbox\" type=\"text\" name=\"resultNumber\" placeholder = \"".$nextWinningValue."\" disabled/>";
			?>
			<br/>
		</div>
		
			<br/>
			
		  <div class = "roll">
		  
		
			<div class = "boxes boxesRight">
				<table>
					<tr>
								<input type="submit" value="Roll Again" class = "button" id = "rollagain" name = "rollagain"/>
					</tr>
					<tr>
								<input type="button" value="Start Over" class = "button" id = "startover" onclick="window.location.href = 'index.php';"/>
					</tr>
				</table>
			</div>
			
		  </div>
		  
		<br/> 
		<br/>
		  
		<div>
			<label> Sum of Numbers that you Got : </label>	
			<?php
				echo "<input class = \"inputbox\" type=\"text\" name=\"resultNumber\" placeholder = \"".$sum."\" disabled/>";
			?>
			</br>
		</div>
	
		
		<br/>
			<div class = "boxes boxesRight">
				<table>
					<tr>
								<label> Result : </label>
								<?php
									echo "<input class = \"inputbox result\" type=\"text\" name=\"resultNumber\" placeholder = \"".$result."\" disabled/>";
								?>
					</tr>
				</table>
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
