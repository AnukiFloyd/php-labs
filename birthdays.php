<?php

 
$data = [
	['name' => 'John',  'bday' => '13 September 1997'],
	['name' => 'Ann',   'bday' => '2 January 2013'],
	['name' => 'Nancy', 'bday' => '9 may 1992'],
	['name' => 'Peter', 'bday' => '10 September 1995'],
	['name' => 'James', 'bday' => '12 August 1998'],
];


echo "<ul>";

for($i=0; $i<count($data); $i++){

	$y = $cc->years;

	$y = floor((time()-strtotime($data[$i]["bday"]))/60/60/24/365);

	echo "<li>" . $data[$i]["name"]. " is " . $y . " y/o</li>";
}



echo "</ul>";
