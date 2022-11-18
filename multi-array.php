<?php 

$data = ['x' =>'a', 'y' =>'b', 'z' => 'c'];

// outwill be  $output = [

//     ['0'=>'x', '1'=>'a'],
//     ['0'=>'y', '1'=>'b'],
//     ['0'=>'z', '1'=>'c'],
// ]

$output =[];

foreach ($data as $key => $value){
    $temp = [];

    $temp[] = $key;
    $temp[] = $value;

    $output[] = $temp;
}
echo "<pre>";
print_r($output);

echo "</pre>";
