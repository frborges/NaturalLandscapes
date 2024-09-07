<!-- Paste this code into the CSS section of your HTML document  -->
 
#example {
  border: 2px solid #FFCF31;
  color: #fff;
  background-color: #00009C;
}
 
#example td {
  border: none;
}
 
 
 
<!-- Paste this code into an external JavaScript file named: byte.js  -->
 
/* This script and many more are available free online at
The JavaScript Source :: http://javascript.internet.com
Created by: Uncle Jim :: http://jdstiles.com/javamain.html */
 
function convert(f) {
  f.kb.value=Math.round(f.byte.value/1024*100000)/100000
  f.mb.value=Math.round(f.byte.value/1048576*100000)/100000
  f.gb.value=Math.round(f.byte.value/1073741824*100000)/100000
}
 
function convertkb(f) {
  f.byte.value=Math.round(f.kb.value*1024*100000)/100000
  f.mb.value=Math.round(f.kb.value/1024*100000)/100000
  f.gb.value=Math.round(f.kb.value/1048576*100000)/100000
}
 
function convertmb(f) {
  f.byte.value=Math.round(f.mb.value*1048576*100000)/100000
  f.kb.value=Math.round(f.mb.value*1024*100000)/100000
  f.gb.value=Math.round(f.mb.value/1024*100000)/100000
}
 
function convertgb(f) {
  f.byte.value=Math.round(f.gb.value*1073741824*100000)/100000
  f.kb.value=Math.round(f.gb.value*1048576*100000)/100000
  f.mb.value=Math.round(f.gb.value*1024*100000)/100000
}
 
 
 
 
<!-- Paste this code into the HEAD section of your HTML document.
     You may need to change the path of the file.  -->
 
<script type="text/javascript" src="byte.js"></script>
 
 
 
<!-- Paste this code into the BODY section of your HTML document  -->
 
<div align=center>
<form>
<table id="example" cellpadding="3" cellspacing="3">
<tr> 
<td align="center">Byte</td>
<td align="center">Kilobyte</td>
<td align="center">Megabyte</td>
<td align="center">Gigabyte</td>
</tr>
<tr> 
 
<td align="center"> 
<input type="text" size="10" name="byte" value="0"></td>
<td align="center"><input type="text" size="10" name="kb" value="0"></td>
<td align="center"><input type="text" size="10" name="mb" value="0"></td>
<td align="center"><input type="text" size="10" name="gb" value="0"></td>
</tr>
<tr> 
<td align="center"><input type="button" name="B2" value="   >   "
        onClick="convert(this.form)"></td>
<td align="center"><input type="button" name="B22" value="   < >   "
        onClick="convertkb(this.form)"></td>
<td align="center"><input type="button" name="B23" value="   < >   "
        onClick="convertmb(this.form)"></td>
<td align="center"><input type="button" name="B24" value="   <   "
        onClick="convertgb(this.form)"></td>
</tr>
</table>
</form>
</div>
<p><div align="center">
<font face="arial, helvetica" size"-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</div><p>