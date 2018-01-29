var d = new Date();
var month_num = d.getMonth()
var day = d.getDate();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();

month=new Array("January", "February", "March", "апреля", "мая", "июня",
"июля", "августа", "сентября", "октября", "ноября", "декабря");


if (day <= 9) day = "0" + day;
if (hours <= 9) hours = "0" + hours;
if (minutes <= 9) minutes = "0" + minutes;
if (seconds <= 9) seconds = "0" + seconds;

date_time = " " + day + " " + month[month_num] + " " + d.getFullYear() +
" г.&nbsp;&nbsp;&nbsp;"+ hours + ":" + minutes + ":" + seconds;
if (document.layers) {
 document.layers.time.document.write(date_time);
 document.layers.time.document.close();
}
else document.getElementById("time").innerHTML = date_time;
 setTimeout("clock()", 1000);
