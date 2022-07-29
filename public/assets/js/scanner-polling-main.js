function onScanSuccess(qrCodeMessage) {
    console.log(qrCodeMessage);
        document.getElementById('ganti').innerHTML = '<div><input type="text" name="NIM" value="'qrCodeMessage'" style="display: none;"><input type="text" name="idUkm" value="{{ $ukms->id }}" style="display: none;"><input type="submit" class="btn btn-primary" value="Kirim" ></div>';
    }
      function onScanError(errorMessage) {

      }
      var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });
      html5QrcodeScanner.render(onScanSuccess, onScanError);

