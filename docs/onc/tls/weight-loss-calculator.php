<?php
/* This calculator is your for free by Calendarscripts.info. You have no obligations for anything - you can modify, redistribute, sell it or whatever you want to do.
We will appreciate if you don't remove the link at the bottom, but that's not required. */

/* Feel free to modify the CSS and the texts below. - no problem at all. Just don't touch the PHP code or the specual codes which are surrounded with %% unless you know what you are doing. */
error_reporting(E_ALL&(~E_NOTICE));
?>
<style type="text/css">
.calculator_div
{
	font-family:verdana, arial, sans-serif;
	padding:25px;
	width:450px;
	margin:auto;
}

label
{
	display:block;
	float:left;
	width:150px;		
}

.warning
{
	background:yellow;
	border:1pt solid red;
	padding:5px;
	font-weight:bold;
}
</style>
<?php
if(!empty($_POST['calculator_ok']))
{
	// save in session to be used when the link "calculate again" is clicked
	foreach($_POST as $key=>$var) $_SESSION["calc_".$key]=$var;

	// calculate height in incles 
	$height_in=$_POST["height_ft"]*12+$_POST["height_in"];	
	
	// calculate BMR
	if($_POST["gender"]=='male')
	{
		$BMR=66 + (6.3 * $_POST["weight_lb"]) + (12.9 * $height_in) - (6.8 * $_POST["age"]);			
	}
	else
	{
		$BMR=655 + (4.3 * $_POST["weight_lb"]) + (4.7 * $height_in) - (4.7 * $_POST["age"]);
	}
	
	// calculate activity
	$activity=$BMR*$_POST["activity"];
	
	// calories to maintain current weight
	$calories=round($BMR+$activity);
	
	// how many pounds do you want to lose per day?
	$pounds_daily=round($_POST["lose_lb"]/$_POST["days"],2);
	
	if($pounds_daily>0.3) $high_risk_weight=true;
	else $high_risk_weight=false;
	
	// how much less calories does that mean?
	$calories_less=round($pounds_daily*3500,0);
	
	// how much calories daily does that mean
	$calories_daily=$calories-$calories_less;
	
	// is it too risky?
	if($calories_daily<1200) $high_risk_calories=true;
	else $high_risk_calories=false;

	//the result is here
	?>
	<div class="calculator_div">
	<?php
	if($high_risk_weight)
	{
		?>
		<div class="warning">Warning: your goal requires you to lose <?=number_format($pounds_daily*7)?> pounds per week. This implies a high risk for your health and is not recommended!</div>
		<?php
	}
	if($high_risk_calories)
	{
		?>
		<div class="warning">Warning: your goal requires you to lose <?=$calories_less?> calories per day, which means you are supposed to intake only <?=$calories_daily?> calories daily. This implies a high risk for your health and is not recommended!</div>
		<?php
	}
	?>
	<p>Your goal is to lose <b><?=$_POST["lose_lb"]?> lb</b> / <b><?=$_POST["lose_kg"]?> kg</b> for <b><?=$_POST["days"]?> days</b>. </p>
	<p>To maintain your current weight, your safe daily calories intake is around <b><?=$calories?> calories</b></p>
	<p>To reach your goal, you will need to reduce your daily calories intake with <b><?=$calories_less?> calories</b>, which means to get <b><?=$calories_daily?> calories daily</b>.</p>
	<p align="center"><a href="http://<?=$_SERVER['HTTP_HOST'];?><?=$_SERVER['REQUEST_URI']?>">Calculate again</a></p>
    </div>
    <?php
}
else
{
	//the calculator comes here
	?>
	<div class="calculator_div">
	<form method="post" onsubmit="return validateCalculator(this);">
	<p><label for="yourAge">Your age:</label> <input type="text" name="age" id="yourAge" size="6" value="<?=$_SESSION["calc_age"]?>"></p>
	<p><label for="yourGender">Your gender:</label> <select name="gender">
	<option value="male" <?if($_SESSION["calc_gender"]=="male") echo "selected"?>>Male</option>
	<option value="female" <?if($_SESSION["calc_gender"]=="female") echo "selected"?>>Female</option>
	</select></p>
	<p><label>Your height:</label> <input type="text" name="height_ft" size="4" onkeyup="calculateHeight(this);" value="<?=$_SESSION["calc_height_ft"]?>"> ft &amp; <input type="text" name="height_in" size="4" onkeyup="calculateHeight(this);" value="<?=$_SESSION["calc_height_in"]?>"> in <b>OR</b> <input type="text" name="height_cm" size="5" onkeyup="calculateHeight(this);" value="<?=$_SESSION["calc_height_cm"]?>"> cm</p>
	<p><label>Your weight:</label> <input type="text" name="weight_lb" size="4" onkeyup="calculateWeight(this);" value="<?=$_SESSION["calc_weight_lb"]?>"> lbs <b>OR</b> <input type="text" name="weight_kg" size="4" onkeyup="calculateWeight(this);" value="<?=$_SESSION["calc_weight_kg"]?>"> kg</p>
	<p><label for="dailyActivity">Daily activity level:</label>
	<select name="activity" id="dailyActivity">
	<option value="0.2" <?if($_SESSION["calc_activity"]=="0.2") echo "selected"?>>No sport/exercise</option>
	<option value="0.375" <?if($_SESSION["calc_activity"]=="0.375") echo "selected"?>>Light activity (sport 1-3 times per week)</option>
	<option value="0.55" <?if($_SESSION["calc_activity"]=="0.55") echo "selected"?>>Moderate activity (sport 3-5 times per week)</option>
	<option value="0.725" <?if($_SESSION["calc_activity"]=="0.725") echo "selected"?>>High activity (everyday exercise)</option>
	<option value="0.9" <?if($_SESSION["calc_activity"]=="0.9") echo "selected"?>>Extreme activity (professional athlete)</option>
	</select></p>
	<p><label>How much weight you wish to lose?</label> <input type="text" name="lose_lb" size="4" onkeyup="calculateWeight(this);" value="<?=$_SESSION["calc_lose_lb"]?>"> lbs <b>OR</b> 
	<input type="text" name="lose_kg" size="4" onkeyup="calculateWeight(this);" value="<?=$_SESSION["calc_lose_kg"]?>"> kg</p>
	<p><label for="daysDiet">How much time do you have?</label> <input type="text" name="days" size="8" id="daysDiet" value="<?=$_SESSION["calc_days"]?>"> days</p>
	<div style="text-align:center;clear:both;"><input type="submit" value="Calculate!"></div>
	<input type="hidden" name="calculator_ok" value="1">
	</form>	

	</div>
	<?php
}
?>

<script language="javascript">
function validateCalculator(frm)
{
	var age=frm.age.value;
	if(isNaN(age) || age<6 || age > 125 || age=="")
	{
		alert("Please enter your age, numbers only.");
		frm.age.focus();
		return false;
	}
	
	var height_ft=frm.height_ft.value;
	if(isNaN(height_ft) || height_ft<0) height_ft="";
	var height_in=frm.height_in.value;
	if(isNaN(height_in) || height_in<0) height_in="";
	var height_cm=frm.height_cm.value;
	if(isNaN(height_cm) || height_cm<0) height_cm="";
	
	if(height_ft=="" && height_cm=="" && height_in=="")
	{
		alert("Please enter your height, numbers only");
		return false;
	}
	
	var weight_lb=frm.weight_lb.value;
	if(isNaN(weight_lb) || weight_lb<0) weight_lb="";
	var weight_kg=frm.weight_kg.value;
	if(isNaN(weight_kg) || weight_kg<0) weight_kg="";
	
	if(weight_kg=="" && weight_lb=="")
	{
		alert("Please enter your weight, numbers only.");		
		return false;
	}
	
	var lose_lb=frm.lose_lb.value;
	if(isNaN(lose_lb) || lose_lb<0) lose_lb="";
	var lose_kg=frm.lose_kg.value;
	if(isNaN(lose_kg) || lose_kg<0) lose_kg="";
	
	if(lose_kg=="" && lose_lb=="")
	{
		alert("Please enter how much weight you want to lose, numbers only.");		
		return false;
	}
	
	var days=frm.days.value;
	if(isNaN(days) || days<0 || days=="")
	{
		alert("Please enter how many days you have to reach the goal, numbers only.");
		frm.days.focus();
		return false;
	}
}

function calculateHeight(fld)
{
	if(fld.name=="height_in" || fld.name=="height_ft")
	{
		// calculate height in inches
		if(isNaN(fld.form.height_in.value) || fld.form.height_in.value=="") inches=0;
		else inches=fld.form.height_in.value;
		
		if(isNaN(fld.form.height_ft.value) || fld.form.height_ft.value=="") feet=0;
		else feet=fld.form.height_ft.value;
		
		inches=parseInt(parseInt(feet*12) + parseInt(inches));
		
		h=Math.round(inches*2.54);
		
		fld.form.height_cm.value=h;
	}
	else
	{
		// turn cm into feets and inches
		if(isNaN(fld.value) || fld.value=="") cm=0;
		else cm=fld.value;
		
		totalInches=Math.round(cm/2.54);
		inches=totalInches%12;		
		feet=(totalInches-inches)/12;
		
		fld.form.height_ft.value=feet;
		fld.form.height_in.value=inches;
	}
}

function calculateWeight(fld)
{
	if(fld.name=="weight_lb" || fld.name=="lose_lb")
	{
		// calculate in kg
		if(isNaN(fld.value) || fld.value=="") w=0;
		else w=fld.value;
		
		wKg=Math.round(w*0.453*10)/10;
		
		if(fld.name=="weight_lb") fld.form.weight_kg.value=wKg;
		else fld.form.lose_kg.value=wKg;
	}
	else
	{
		// calculate in lbs
		if(isNaN(fld.value) || fld.value=="") w=0;
		else w=fld.value;
		
		wP=Math.round(w*2.2);
		
		if(fld.name=='weight_kg') fld.form.weight_lb.value=wP;
		else fld.form.lose_lb.value=wP;
	}
}
</script>