<?php

$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

$code="";

$str_num = "0123456789";

if(isset($_POST['count'])){

$count = $_POST['count'];

$num = (int)$_POST['num'];

 if($num == 1){

     $code = generate_string($str_num,$count);

 } 
if($num ==2) {


   $code = generate_string($str,$count); 

 //this is a comment - new comment 

}

if($num == 3) {
 
   $code = generate_string($str.$str_num,$count);
}

}
function   generate_string($arr,$count){

$temp = "";

for($i=0;$i<$count;$i++){
$r = rand(0,strlen($arr)-1);
$temp.= $arr[$r];

}
return $temp;
}

/*
   $alphasu = range('A', 'Z');
   $alphasm = range('a', 'z');
   $alphaplus = array_merge($alphasu, $alphasm);
   $a = implode(" ", $alphaplus);
 

   $numb = range(0, 9);
  
   
   
   $merge = array_merge($alphaplus,$numb);
 
   $c = implode(" ", $merge);


}*/






?>
