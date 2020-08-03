<form action="{{ route('create.send.berita') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mt-10">
    <input type="text" name="judul" placeholder="Judul Berita" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Berita'" required class="single-input">
  </div>
  <div class="mt-10">
    <div class="form-group">
      <label for="sampulBerita">Foto Sampul Berita</label>
      <input type="file" name="sampul" class="form-control-file" id="sampulBerita">
    </div>
  </div>
  <div class="mt-10">
    <textarea name="caption" class="single-textarea" placeholder="Isi Berita" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Berita'" required></textarea>
    <input type="hidden" id="waktuUpload" name="waktu">
    <input type="hidden" id="waktuUploadBulan" name="bulan">
  </div>

  <div class="mt-10">
    <div class="float-right">
      <button type="submit" class="genric-btn green900-border radius">
        Kirim
      </button>
    </div>
  </div>
</form>
