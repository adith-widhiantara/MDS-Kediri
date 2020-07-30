// datepicker
$(function () {
  const today = new Date();
  const hh = today.getDay();
  const dd = today.getDate();
  const mm = today.getMonth()+1;
  const yy = today.getFullYear();

  if (hh == 1) {
    var hari = "Senin";
  } else if (hh == 2) {
    var hari = "Selasa";
  } else if (hh == 3) {
    var hari = "Rabu";
  } else if (hh == 4) {
    var hari = "Kamis";
  } else if (hh == 5) {
    var hari = "Jumat";
  } else if (hh == 6) {
    var hari = "Sabtu";
  } else if (hh == 0) {
    var hari = "Minggu";
  } else {
    var hari = "NaN";
  }

  if (mm == 1) {
    var bulan = "Januari";
  } else if (mm == 2) {
    var bulan = "Februari";
  } else if (mm == 3) {
    var bulan = "Maret";
  } else if (mm == 4) {
    var bulan = "April";
  } else if (mm == 5) {
    var bulan = "Mei";
  } else if (mm == 6) {
    var bulan = "Juni";
  } else if (mm == 7) {
    var bulan = "Juli";
  } else if (mm == 8) {
    var bulan = "Agustus";
  } else if (mm == 9) {
    var bulan = "September";
  } else if (mm == 10) {
    var bulan = "Oktober";
  } else if (mm == 11) {
    var bulan = "November";
  } else if (mm == 12) {
    var bulan = "Desember";
  } else if (mm == 0) {
    var bulan = "NaN0";
  } else if (mm > 12) {
    var bulan = "NaN12";
  }

  document.getElementById('waktuUpload').value = hari + ", " + dd + " " + bulan + " " + yy;
  document.getElementById('waktuUploadBulan').value = bulan;
});
// end datepicker
