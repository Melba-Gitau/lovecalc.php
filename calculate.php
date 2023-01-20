<?php 
$name1 = $_POST["fname"];
$name2 =  $_POST["sname"];

$x =strlen($name1);
$y =strlen($name2);

$total= $x + $y;
if ($x > $y){
    $total -= 5;
}else{
   $total += 3;
}
$total = ($total * 42)/100; //3.25
if($total> 10){
    $total = 10;
}else{
    $total = round($total); //3
}

echo $name1;
echo "<br>";
echo $name2;
echo "<br>";
echo $total;

for($i = 0; $i < $total; $i++){
    
echo "<img src = download.jfif>";
}
 ?>