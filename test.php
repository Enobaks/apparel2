<?php 

$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
$b = array(3,4,5,6,7);
$sum = 0;
  foreach($b as $a) {
    $sum+=$a;
  }
  echo $sum;
//   foreach($a as $key => $value){
//     $sum = 0;
//     foreach($value['addition_price'] as $v){
//          $sum += $v;
//     }
//     $array[$key] = $sum;
// }

?>