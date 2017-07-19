<?php 

$ran = rand(1,100);
$i = 0;
do {
	fwrite(STDOUT, "Pick a number! ");
	$userNum = trim(fgets(STDIN));
	if (is_numeric($userNum)){
	if ($userNum > $ran){
		echo "Too high!" .PHP_EOL;
		$i++;
	}
	if ($userNum < $ran){
		echo "Too low!" .PHP_EOL;
		$i++;
	}
}else{
	echo "thats not a number friend. ";
}
} while($userNum != $ran && $i < 6);
if ($userNum == $ran){
fwrite(STDOUT, "Good job!(only took {$i} amount of times)".PHP_EOL);
}
else{
	echo "Too bad!" .PHP_EOL;
}