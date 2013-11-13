<?php
/**
     * Challenge # [Easy] (KeyboardShift)
     *
     * @author: Matt Schutz
     * @date:   04/25/2013
     * @desc:   You and a friend are working on a very important, bleeding-edge, 
     * research paper: "Computational Complexity of Sorting Pictures of Cats with 
     * Funny Text on the Web". The catch though is your friend wrote his part of 
     * the paper with his hands shifted to the right, meaning the top row of keys 
     * he used weren't "QWERTYUIOP" (regular US keyboard), but instead "WERTYUIOP{".
	 * 	Your goal is to take what your friend wrote, and convert it from his broken 
	 *	shifted text back into regular english!
     * 			
     * @url:    file://localhost/Users/mattschutz/Desktop/MAMP/DailyProgrammer/Easy/KeyboardShift/KeyboardShift.html  
     */
    
function shift_text($word)
{
	$correct_keys = str_split('qwertyuiop[asdfghjkl;zxcvbnm,QWERTYUIOP[ASDFGHJKL;ZXCVBNM,');
	$word = str_split($word);

		foreach ($word as $letter) {

			$match = array_search($letter,$correct_keys);
			echo $correct_keys[($match-1)];
			if (!ctype_alpha($letter) && $letter != '[' && $letter != ';' && $letter != '.' ) {
				echo $letter;
			}
		}
	
}
$secret_code = 'ejsy i[ nsnu 012301230';

echo shift_text($secret_code);
