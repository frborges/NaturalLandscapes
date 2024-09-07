<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Nic Wolfe (Nic@TimelapseProductions.com) -->
<!-- Web Site:  http://fineline.xs.mw -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function translate(form) {
letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ .,?:-!";
morse = new Array(
".-","-...","-.-.","-..",".","..-.",
"--.","....","..",".---","-.-",".-..",
"--","-.","---",".--.","--.-",".-.",
"...","-","..-","...-",".--","-..-",
"-.--","--..",".-","-...","-.-.","-..",
".","..-.","--.","....","..",".---",
"-.-",".-..","--","-.","---",".--.",
"--.-",".-.","...","-","..-","...-",
".--","-..-","-.--","--.."," ",".-.-.-",
"--..--","..--..","---...","-....-","!");

form.output.value = "";
var input = form.input.value;
output = "";
for(count = 0; count < input.length; count++) {
daChar = input.charAt(count);
for (i = 0; i < letters.length; i++) {
if (daChar == letters.charAt(i)) {
output += morse[i];
break;
      }
   }
}
form.output.value = output;
}
//  End -->
</script>


<center>
<form>
<table>
<tr>
<td align=center>
Please type your phrase in plain English<br>
<textarea name=input cols=50 rows=4 wrap=physical></textarea>
</td>
</tr>
<tr>
<td align=center>
<input type=button value="Translate!" onClick="javascript:translate(this.form)">
</td>
</tr>
<tr>
<td align=center>
<textarea name=output cols=50 rows=4 wrap=physical></textarea>
</td>
</tr>
</table>
</form>
</center>
