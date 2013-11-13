
<?php  

/**
     * [01/28/13] Challenge #122 [Easy] Change Calculator
     *
     * @author: Matt Schutz
     * @date:   03/16/2013
     * @desc:   As a crude form of hashing function, Lars wants to sum the digits of a number. Then he wants to sum the digits of the result, and repeat until he have only one digit left. He learnt that this is called the digital root of a number, but the Wikipedia article is just confusing him.
	 *			Can you help him implement this problem in your favourite programming language?
	 *			It is possible to treat the number as a string and work with each character at a time. This is pretty slow on big numbers, though, so Lars wants you to at least try solving it with only integer calculations (the modulo operator may prove to be useful!).
     * @url:    http://www.reddit.com/r/dailyprogrammer/comments/1berjh/040113_challenge_122_easy_sum_them_digits/   
     */
    

function digital_root($num)
{
	while ($num > 9)
	{ 
	$arr = str_split($num);
	$num = array_sum($arr);
	}
	return $num;
}

echo digital_root(31337);