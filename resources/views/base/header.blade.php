<header>
  <div class="header-area">
    <div class="main-header">
      <div class="header-top">
        <div class="container-fluid">
          <div class="col-xl-12">
            <div class="row d-flex justify-content-lg-between align-items-center">
              <div class="header-info-left">
                <li class="d-none d-lg-block">
                  <div class="form-box f-right">
                    <form class="" action="" method="">
                      <input type="text" name="Search" placeholder="Cari Berita">
                    </form>
                    <div class="search-icon">
                      <i class="ti-search"></i>
                    </div>
                  </div>
                </li>
              </div>

              <div class="header-info-mid">
                <div class="logo">
                  <a href="{{ route('landing') }}">
                    <img class="img-logo" src="{{ asset('img/podLogo.png') }}" alt="">
                  </a>
                </div>
              </div>

              <div class="header-info-right d-flex align-items-center">
                <ul>
                  <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Hubungi</a></li>
                  <li><a href="#">Masuk</a></li>
                </ul>
                <!-- Social -->
                <div class="header-social">
                  <a href="https://www.youtube.com/channel/UCBQwTq1Ftku1yuPZ06s45cQ" target="_blank" title="Kang Arief Channel"><i class="fab fa-youtube"></i></a>
                  <a href="https://www.facebook.com/PowerOfDzikir" target="_blank" title="Power Of Dzikir"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.youtube.com/channel/UCDPy20cP3WpCt42qUF7Ut9w" target="_blank" title="Ahsana TV"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom  header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
            <!-- logo 2 -->
            <div class="logo2">
              <a href="#"><img class="img-logo" src="{{ asset('img/podLogo.png') }}" alt=""></a>
            </div>
            <!-- logo 3 -->
            <div class="logo3 d-block d-sm-none">
              <a href="#"><img class="img-logo" src="{{ asset('img/podLogo.png') }}" alt=""></a>
            </div>
                <!-- Main-menu -->
            <div class="main-menu text-center d-none d-lg-block">
              <nav>
                <ul id="navigation">
                  <li><a href="{{ route('index.galeri') }}">Galeri</a></li>
                  <li><a href="{{ route('index.berita') }}">Berita</a></li>
                  <li><a href="{{ route('index.santri') }}">Testimoni</a></li>
                  <li><a href="{{ route('index.video') }}">Video</a></li>
                </ul>
              </nav>
            </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
