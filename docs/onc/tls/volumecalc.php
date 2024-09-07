  <script language="javascript"
 type="text/javascript">
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!-- Original: Craig Blanchette (Sk8dogg4@aol.com) -->
<!-- Web Site: http://craiga.topcities.com -->
<!-- Begin
function findarea(){
radius = document.FORM1.areainput.value;
radius2 = eval(radius*radius);
answer = eval(Math.PI*Math.pow(radius,2))
roundanswer = Math.round(answer);
document.FORM1.codegenerator.value =
'A = PIR^2\r'
+'A = PI x '+radius+'*'+radius+' \r'
+'A = PI x '+radius2+'\r'
+'A = '+answer+' \r'
+'A = '+roundanswer;
}
function findcircum(){
radiuscir = document.FORM1.areainput.value;
diameter = eval(radiuscir*2);
ciranswer = eval(radiuscir*2*Math.PI);
cirRoundanswer = Math.round(ciranswer);
document.FORM1.codegenerator.value =
'C = 2PIR\r'
+'C = PI x 2 x '+radiuscir+' \r'
+'C = PI x '+diameter+' \r'
+'C = '+ciranswer+' \r'
+'C = '+cirRoundanswer;
}
function rectarea(){
side1 = document.FORM1.rect1.value;
side2 = document.FORM1.rect2.value;
rectanswer = eval(side1*side2);
roundrect = Math.round(rectanswer);
document.FORM1.codegenerator.value =
'A = B x H\r'
+'A = '+side1+' x '+side2+' \r'
+'A = '+rectanswer+' \r'
+'A = '+roundrect
}
function cylarea(){
cylradius = document.FORM1.areainput.value;
sqradius = eval(cylradius*cylradius);
cylheight = document.FORM1.cylinderheight.value;
cylhr = eval(cylheight*sqradius);
cylvolume = eval(Math.PI*cylradius*cylradius*cylheight);
roundcyl = Math.round(cylvolume);
document.FORM1.codegenerator.value =
'V = PIR^2H\r'
+'V = PI x '+cylradius+' x '+cylradius+' x H \r'
+'V = PI x '+sqradius+' x H\r'
+'V = PI x '+sqradius+' x '+cylheight+' \r'
+'V = PI x '+cylhr+' \r'
+'V = '+cylvolume+' \r'
+'V = '+roundcyl;
}
function resetval(){
document.FORM1.areainput.value = 'Radius of Cirlce/Cylinder';
document.FORM1.codegenerator.value = '';
document.FORM1.cylinderheight.value = 'Height of Cylinder';
document.FORM1.rect1.value = 'Base';
document.FORM1.rect2.value = 'Height';
}
// End -->
  </script>
  <link rel="stylesheet"
 href="conlot.css" type="text/css">
  <script language="javascript"
 type="text/javascript">
<!--
  </script>
</head>
<body onload="show5();">
<script><!--
an=navigator.appName;sr='http://x3.extreme-dm.com/';srw="na";srb="na";d=document;r=41;function pr(n) {
d.write("<img src=\""+sr+"n\/?tag=mescon&p=http%3A%2F%2Fconvertalot%2Ecom&j=y&srw="+srw+"&srb="+srb+"&l="+escape(d.referrer)+"&rs="+r+"\" height=1 width=1>");}//-->
</script>
<script language="javascript1.2"><!--
s=screen;srw=s.width;an!="Netscape"?srb=s.colorDepth:srb=s.pixelDepth//-->
</script>
<script><!--
pr()//-->
</script>
<noscript><img
src=http://x3.extreme-dm.com/z/?tag=mescon&p=http%3A%2F%2Fconvertalot%2Ecom&j=n
height=1 width=1></noscript>
<script type="text/javascript"><!--
EXref="";top.document.referrer?EXref=top.document.referrer:EXref=document.referrer;//-->
</script>
<script type="text/javascript"><!--
EXs=screen;EXw=EXs.width;navigator.appName!="Netscape"?
EXb=EXs.colorDepth:EXb=EXs.pixelDepth;
navigator.javaEnabled()==1?EXjv="y":EXjv="n";
EXd=document;EXw?"":EXw="na";EXb?"":EXb="na";
location.protocol=="https:"?EXprot="https":EXprot="http";
EXref?EXref=EXref:EXref=EXd.referrer;
EXd.write("<img src="+EXprot+"://nht-2.extreme-dm.com",
"/n2.g?login=oncon&amp;url="+escape(document.URL)+"&amp;pv=&amp;",
"jv="+EXjv+"&amp;j=y&amp;srw="+EXw+"&amp;srb="+EXb+"&amp;",
"l="+escape(EXref)+" height=1 width=1>");//-->
</script>
<noscript><div
id="nneXTReMe"><img height="1" width="1" alt=""
src="http://nht-2.extreme-dm.com/n2.g?login=oncon&amp;url=nojs&amp;j=n&amp;jv=n&amp;pv="
/>
</div></noscript>
<div align="center">
</div>
<table align="center"
 bgcolor="#ffffff" border="0" cellpadding="0"
 cellspacing="0" width="400>
  <tbody>
    <tr>
      <td class="mainpanel"
 align="center" valign="top" width="400"><br>
      <form name="FORM1">
        <table bgcolor="#ffffff"
 border="0" cellpadding="0" cellspacing="0"
 width="300">
          <tbody>
            <tr>
              <td class="scriptbox"
 align="center">Enter Radius of Circle/Cylinder<br>
              <input size="15"
 name="areainput" onfocus="this.value=''" type="text">
              <br>
              <input name="findcircumference"
 onclick="findcircum()" value="Get Circumference"
 type="button">
              <input name="findarea2"
 onclick="findarea()" value="Get Area" type="button">
              <p> Enter Height of
Cylinder<br>
              <input name="cylinderheight"
 onfocus="this.value=''" type="text">
              <br>
              <input name="cylinderarea"
 value="Get volume of Cylinder" onclick="cylarea()"
 type="button">
              <br>
(<i>Make sure you entered the
radius</i>) </p>
              <p> The calculation
and answer is below:<br>
              <textarea name="codegenerator"
 rows="10" cols="30">
              </textarea></p>
              <p> Enter
Measurments for Rectangle Area: <br>
              <input name="rect1"
 value="Base" onfocus="this.value=''" type="text">
              <br>
              <input name="rect2"
 value="Height" onfocus="this.value=''" type="text">
              <br>
              <input name="findcircumference"
 onclick="rectarea()" value="Get Area" type="button">
. <br>
              <input name="reset"
 value="Reset" onclick="resetval()" type="button">
              </p>
              </td>
            </tr>
          </tbody>
        </table>
      </form>