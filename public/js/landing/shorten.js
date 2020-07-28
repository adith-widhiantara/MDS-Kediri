// caption1
var longText1 = document.getElementById('caption1').innerText;
var shortText1 = document.getElementById('caption1');

var left_text1 = longText1.substring(0, 110);

shortText1.innerText = left_text1 + "...";
// end caption1

// caption2
var longText2 = document.getElementById('caption2').innerText;
var shortText2 = document.getElementById('caption2');

var left_text2 = longText2.substring(0, 100);

shortText2.innerText = left_text2 + "...";
// end caption2
