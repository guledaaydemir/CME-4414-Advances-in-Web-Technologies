var counter = 0;
function startTime() {
counter++;
var today = new Date();
var h = today.getHours();
var m = today.getMinutes();
var s = today.getSeconds();
m = checkTime(m);
s = checkTime(s);
document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
console.log("called " + counter);
t = setTimeout('startTime()', 1000);
}
// add a zero in front of numbers<10
function checkTime(i) {
if (i < 10) {
i = "0" + i;
}
return i;
}