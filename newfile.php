<?php
for($i = 1; $i<=50; $i++){
	if($i%2==1){
		echo $i.' ';
	}
}

echo '<br><br><br>';

$j = date('N');
echo $j;

echo '<br><br><br>';

$data[0] = 2;
$data[1] = 3;

for($k = 4; $k<=100; $k++){
	for($l = 2; $l<=$k/2+1; $l++){
		$m = 0;
		if($k%$l == 0){
			$m = 1;
			break;
		}
	}
	if($m == 0){
		$data[] = $k;
	}
}
echo count($data).'<br>';
for($n = 0; $n < count($data); $n++){
	echo $data[$n].' ';
}
?>