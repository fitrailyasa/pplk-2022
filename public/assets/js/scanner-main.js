function onScanSuccess(qrCodeMessage) {
    console.log(qrCodeMessage);
    document.getElementById('ganti').innerHTML = '<a href="../../assets/php/scanner.php?hasil='+qrCodeMessage+'">UNGGAH</a>';
}
  function onScanError(errorMessage) {
  //handle scan error
  }
  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
  html5QrcodeScanner.render(onScanSuccess, onScanError);

