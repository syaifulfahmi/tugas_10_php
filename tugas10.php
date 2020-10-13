<?php
$data = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($data);
$data = bubble_sort($data);
print("<br><br> Setelah Disorting (Buble Sort) :<br>");
print_r($data);

function bubble_sort($data) {
  $n = count($data);
       for ($i = 1; $i < $n; $i++) {
           for ($j = $n - 1; $j >= $i; $j--) {
               if($data[$j-1] > $data[$j]) {
                   $tmp = $data[$j - 1];
                   $data[$j - 1] = $data[$j];
                   $data[$j] = $tmp;
               }
           }
       }

       return $data;
}

?>