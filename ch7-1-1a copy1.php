<h1>SID:C1122181150
   <BR>
NAME:fu rou </h1>
<p>
<?php

$scores = array(22,16,30,24);
$total =0;

foreach($scores as $score){
   echo "$score | ";
   $total+=$score;
}

echo"<br> Total:". $total . "<br>";
print_r(value: $scores);