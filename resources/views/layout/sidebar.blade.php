<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#staticBackdrop">
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
                <a href="{{ route('petugasPengaduan.index') }}" class="nav-link {{ Request::segment(2) == 'petugasPengaduan' ? 'active' : '' }}">
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
                <a href="{{ route('jenisPekerjaan.index') }}" class="nav-link {{ Request::segment(2) == 'jenisPekerjaan' ? 'active' : '' }}">
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
                <a href="{{ route('petugasKontrol.index') }}" class="nav-link {{ Request::segment(2) == 'petugasKontrol' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Petugas Kontrol</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('petugasEntry.index') }}" class="nav-link {{ Request::segment(2) == 'petugasEntry' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Petugas Entry</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kondisiTutupan.index') }}" class="nav-link {{ Request::segment(2) == 'kondisiTutupan' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Kondisi Tutupan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('gunaPersil') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Guna Persil</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('retribusi.index') }}" class="nav-link {{ Request::segment(2) == 'retribusi' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Retribusi</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('wilayahDistribusi.index') }}" class="nav-link {{ Request::segment(2) == 'wilayahDistribusi' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Wilayah Distribusi</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('statusTanah.index') }}" class="nav-link {{ Request::segment(2) == 'statusTanah' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Status Tanah</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('statusAir.index') }}" class="nav-link {{ Request::segment(2) == 'statusAir' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Status Air</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('statusMeter.index') }}" class="nav-link {{ Request::segment(2) == 'statusMeter' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Status Meter</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('merekMeter.index') }}" class="nav-link {{ Request::segment(2) == 'merekMeter' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Merk Meter</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('materai.index') }}" class="nav-link {{ Request::segment(2) == 'materai' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Materai</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('panggilanDinas.index') }}" class="nav-link {{ Request::segment(2) == 'panggilanDinas' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Jenis Panggilan Dinas</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('telponPelanggan.index') }}" class="nav-link {{ Request::segment(2) == 'telponPelanggan' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Telp Pelanggan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mlnCode.index') }}" class="nav-link {{ Request::segment(2) == 'mlnCode' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>MLN Code</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pelangganMeterC') }}" class="nav-link {{ Request::segment(2) == 'pelangganMeterC' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Pelanggan Meter C</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('monitoringPelanggan') }}" class="nav-link {{ Request::segment(2) == 'monitoringPelanggan' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Monitoring Pelanggan</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('penetapanTeraMeter') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Penetapan Tera Meter</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cekSurveyTarif') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Cek Survey Tarif</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('surveyTarif') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Survey Tarif</p>
                    </small>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('insertPosisiMeter') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <small>
                        <p>Insert Posisi Meter</p>
                    </small>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ Request::segment(1) == 'pengaduan' ? 'menu-open' : '' }}">
        <a href="" class="nav-link">
            <i class="nav-icon fas fa-headset"></i>
            <p>
                Pengaduan
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('pengaduan')}}" class="nav-link {{ Request::segment(2) == 'pengaduan' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p><small>Pengaduan</small></p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('riwayatPemakaian')}}" class="nav-link {{ Request::segment(2) == 'riwayatPemakaian' ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p><small>Riwayat Pemakaian</small></p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route ('informasiPelunasanRekening')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p><small>Informasi Pelunasan Rekening</small></p>
                </a>
            </li>
        </ul>
     </li>
      {{-- <li class="nav-item">
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
      </li> --}}
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-file-prescription"></i>
          <p>
            BA Mutasi Pelanggan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('monitoringGunaPersil')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Monitoring Guna Persil</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('historiMutasi')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Histori Mutasi</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('monitoringBAMutasiKolektif')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Monitoring BA Mutasi Kolektif</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('mutasiKolektif')}}" class="nav-link" data-toggle="tooltip" data-placement="top" title=" Entri BA Mutasi Jenis Pelanggan, Bundel, Sub Zona">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Entri BA Mutasi Jenis Pelanggan, Bundel, Sub Zona</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('monitoringBAMutasiPerorangan')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Monitoring BA Mutasi Perorangan</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('laporanRekapitulasiPerubahanTarif')}}" class="nav-link" data-toggle="tooltip" data-placement="top" title="Laporan Rekapitulasi Perubahan Tarif">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Laporan Rekapitulasi Perubahan Tarif</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('laporanPerubahanTNTperBulan')}}" class="nav-link" data-toggle="tooltip" data-placement="top" title="Laporan Perubahan Tarif Naik/Turun per Bulan">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Laporan Perubahan Tarif Naik/Turun per Bulan</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('laporanRekapitulasiNaikTurun')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Laporan Rekapitulasi Naik Turun</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('laporanTarifPerBendel')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Laporan Tarif Per Bendel</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('cetakBAPerorangan')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Cetak BA Perorangan</small></p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('entriSurat')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small> Surat Pemberitahuan Rekategori Tarif</small></p>
            </a>
          </li>
        </ul>

      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Mutasi Pemakaian
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('usulanMutasiTarif')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><small>Usulan Mutasi Tarif</small></p>
            </a>
          </li>
        </ul>
      </li>
      {{-- <li class="nav-item">
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
      </li> --}}
    </ul>
</nav>
