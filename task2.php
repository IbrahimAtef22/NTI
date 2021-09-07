<?php
//Write a PHP function to print the next character of a specific character
$cha = 'a';
$next_cha = ++$cha; 

if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
}
echo $next_cha."<br>";


//Write a PHP function to extract the file name from the following string
$path = "www.example.com/public_html/index.php";


echo basename($path) ."<br>";



?>