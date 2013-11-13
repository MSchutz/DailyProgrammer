<?php 

/**
     * Challenge # [Easy] (Star Delete)
     *
     * @author: Matt Schutz
     * @date:   5/1/2013
     * @desc:   Write a function that, given a string, removes from the string any * character, or any character that's one to the left or one to the right of a * character. Examples:
	 *          "adf*lp" --> "adp"
	 *          "a*o" --> ""
	 *          "*dech*" --> "ec"
	 *          "de**po" --> "do"
	 *          "sa*n*ti" --> "si"
	 *          "abc" --> "abc"
     * 			
     * @url:    http://www.reddit.com/r/dailyprogrammer/  
     */
    

function star_delete($word)
{
	echo preg_replace('/.?\*.?/', '',$word);
}

star_delete('*hhelll*lo Woy* rld6*');