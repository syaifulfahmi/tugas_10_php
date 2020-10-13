<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);
$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);

function bubble_sort($arr) {
  $n = count($arr);
       for ($i = 1; $i < $n; $i++) {
           for ($j = $n - 1; $j >= $i; $j--) {
               if($arr[$j-1] > $arr[$j]) {
                   $tmp = $arr[$j - 1];
                   $arr[$j - 1] = $arr[$j];
                   $arr[$j] = $tmp;
               }
           }
       }

       return $arr;
}

?>