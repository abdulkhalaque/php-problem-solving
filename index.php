<?php 

//  numArray = [1,1,2,3,3,1,2,4,5,4,6,5,7,7];
// write a code to find number with less occurance .

// pseudocode 

// itemCountArray = [1=>3,2=>2, 3=>2, 4=>2, 5=>2, 6=>1, 7=>2];
// sort in Asending = [6=>1, 2=>2, 3=>2, 4=>2, 5=>2,7=>2,1=>3];
// get keys only from Array = [6, 2, 3, 4, 5, 7, 1];
// first Element = 6


$numArray = [1,1,2,3,3,1,2,4,5,4,6,5,7,7];
$itemCountArray = [];

foreach($numArray as $value){
    if($itemCountArray[$value]){
        $itemCountArray[$value]++;
    }
    else{
        $itemCountArray[$value] = 1;
    }
}

print_r($itemCountArray);

