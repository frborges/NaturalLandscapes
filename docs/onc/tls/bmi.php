<?php
/* This calculator is your for free by Calendarscripts.info. You have no obligations for anything - you can modify, redistribute, sell it or whatever you want to do.
We will appreciate if you don't remove the link at the bottom, but that's not required. */

/* Feel free to modify the CSS and the texts below. - no problem at all. Just don't touch the PHP code or the specual codes which are surrounded with %% unless you know what you are doing. */

$firsttext="Your Body Mass Index (BMI) is %%BMI%%. This means your weight is within the %%BMIMSG%% range.";

$normaltext="You seem to keep your weight normal. Well done!";

$lowertext="Your current BMI is lower than the recommended range of <strong>18.5</strong> to <strong>24.9</strong>. <br>To be within the right range for your height, you should weigh between <strong>%%LOWERLIMIT%% lbs</strong> / <strong>%%LOWERLIMITKG%% kg</strong> and <strong>%%UPPERLIMIT%% lbs</strong> / <strong>%%UPPERLIMITKG%% kg</strong>";

$uppertext="Your current BMI is greater than the recommended range of <strong>18.5</strong> to <strong>24.9</strong>. <br>To be within the right range for your height, you should weigh between <strong>%%LOWERLIMIT%% lbs</strong> / <strong>%%LOWERLIMITKG%% kg</strong> and <strong>%%UPPERLIMIT%% lbs</strong> / <strong>%%UPPERLIMITKG%% kg</strong>";
?>
<style type="text/css">
.calculator_table
{
	font-size:11px;
	font-family:verdana, arial, sans-serif;
	padding:25px;
}
</style>
<?php
if(!empty($_POST['calculator_ok']))
{
	$height=$_POST['height'];
	$bmi=($_POST['weight']*703) / ($height*$height);
	$bmi=number_format($bmi,1,".","");
	
	// prepare message for the user
	if($bmi<=18.5)
	{
		$bmimsg="Underweight";
	}
	
	if($bmi>18.5 and $bmi<=24.9)
	{
		$bmimsg="Normal";	
	}
	
	if($bmi>=25 and $bmi<=29.9)
	{
		$bmimsg="Overweight";			
	}
	
	if($bmi>=30)
	{
		$bmimsg="Obese";		
	}
	
	// what is the weight range?
	if($bmimsg!='Normal')
	{
		$lowerlimit=number_format(( 18.5 * ($height*$height) ) / 703);
		$lowerlimitkg=number_format($lowerlimit*0.453,1,".","");
		
		$upperlimit=number_format(( 24.9 * ($height*$height) ) / 703);
		$upperlimitkg=number_format($upperlimit*0.453,1,".","");
	}
	
	//prepare texts
	$firsttext=str_replace("%%BMI%%",$bmi,$firsttext);
	$firsttext=str_replace("%%BMIMSG%%",$bmimsg,$firsttext);
	$lowertext=str_replace("%%LOWERLIMIT%%",$lowerlimit,$lowertext);
	$lowertext=str_replace("%%LOWERLIMITKG%%",$lowerlimitkg,$lowertext);
	$lowertext=str_replace("%%UPPERLIMIT%%",$upperlimit,$lowertext);
	$lowertext=str_replace("%%UPPERLIMITKG%%",$upperlimitkg,$lowertext);
	$uppertext=str_replace("%%LOWERLIMIT%%",$lowerlimit,$uppertext);
	$uppertext=str_replace("%%LOWERLIMITKG%%",$lowerlimitkg,$uppertext);
	$uppertext=str_replace("%%UPPERLIMIT%%",$upperlimit,$uppertext);
	$uppertext=str_replace("%%UPPERLIMITKG%%",$upperlimitkg,$uppertext);
		
	//the result is here
	?>
	<div class="calculator_table">
	<p><?=$firsttext?></p>
	<?php	
	switch($bmimsg)
    {	
       case 'Normal':
     		// you can echo here if you want for normal weight people
       break;
       
       case 'Underweight':       		
       		echo $lowertext;
       break;
                                         	
       default:
       		echo $uppertext;
        break;                              
      }
      ?>
      
      <p align="center"><a href="#" onclick="javascript:history.back();">Calculate again</a></p>
      </div>
      <?php
}
else
{
	//the calculator comes here
	?>
	<form method="post">
	<table class="calcultor_table" align="center">
	<tr><td>Your Weight:</td>
	<td><select name="weight">
     <?php
     for($i=50;$i<=600;$i++)
     {
	    $kg=number_format($i*0.453,1,".","");
	    echo "<option value='$i'>$kg kg / $i lbs</option>";
     }
     ?>                                                        
     </select></td></tr>
	<tr><td>Your Height:</td>
	<td><select name="height">
	<?php
     for($i=50;$i<=88;$i++)
     {
	    $feets=floor($i/12);
	    $in=$i%12;
	    $cm=number_format($i*2.54);
	    echo "<option value='$i'>$cm cm / $feets ft $in in</option>";
     }
     ?>                                                        
	</select></td></tr>
	<tr><td colspan="2" align="center">
	<input type="hidden" name="calculator_ok" value="ok">
	<input type="submit" value="Are You Overweight?">
	</td></tr>	
	</table>
	</form>	
	<?php
}
?>