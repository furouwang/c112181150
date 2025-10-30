<h1>SID:C1122181150
   <BR>
NAME:fu rou </h1>
<p></p>
<?php
$arr["color"]="紅色";
$arr['name']="furou";
$arr["shape"]="circle";
foreach($arr as $k=>$v){
   echo "$k~$v~<hr>";
}
echo "<br>";
print_r(value:$arr);