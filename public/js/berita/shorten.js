// caption dan tanggalPost
for (var i = 0; i < 5; i++) {
  var longText = document.getElementsByClassName('caption')[i].innerText;
  var shortText = document.getElementsByClassName('caption')[i];
  var left_text = longText.substring(0, 157);
  shortText.innerText = left_text + "...";

  var longTextTanggal = document.getElementsByClassName('tanggalPost')[i].innerText;
  var shortTextTanggal = document.getElementsByClassName('tanggalPost')[i];
  var left_textTanggal = longTextTanggal.substr(7, 2);
  shortTextTanggal.innerText = left_textTanggal;

  var longTextBulan = document.getElementsByClassName('bulanPost')[i].innerText;
  var shortTextBulan = document.getElementsByClassName('bulanPost')[i];
  var left_textBulan = longTextBulan.substring(0, 3);
  shortTextBulan.innerText = left_textBulan;
}
// end caption dan tanggalPost

// santri
for (var i = 0; i < 3; i++) {
  var longTextSantri = document.getElementsByClassName('recentSantri')[i].innerText;
  var shortTextSantri = document.getElementsByClassName('recentSantri')[i];
  var left_textSantri = longTextSantri.substring(0, 22);
  shortTextSantri.innerText = left_textSantri + "...";
}
// end santri
