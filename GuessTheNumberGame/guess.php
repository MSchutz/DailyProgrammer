<?php 
include 'guessThatNumber.php';
session_start();

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(is_numeric($_POST["guess"]) && $_POST["guess"] <= 100){

		function HotOrCold($guess, $num, $insult)
		{
					switch ($guess) {

						case ($guess < $num):
							echo "Too low. Guess again.  ";
							break;
						case $num:
							echo "You Got it!" . "<br>";?>
							<a href="start.php">Try Again?</a>
							<?php 
							die();
						case "0":
							echo $insult . " The number was " . $num . ".<br>";?>
							<a href="start.php">Try Again?</a>
							<?php 
							die();
						case ($num < $guess):
							echo "Too high. Guess again.  ";
							break;
							
					}
				echo "<br>" . "'0' to give up.";
		}
	}else{
		echo "Come on...";
	}

$bags = array('You stink.',
 			  "You're not very good.",
 			  'You give up a lot.',
 			  'Maybe try harder.',
 			  'You\'re what the french call les incompetent.');
$rand_ins = $bags[rand(0,4)];

HotOrCold(((string)$_POST["guess"]), $_SESSION[$rand_num], $rand_ins);
}


 ?>