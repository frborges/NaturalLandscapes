<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
var day_description = "Christmas";
var day_before = "Christmas Eve";

var today = new Date();
var year = today.getYear();
if ((navigator.appName == "Microsoft Internet Explorer") && (year < 2000))
year="19" + year;
if (navigator.appName == "Netscape")
year=1900 + year;
var date = new Date("December 25, " + year);
var diff = date.getTime() - today.getTime();
var days = Math.floor(diff / (1000 * 60 * 60 * 24));

document.write("<center><h3>")

if (days > 1)
document.write("There are " + (days+1) + " days until " + day_description + "!");
else if (days == 1)
document.write("Tommorrow is " + day_before  + "!");
else if (days == 0)
document.write("Today is " + day_before + "!");
else if (days == -1)
document.write("It's " + day_description + "!");
else if (days < -1)
document.write(day_description + " was " + ((days+1)*-1) + (days < -2 ? " days" : " day") + " ago this year!");
document.write("</h3></center>");
//  End -->
</script>