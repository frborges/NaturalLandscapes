<?php
/* This calculator is your for free by Calendarscripts.info. You have no obligations for anything - you can modify, redistribute, sell it or whatever you want to do.
We will appreciate if you don't remove the link at the bottom, but that's not required. */

/* Feel free to modify the CSS and the texts below. - no problem at all. Just don't touch the PHP code or the specual codes which are surrounded with %% unless you know what you are doing. */

define("HOURS_STYLE", 24); // HERE you can type 12 if you prefer 12-hour format with AM/PM

$start=isset($_POST['startyear'])?"$_POST[startyear]-$_POST[startmonth]-$_POST[startday] $_POST[starthour]:$_POST[startminute]":date("Y-m-d H:i");

$end=isset($_POST['endyear'])?"$_POST[endyear]-$_POST[endmonth]-$_POST[endday] $_POST[endhour]:$_POST[endminute]":date("Y-m-d H:i",time()+3600*24);

?>
<style type="text/css">
.calculator_table
{
	font-size:11px;
	font-family:verdana, arial, sans-serif;
	border:2pt solid #4444FF;
	padding:25px;
	width:380px;	
}

label.calculator
{
	display:block;
	width:40px;
	float:left;
}
</style>

	<div class="calculator_table">
	<form method="post" onsubmit="return validateTimeDifferenceCalculator(this);">
	<p><label class="calculator">From:</label> <?=time_chooser("start",$start)?>&nbsp;<input type="button" value="Now" onclick="calculateNow(this.form);"></p>
	<p><label class="calculator">To:</label> <?=time_chooser("end",$end)?></p>
	<p>Calculation preciseness (round to):</p>
	<p align="center"><input type="radio" name="round" value="years" <?if(@$_POST['round']=='years') echo "checked"?>> Years &nbsp;
	<input type="radio" name="round" value="months" <?if(@$_POST['round']=='months') echo "checked"?>> Months &nbsp;
	<input type="radio" name="round" value="weeks" <?if(@$_POST['round']=='weeks') echo "checked"?>> Weeks &nbsp;
	<input type="radio" name="round" value="days" <?if(@$_POST['round']=='days' or !isset($_POST['round'])) echo "checked"?>> Days &nbsp;<br />
	<input type="radio" name="round" value="hours" <?if(@$_POST['round']=='hours') echo "checked"?>> Hours &nbsp;
	<input type="radio" name="round" value="minutes" <?if(@$_POST['round']=='minutes') echo "checked"?>> Minutes &nbsp;</p>
	<p><input type="checkbox" name="only_this_unit" value="1" <?php if(isset($_POST['only_this_unit']) and $_POST['only_this_unit']) echo "checked" ?>> Show result only in the selected unit.</p>
	<p align="center"><input type="submit" name="calculator_ok" value="Calculate"></p>
	</form>
	
	<?php
	if(!empty($_POST['calculator_ok']))
	{
		// calculate difference in seconds
		$start_time=mktime($_POST['starthour'], $_POST['startminute'], 0, 
							$_POST['startmonth'], $_POST['startday'], $_POST['startyear']);
							
		$end_time=mktime($_POST['endhour'], $_POST['endminute'], 0, 
							$_POST['endmonth'], $_POST['endday'], $_POST['endyear']);					
							
		$time_diff=$end_time-$start_time;
		
		// always calculate years				
		$years=floor($time_diff/(24*3600*365));	
		
		// calculate months
		$start_month=date("n",$start_time); 
		$end_month=date("n",$end_time);		
			
		if($end_month>=$start_month)
		{
			$months=$end_month - $start_month;
		}
		else
		{
			$months=(12-$start_month)+$end_month;
		}
		
		if(@$_POST['only_this_unit'])
		{
			// calculate only in the selected unit
			switch($_POST['round'])
			{
				case 'years':
					$years=number_format($years,0,"",",");
					$result="$years years";
				break;
				case 'months':
					$months+=$years*12;
					$months=number_format($months,0,"",",");
					$result="$months months";
				break;
				case 'weeks':
					$weeks=floor($time_diff/(24*3600*7));					
					$weeks=number_format($weeks,0,"",",");
					$result="$weeks weeks";
				break;
				case 'days':
					$days=floor($time_diff/(24*3600));					
					$days=number_format($days,0,"",",");
					$result="$days days";
				break;
				case 'hours':
					$hours=floor($time_diff/3600);					
					$hours=number_format($hours,0,"",",");
					$result="$hours hours";
				break;
				case 'minutes':
					$minutes=floor($time_diff/60);					
					$minutes=number_format($minutes,0,"",",");
					$result="$minutes minutes";
				break;
			}
		}
		else
		{	
							
			// calculate days
			$start_day=date("d", $start_time);
			$end_day=date("d", $end_time);
			
			if($end_month!=$start_month)
			{
				$numdays=date("t",$start_time);		
				$days=$numdays - $start_day + $end_day;
			}
			else $days=$end_day-$start_day;		
			
			if($_POST['startday']>$_POST['endday']) $months--;
			
			// calculate hours and minutes
			// if needed, reduce days with 1
			if(strtotime("$_POST[starthour]:$_POST[startminute]")>strtotime("$_POST[endhour]:$_POST[endminute]"))
			{
				$days--;
				$hours=24-$_POST['starthour']+$_POST['endhour'];
			}		
			else $hours=$_POST['endhour']-$_POST['starthour'];
			
			// minutes may reduce hours too
			if($_POST['startminute']>$_POST['endminute'])
			{
				$hours--;
				$minutes=60-$_POST['startminute']+$_POST['endminute'];
			}
			else $minutes=$_POST['endminute']-$_POST['startminute'];
			
			// based on this calculate weeks and change the number of days
			$weeks=floor($days/7);
			$days=fmod($days,7);	
			
			$result="";
			
			//display the result
			switch($_POST['round'])
			{
				case 'years':
					$result="$years years";
				break;
				
				case 'months':
					if($years>0) $result="$years years ";
					$result.="$months months";
				break;
				
				case 'weeks':
					if($years>0) $result="$years years ";
					if($months>0) $result.="$months months ";
					$result.="$weeks weeks";
				break;
				
				case "days":
					if($years>0) $result="$years years ";
					if($months>0) $result.="$months months ";
					if($weeks>0) $result.="$weeks weeks ";
					$result.="$days days";
				break;
				
				case 'hours':
					if($years>0) $result="$years years ";
					if($months>0) $result.="$months months ";
					if($weeks>0) $result.="$weeks weeks ";
					if($days>0) $result.="$days days ";
					$result.="$hours hours";
				break;
				
				case 'minutes':
					if($years>0) $result="$years years ";
					if($months>0) $result.="$months months ";
					if($weeks>0) $result.="$weeks weeks ";
					if($days>0) $result.="$days days ";
					if($hours>0) $result.="$hours hours ";
					$result.="$minutes minutes";
				break;
			}
		}
		
		$result="The difference between the two dates is <b>$result</b>.";
		?>
		<p><?=$result?></p>		
		<?php		
	}
	?>
	<p align="center"><a href="http://calendarscripts.info/debt-reduction-calculator.html">debt reduction calculator</a></p>
	</div>
	
<?php
//to print a date chooser - get name and value in mysql date format
function time_chooser($name,$value="")
{
	$months=array('','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug',
	'Sep','Oct','Nov','Dec');
	
	if(empty($value)) $value=date("Y-m-d H:i");
	
	$parts=explode(" ",$value);
	
	$dparts=explode("-",$parts[0]);
	
	$day=$dparts[2]+0;
	$month=$dparts[1]+0;
	$year=$dparts[0];
	
	$tparts=explode(":",$parts[1]);
	$hour=$tparts[0];
	$minute=$tparts[1];
	
	$chooser="";
	
	$chooser.="<select name=".$name."month>";
	for($i=1;$i<=12;$i++)
	{
		if($i==$month) $selected='selected';
		else $selected='';
		$chooser.="<option $selected value='$i'>$months[$i]</option>\n";
	}
	$chooser.="</select> / ";
	
	$chooser.="<select name=".$name."day>";
	for($i=1;$i<=31;$i++)
	{
		if($i==$day) $selected='selected';
		else $selected='';
		$chooser.="<option $selected value='$i'>$i</option>\n";
	}
	$chooser.="</select> / ";
	
	$chooser.="<select name=".$name."year>";
	for($i=(date("Y")-100);$i<=date("Y")+100;$i++)
	{
		if($i==$year) $selected='selected';
		else $selected='';
		$chooser.="<option $selected value='$i'>$i</option>\n";
	}
	$chooser.="</select> ";	
	
	$chooser.=" &nbsp; ";
	
	$chooser.="<select name='{$name}hour'>";
	
	for($i=0;$i<24;$i++)	
	{
		// add leading zero
		$i=str_pad((int) $i,2,"0",STR_PAD_LEFT);
		
		if($i==$hour) $selected="selected";
		else $selected="";
		$chooser.="<option $selected value='$i'>$i</option>\n";
	}
	
	$chooser.="</select> ";	
	
	$chooser.="<select name='{$name}minute'>";
	
	for($i=0;$i<=59;$i++)	
	{
		// add leading zero
		$i=str_pad((int) $i,2,"0",STR_PAD_LEFT);
		
		if($i==$minute) $selected="selected";
		else $selected="";
		$chooser.="<option $selected value='$i'>$i</option>\n";
	}
	
	$chooser.="</select> ";	
	
	return $chooser;
}
?>

<script language="javascript">
function calculateNow(frm)
{
	var today=new Date();	
	frm.startyear.value=today.getFullYear();		
	
	var month=today.getMonth()+1;	
	if(month<10) month="0"+month;
	
	var day=today.getDate();	
	if(day<10) day="0"+day;
	
	var hour=today.getHours();	
	if(hour<10) hour="0"+hour;
	
	var minute=today.getMinutes();	
	if(minute<10) minute="0"+minute;
	
	frm.startmonth.value=month;
	frm.startday.value=day;
	frm.starthour.value=hour;	
	frm.startminute.value=minute;
}

function validateTimeDifferenceCalculator(frm)
{
	var startDate=new Date(frm.startyear.value,frm.startmonth.value-1,frm.startday.value,frm.starthour.value,frm.startminute.value);

	var endDate=new Date(frm.endyear.value,frm.endmonth.value-1,frm.endday.value,frm.endhour.value,frm.endminute.value);

	if(startDate>endDate)	
	{
		alert("Please select start date that is before the end date");
		return false;
	}
	
	return true;
}
</script>