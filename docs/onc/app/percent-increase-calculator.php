<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Joey Mornin (jmornin@gateway.net) -->
<!-- Modified with permission by Ronnie T. Moore -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function findIncrease(form) {
var num1 = form.num1.value;
var num2 = form.num2.value;
return ((num2 - num1) / num1 * 100 + "%");
}
//  End -->
</script>


<center>
<form name=increaseform>
Enter the two numbers to determine the percent of increase:<p>
<input type=text name=num1 size=4> to <input type=text name=num2 size=4>
<input type=button value="Solve" onClick="this.form.answer.value = findIncrease(this.form);"><p>
The percentage of increase is <input type=text name=answer size=6>
</form>
</center>
