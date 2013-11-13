<?php 
/**
     * Challenge # [Easy] (Non Repeating Years)
     *
     * @author: Matt Schutz
     * @date:   05/01/2013
     * @desc:   Write a program to count the number years in an inclusive range of years that have no repeated digits.
	 * For example, 2012 has a repeated digit (2) while 2013 does not. Given the range [1980, 1987], your program would return 7 (1980, 1982, 1983, 1984, 1985, 1986, 1987).
 	 * Bonus: Compute the longest run of years of repeated digits and the longest run of years of non-repeated digits for [1000, 2013].
     * 			
     * @url:    http://www.reddit.com/r/dailyprogrammer/  
     */

function calc_years($fnum, $lnum)
{
	while ($fnum <= $lnum) 
	{
		
		if(count(count_chars($fnum, 1)) == 4)
		{
			echo $fnum . "<br>";
		}
		$fnum++;
	}
}
calc_years(1000, 2013);
