<?php 

$ran = rand(1,100);
$i = 0;
do {
	fwrite(STDOUT, "Pick a number!");
	$userNum = trim(fgets(STDIN));
	if ($userNum > $ran){
		fwrite(STDOUT, "Too high! ");
		$i++;
	}
	if ($userNum < $ran){
		fwrite(STDOUT, "Too low! ");
		$i++;
	}
} while($userNum != $ran);

fwrite(STDOUT, "Good job!(only took {$i} amount of times)".PHP_EOL);