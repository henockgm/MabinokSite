<?php
$inputfile = fopen("input.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file

// array variable to store data strings read from the text file 
 $registers = [];

// reading strings of data line by line and storing them into the array variable 
$i=0;
while(!feof($inputfile)) {  
    $registers[$i] = fgets($inputfile);
    $i++;
}

// closing the open file pointer
fclose($inputfile);
?>