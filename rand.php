<?php

function arand($x,$y) { 

 $r = [];

 for($i=0;$i<10;$i++){
   $r[] = rand($x,$y);

  }
  rsort($r);
 
  array_unique($r);
 
  return $r;

}

$a = arand(1,100);


?>

