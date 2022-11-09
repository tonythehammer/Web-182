<?php

$string = "Madam I'm Adam";
$originalString="Madam I'm Adam";
$unwantedPunctuation = [",", "'", ".", " "]; 
// eliminate the space

$string = str_replace($unwantedPunctuation, "",$string);
// same case
$string = strtolower($string);
// need to remove punctuation
// 1 regular expression
// 2 php junctions

if($string == strrev($string)){
  echo "$originalString is a palindrome.";
}
else{
  echo "$originalString is not a palindrome.";
}

?>