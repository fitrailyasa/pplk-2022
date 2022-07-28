function onScanSuccess(qrCodeMessage) {
    console.log(qrCodeMessage);
        document.getElementById('ganti').innerHTML = '';
    }
      function onScanError(errorMessage) {

      }
      var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });
      html5QrcodeScanner.render(onScanSuccess, onScanError);

