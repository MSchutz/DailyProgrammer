<?php 
/**
     * Challenge # [Easy] (Sleep Cycle Estimator)
     *
     * @author: Matt Schutz
     * @date:   05/01/2013
	 *	@desc:	The human body goes through 90 minute sleep cycles during the night, and you feel more refreshed if you wake up at the end of a sleep cycle than if you wake up during a sleep cycle. The challenge is to make a program that takes a wake-up time and outputs the possible times to fall asleep so that you will wake up at the end of a sleep cycle.
	 *			Example:
	 *			Input (Wake-up time): 6:15 AM
	 *			Output (when to go to sleep): 9:15 PM, 10:45 PM, 12:15 AM, or 1:45 AM
	 *			Bonus 1: Be able to input a sleep time and output potential wake-up times
	 *			Bonus 2: Account for how long it takes to fall asleep
     * 			
     * @url:    http://www.reddit.com/r/dailyprogrammer/  
     */
    

function sleep_cycle($wake_up)
{
	$sleep_time = strtotime($wake_up) - 9 * 60 * 60;
	
	for ($i=0; $i <= 3; $i++) 
	{ 
		echo date("g:ia", $sleep_time) . "<br>";
		$sleep_time = $sleep_time + 90 * 60;
	}
}
sleep_cycle('6:15am');
