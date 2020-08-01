// caption
for (var i = 0; i < 9; i++) {
  var longText = document.getElementsByClassName('card-text')[i].innerText;
  var shortText = document.getElementsByClassName('card-text')[i];
  var left_text = longText.substring(0, 90);
  shortText.innerText = left_text + "...";
}
// end caption
