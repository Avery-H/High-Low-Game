<?php 

$ran = rand(1,100);

do {
	fwrite(STDOUT, "Pick a number!");
	$userNum = trim(fgets(STDIN));
	if ($userNum > $ran){
		fwrite(STDOUT, "Too high! ");
	}
	if ($userNum < $ran){
		fwrite(STDOUT, "Too low! ");
	}
} while($userNum != $ran);

fwrite(STDOUT, "Good job!".PHP_EOL);