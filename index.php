<!-- style docs -->
<link rel="stylesheet" href="splide.min.css">
<link rel="stylesheet" href="style.css">
<!-- script docs -->
<script src="jquery.min.js"></script>
<!-- start sorce codes -->
<center>
<div class="splide">
<div class="splide__track">
<ul class="splide__list">
<?php
// current date information
$month = date('m');
$year  = date('Y');
$day   = date('d');

// calc how many days in a month
$i = cal_days_in_month(CAL_GREGORIAN, $month, $year); 
// calendar last day is today ($n start from today)
$n = $day;
while ($n <= $i) { 

#loop day 
$currentdate = $year.'-'.$month.'-'.$n; ?>
<!-- THIS MONTH -->
<li class="splide__slide day" date='<?=$currentdate ?>'>
	<center>
		<span style="cursor: pointer;">
<?php 
$wd= date('w', strtotime($currentdate));
	 if($wd == 0){echo 'Sun';}
elseif($wd == 1){echo 'Mon';}
elseif($wd == 2){echo 'Tue';}
elseif($wd == 3){echo 'Wed';}
elseif($wd == 4){echo 'Thu';}
elseif($wd == 5){echo 'Fri';}
elseif($wd == 6){echo 'Sat';}
?>
<br>
<?=$month.'/'.$n ?> <!-- month day -->
		</span>
	</center>
</li>
<?php
$n += 1;
}

$nextDate  = date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 months'));
$newMonth = date("m", strtotime($nextDate));
$newYear = date("Y", strtotime($nextDate));
$i = cal_days_in_month(CAL_GREGORIAN, $newMonth, $newYear); 
$n = 1;
while ($n <= $i) { 
$currentdate = $newYear.'-'.$newMonth.'-'.$n;
?>
<!-- THIS MONTH END -->
<!-- NEXT MONTH -->
<li class="splide__slide day" date='<?=$currentdate ?>'>
	<center>
		<span style="cursor: pointer;">
<?php 
$wd= date('w', strtotime($currentdate));
 if($wd == 0){echo 'Sun';}
elseif($wd == 1){echo 'Mon';}
elseif($wd == 2){echo 'Tue';}
elseif($wd == 3){echo 'Wed';}
elseif($wd == 4){echo 'Thu';}
elseif($wd == 5){echo 'Fri';}
elseif($wd == 6){echo 'Sat';}
?>
<br>
<?=$newMonth.'/'.$n ?> <!-- month day -->
		</span>
	</center>
</li>
<?php $n += 1; }?>
<!-- NEXT MONTH END -->

</ul>
</div>
</div>
</center>
<!-- script codes -->
<script src="main.js"></script>
<script src="splide.min.js"></script>
