<form action="{{ route('mine.detail.edit.send.galeri', $galeri -> id) }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mt-10">
    <input type="text" name="judul" value="{{ $galeri -> judul }}" placeholder="Judul Galeri" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Galeri'" required class="single-input">
  </div>
  <div class="mt-10">
    <div class="form-group">
      <label for="sampulGaleri">Foto Sampul Galeri</label>
      <input type="file" name="sampul" class="form-control-file" id="sampulGaleri">
    </div>
  </div>
  <div class="mt-10">
    <input type="text" @if( $galeri -> linkVideo ) value="{{ $galeri -> linkVideo }}" @endif name="linkVideo" placeholder="Link Video Youtube" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Link Video Youtube *Jika ada'" class="single-input">
    <small class="form-text text-muted">Dapat menyertakan video Youtube, apabila ada. Dengan menyertakan link video Youtube</small>
  </div>
  <div class="mt-10">
    <textarea name="caption" class="single-textarea" placeholder="Isi Galeri" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Galeri'" required>{{ $galeri -> caption }}</textarea>
  </div>

  <div class="mt-10">
    <div class="float-right">
      <button type="submit" class="genric-btn green900-border radius">
        Kirim
      </button>
    </div>
  </div>
</form>
