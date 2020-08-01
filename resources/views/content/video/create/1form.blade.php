<form action="{{ route('create.send.video') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mt-10">
    <input type="text" name="caption" placeholder="Judul Video" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Video'" required class="single-input">
  </div>
  <div class="mt-10">
    <div class="form-group">
      <label for="sampulVideo">Foto Sampul Video</label>
      <input type="file" name="sampul" class="form-control-file" id="sampulVideo">
    </div>
  </div>
  <div class="mt-10">
    <input type="text" name="linkVideo" placeholder="Link Video" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Link Video'" required class="single-input">
  </div>
  <div class="mt-10">
    <input type="hidden" id="waktuUpload" name="waktu">
    <input type="hidden" id="waktuUploadBulan" name="bulan">
    <input type="hidden" name="user_id" value="5">
    <input type="hidden" name="user_nama" value="Aditya Saktyawan WWW">
  </div>

  <div class="mt-10">
    <div class="float-right">
      <button type="submit" class="genric-btn green900-border radius">
        Kirim
      </button>
    </div>
  </div>
</form>
