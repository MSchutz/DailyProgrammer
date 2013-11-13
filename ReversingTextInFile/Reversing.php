<?php 
/**
     * Challenge # [Easy] (REversing text in file)
     *
     * @author: Matt Schutz
     * @date:   04/25/2013
     * @desc:   Write a program that reads text from a file, and then outputs the text to another file but with all the lines reversed and all the words in each line reversed.
     * 			
     * @url:    http://www.reddit.com/r/dailyprogrammer/Easy/ReversingTextInFile/ReversingTextInFile.html     */
    
function reverse_file($get_file, $put_file)
{
	$file_string = file_get_contents($get_file);
	$file_reversed = array_reverse(explode(" ", $file_string));
	$ass = implode(' ', $file_reversed);
	
	return file_put_contents($put_file, $ass);
}

reverse_file('Tyger.txt', 'Tyger2.txt');


////THis one works perfectly... not mine.
//
// $lines = array_reverse(file('Tyger.txt', FILE_IGNORE_NEW_LINES));
// file_put_contents('Tyger2.txt', implode(PHP_EOL, array_map(function($e)
// {
//     return implode(' ', array_reverse(explode(' ', $e)));
// }, $lines)));