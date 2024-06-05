<!-- partial:../../partials/_sidebar.html -->
<!-- <nav class="sidebar sidebar-offcanvas" id="sidebar"> -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <!-- <li class="nav-item">
        <a class="nav-link" href="{{ asset('staradmin/index.html') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">
          <!-- <i class="menu-icon mdi mdi-file-document"></i> -->
          <i class="menu-icon mdi material-symbols-outlined">home</i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Informasi</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi material-symbols-outlined">campaign</i>
          <span class="menu-title">Pengumuman</span>
          <!-- <i class="menu-arrow"></i> -->
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
          <span class="menu-title">Dana darurat</span>
          <!-- <i class="menu-arrow"></i> -->
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi material-symbols-outlined">account_balance</i>
          <span class="menu-title">Iuran</span>
          <!-- <i class="menu-arrow"></i> -->
        </a>
        
      </li>
      <li class="nav-item nav-category">Kelola</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#warga" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi material-symbols-outlined">contacts</i>
          <span class="menu-title">Data warga</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="warga">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/kartukeluarga') }}">Data Kartu Keluarga</a></li>
          </ul>
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ asset('/viewpenduduk') }}">Data Warga</a></li>
          </ul>
          {{-- <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/alamat') }}">Data Alamat</a></li>
          </ul> --}}
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi material-symbols-outlined">paid</i>
          <span class="menu-title">Data Kas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('viewIuran') }}">Data iuran</a></li>
          </ul>
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('viewNotif') }}">Notifikasi Kas</a></li>
          </ul>
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">Data Kas</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('/pengumuman')}}">
          <i class="menu-icon mdi material-symbols-outlined">newsstand</i>
          <span class="menu-title">Pengumuman</span>
          <!-- <i class="menu-arrow"></i> -->
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="{{ asset('staradmin/docs/documentation.html') }}" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi material-symbols-outlined">experiment</i>
          <span class="menu-title">Halaman<br>percobaan</span>
          <!-- <i class="menu-arrow"></i> -->
        </a>
        
      </li>
      
    </ul>
  </nav>