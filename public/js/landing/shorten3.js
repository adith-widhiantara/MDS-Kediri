// caption3
for (var i = 0; i < 3; i++) {
  var longText3 = document.getElementsByClassName('caption3')[i].innerText;
  var shortText3 = document.getElementsByClassName('caption3')[i];

  var left_text3 = longText3.substring(0, 100);

  shortText3.innerText = left_text3 + "...";
}
// end caption3
