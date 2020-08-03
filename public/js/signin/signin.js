// register
document.getElementById("namalengkap").oninput = () => {
  const input = document.getElementById('namalengkap');
  const output = document.getElementById('username');

  var replacing = input.value.replace(/[^a-zA-Z ]/g, "");
  var replacing2 = replacing.replace(/ /g,"");
  var replacing3 = replacing2.toLowerCase();

  output.value = replacing3;
};
// end register
