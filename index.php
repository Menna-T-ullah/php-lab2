<?php
//newline by \n
echo nl2br("hello \n world");
//builtin
// echo "<br>".strtolower("WHY");
// echo "<br>".strtoupper("why");
// echo "<br>".substr("why me!",3);
//readable sever format
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
//indexed array
$num=[12,45,10,25];
//sum
$sum=array_sum($num);
echo "Sum of the array : $sum";
//avg
$avg=$sum/count($num);
echo "<br>Avg of the array : $avg";
//sort
rsort($num);
echo "<br>sorted array:<br>";
foreach( $num as $value ) {
    echo "Value is $value <br />";
 }
 //associative array
 $data=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
 //ascending order sort by value
 asort($data);
 echo "Ascending order sort by value :<br>";
 foreach($data as $d => $d_value) {
    echo "Key=" . $d . ", Value=" . $d_value;
    echo "<br>";
  }
  //ascending order sort by Key
  ksort($data);
  echo "Ascending order sort by key :<br>";
  foreach($data as $d => $d_value) {
    echo "Key=" . $d . ", Value=" . $d_value;
    echo "<br>";
  }
  //descending order sorting by Value
  arsort($data);
  echo "Descending order sorting by Value :<br>";
  foreach($data as $d => $d_value) {
    echo "Key=" . $d . ", Value=" . $d_value;
    echo "<br>";
  }
  //descending order sorting by key
  krsort($data);
  echo "Descending order sorting by key :<br>";
  foreach($data as $d => $d_value) {
    echo "Key=" . $d . ", Value=" . $d_value;
    echo "<br>";
  }
?>