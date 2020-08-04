// caption3
for (var i = 0; i < 3; i++) {
  var longText = document.getElementsByClassName('caption3')[i].innerText;
  var shortText = document.getElementsByClassName('caption3')[i];
  var left_text = longText.substring(0, 100);
  shortText.innerText = left_text + "...";
}
// end caption3
