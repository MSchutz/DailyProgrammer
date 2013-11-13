<?php 

/**
     * Challenge # [Easy] (PowerPlant Simulation)
     *
     * @author: Matt Schutz
     * @date:   05/26/2013
     * @desc:   A powerplant for the city of Redmond goes 
     * offline every third day because of local demands. 
     * Ontop of this, the powerplant has to go offline for 
     * maintenance every 100 days. Keeping things complicated, 
     * on every 14th day, the powerplant is turned off for 
     * refueling. Your goal is to write a function which 
     * returns the number of days the powerplant is 
     * operational given a number of days to simulate.
     * 			
     * @url:    http://www.reddit.com/r/dailyprogrammer/  
     */
   
    function off_days($days)
    {
    $n = 1;
    for($i = 0; $i < $days; $i++) {
        if($i % 3 != 0 && $i % 14 != 0 && $i % 100 != 0) {
            $n++;
        }
    }
    return $n;
    }

    echo off_days(60);