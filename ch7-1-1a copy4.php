<h1>SID:C1122181150
   <BR>
NAME:fu rou </h1>
<p></p>
<?php
$weekday = array(
   1 => "Mon",
   "Tue",
   "Wed",
   "Thu",
   "Fri",
   "Sat",
   "Sun"
);
for ($i = 1; $i <= count(value: $weekday); $i++) {
   echo " $i : $weekday[$i] ";
}