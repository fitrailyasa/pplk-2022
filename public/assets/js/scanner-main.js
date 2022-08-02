function onScanSuccess(qrCodeMessage) {
console.log(qrCodeMessage);
    document.getElementById('ganti').innerHTML = '<input name="nim" type="text" value="'+qrCodeMessage+'" readonly style="display: none;"><input name="status" type="text" value="hadir" readonly style="display: none;"><input type="submit" class="btn btn-primary">';
}
  function onScanError(errorMessage) {

  }

  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
  html5QrcodeScanner.render(onScanSuccess, onScanError);

