<?php  session_start();
$_SESSION[$rand_num] = rand(1,100);

session_write_close();

include 'guess.php';
