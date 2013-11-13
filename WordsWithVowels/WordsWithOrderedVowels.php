<?php 
/**
     * Challenge #122 [Easy] Words With Ordered Vowels
     *
     * @author: Matt Schutz
     * @date:   03/18/2013
     * @desc:   Find words in a word list that contain all the vowels in 
     * 			alphabetical order, non-repeated, where vowels are defined as A E I O U Y.
     * @url:    http://www.reddit.com/r/dailyprogrammer/comments/1aih0v/031813_challenge_122_easy_words_with_ordered/   
     */
    
function get_words($words)
{
	$matches = array();
	preg_match_all('/\b[^a^e^i^o^u^y\s]*a[^a^e^i^o^u^y\s]*e[^a^e^i^o^u^y\s]*i[^a^e^i^o^u^y\s]*o[^a^e^i^o^u^y\s]*u[^a^e^i^o^u^y\s]*y[^a^e^i^o^u^y\s]*\b/', $words, $matches);
	print_r($matches);
	
	
}

$all_words = file_get_contents('./enable1.txt');
//echo $all_words;
get_words($all_words);
                                     