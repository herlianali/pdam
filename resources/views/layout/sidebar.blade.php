<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="pages/log.html" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Log
              </p>
            </a>
        </li>
      <li class="nav-item {{ Request::segment(1) == 'master' ? 'menu-open' : '' }}">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Master
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('petugasPengaduan') }}" class="nav-link {{ Request::segment(2) == 'petugasPengaduan' ? 'active' : '' }}">
                    <i class="far fa-circle fa-10x nav-icon"></i>
                    <small>
                        <p>Petugas Entry Pengaduan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('jenisPengaduan.index') }}" class="nav-link {{ Request::segment(2) == 'jenisPengaduan' || Request::segment(2) == 'printPengaduan'  ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Jenis Pengaduan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('jenisPekerjaan') }}" class="nav-link {{ Request::segment(2) == 'jenisPekerjaan' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Jenis Pekerjaan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('jenisPelanggan.index') }}" class="nav-link {{ Request::segment(2) == 'jenisPelanggan' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Jenis Pelanggan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('petugasKhusus') }}" class="nav-link {{ Request::segment(2) == 'petugasKhusus' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Petugas Khusus</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('petugasKorektor') }}" class="nav-link {{ Request::segment(2) == 'petugasKorektor' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Petugas Korektor</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('petugasKontrol') }}" class="nav-link {{ Request::segment(2) == 'petugasKontrol' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Petugas Kontrol</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Petugas Entry</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Kondisi Tutupan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Guna Persil</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Retribusi</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Wilayah Distribusi</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Status Tanah</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Status Air</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Status Meter</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Merk Meter</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Materai</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Jenis Panggilan Dinas</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Telp Pelanggan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>MLN Code</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Pelanggan Meter C</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Monitoring Pelanggan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Penetapan Tera Meter</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Cek Survey Tarif</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Survey Tarif</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Insert Posisi Meter</p>
                    </small>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-headset"></i>
            <p>
                Pengaduan
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p><small></small></p>
                </a>
            </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-exclamation-triangle"></i>
            <p>
                Pelanggaran
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p><small>Pelanggaran</small></p>
                </a>
            </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-file-prescription"></i>
          <p>
            BA Mutasai Pelanggaran
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/UI/general.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small>BA Mutasai Pelanggaran</small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Mutasi Pemakaian
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-envelope"></i>
          <p>
            Tutupan Sementara
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-folder"></i>
          <p>
            Tutupan Dinas
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-envelope-open"></i>
          <p>
            Bukaan Sementara
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-folder-open"></i>
          <p>
            Bukaan Dinas
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-paste"></i>
          <p>
            Cetak Laporan Kolektif
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-clipboard"></i>
          <p>
            Laporan
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small></small></p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</nav>
