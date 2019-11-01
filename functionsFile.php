<?php
	function firstRoll($sum) {
		if( ($sum == 7)	|| ($sum == 11) ) {
			$resultString = "Congrats, You Won! Please Start Over.";
		}
		elseif( ($sum == 2) || ($sum == 3) || ($sum == 12)){
			$resultString = "Sorry, You Lost! Start Over to Play Again.";
		}
		else {
			$resultString= "Roll Again Or Start Over!";
		}
		return $resultString;
		
	}
	
	
	
	function secondRoll($sum, $nextWinningValue) {

		if($sum == $nextWinningValue) {
                $resultString = "Congrats, You Won! Please Start Over.";
            }
        elseif($sum == 7){
                $resultString = "Sorry, You Lost! Start Over to Play Again.";
            }
        else {
                $resultString = "Roll Again Or Start Over!";
            }	
		return $resultString;
	}
	
	function gameCountIncrease() {
		$_SESSION['gameCount'] = $_SESSION['gameCount'] + 1;
	}
?>
