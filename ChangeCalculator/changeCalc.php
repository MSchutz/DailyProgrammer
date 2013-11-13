<?php 

/**
     * [01/28/13] Challenge #119 [Easy] Change Calculator
     *
     * @author: Matt Schutz
     * @date:   03/16/2013
     * @desc:   Write A function that takes an amount of money, 
     *          rounds it to the nearest penny and then tells you the minimum 
     *          number of coins needed to equal that amount of money.
     * @url:    http://www.reddit.com/r/dailyprogrammer/comments/17f3y2/012813_challenge_119_easy_change_calculator/    
     */
    
function input($amount)
{
	$amount *= 100;

	$coins = array('Quarters' => 25,
					'Dimes' => 10,
					'Nickels' => 5,
					'Pennies' => 1 );

	foreach ($coins as $key => $value) {
		$num = floor($amount / $value);//floor amount to take no fraction and take the most amount of denomination
		$amount = $amount - ($num * $value);

		echo $key . ': ';
		if ($num != 0) 
		{
			echo $num . "\n";
		}else{
			echo 0 . "\n";
		}

	}
	
	
}

input(0.99);

 ?>