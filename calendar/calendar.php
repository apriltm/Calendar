<!-- PHP SCRIPT FILE !!! -->

<div class="calendarTable">
<?php
echo '<div class="header"></div>';
echo '<img style="top: 90px; right: 20px; position: absolute; width: 300; height: 300px;" src="https://78.media.tumblr.com/c4c7665b34f1fedf3a645ff4f100ce4a/tumblr_opuxzzANeP1ub0sqao4_1280.png" align="center"/>';
echo '<img style="top: 70px; left: 20px; position: absolute; width: 300; height: 300px; -webkit-transform: scaleX(-1);
    transform: scaleX(-1);" src="https://78.media.tumblr.com/357a976d6addac7560050660bc1c45b2/tumblr_opuxzzANeP1ub0sqao2_1280.png" align="center"/>';

echo "<br/>";
echo "<txt>My Calendar</txt>";
echo "<br/>Today is " , date("l, F dS Y");
//echo "<br/>" , cal_days_in_month(CAL_GREGORIAN, 4, 2018);
echo '<div class"lineDown">';
echo '</div>';

?>
</div>
<div class="calendarBox">
<?php
function spanDays($days){
	$list = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	/*for($i = 0; $i < 7; $i++){
		$list[$i];
	}*/
	echo "<u>";
	echo $list[$days] . "\n";
	echo "</u>";
}

$startMonth = 1; //assume this is january
$startDay = 1; //assume every month starts with 1

for($i = 0; $i < 7; $i++){
spanDays($i);
} 

?>
	
</div>

<div class="numDaysBox">
<?php
for($startDay = 1; $startDay <= cal_days_in_month(CAL_GREGORIAN, date("n"), date("Y")); $startDay++){
	echo '<ul>';
	echo '<li>';
	echo $startDay . " ";
	echo '<li>';
	echo '</ul>';
}

	echo "<style>.cav { background-image:url('https://78.media.tumblr.com/tumblr_lookacsI371qi1tqc.gif');
	background-repeat: repeat-x;
	bottom: 0px;
	position: absolute;
	z-index: 999;
	height: 100px;
	width: 99%; -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg); }</style>";
  echo '<div class="cav">';
  echo '</div>';

  ?></div>

<html>
<head><title>Calendar Test</title>
<link rel="stylesheet" type="text/css" href="calendarStyle.css">

</head>
<body>
</body>
</html>
