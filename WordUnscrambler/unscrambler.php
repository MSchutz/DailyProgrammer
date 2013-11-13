<?php
function get_contents($file)
{
	$scram_file = file_get_contents($file);
	$scram = explode("\n", $scram_file);
	return $scram;
}


function find_word($swords, $uwords){
	foreach ($swords as $word) {
		$sword = $word;
		echo "Scrambled: " . $sword . "<br>";
			foreach ($uwords as $skey) {
				$sval = $skey;

				if (count_chars($sval) == count_chars($sword)) {
					echo "Unscrambled: " . $sval . "<br><br>"; 
				}
				
			}
		}
}




$scrambled   = get_contents('wordlist.txt');
$unscrambled = get_contents('unscrambled.txt');

find_word($scrambled, $unscrambled);





 ?>