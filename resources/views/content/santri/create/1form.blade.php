<form action="{{ route('create.send.santri') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mt-10">
    <input type="text" name="judul" placeholder="Judul Testimoni" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Testimoni'" required class="single-input">
  </div>
  <div class="mt-10">
    <div class="form-group">
      <label for="sampulTestimoni">Foto Sampul Testimoni</label>
      <input type="file" name="sampul" class="form-control-file" id="sampulTestimoni">
    </div>
  </div>
  <div class="mt-10">
    <textarea name="caption" class="single-textarea" placeholder="Isi Testimoni" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Testimoni'" required></textarea>
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
