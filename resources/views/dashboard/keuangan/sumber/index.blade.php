@extends('master')

@section('title')
  <title>Desa2.0 - Keuangan</title>
@endsection

@section('navbar-center')
  <div class="navbar-center">Sumber Dana</div>
@endsection

@section('mainsidebar')
<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li>
                <a href="{{ URL::to('/dashboard') }}"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
            </li>
            <li>
                <a href="{{ URL::to('/keluarga') }}"><i class="glyph-icon flaticon-shopping80"></i><span class="sidebar-text">Keluarga</a>
            </li>
            <li>
                <a href="{{ URL::to('/penduduk') }}"><i class="fa fa-edit"></i><span class="sidebar-text">Penduduk</span></span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-rocket"></i><span class="sidebar-text">Pelayanan</span>
                <span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/pelayanan') }}"><span class="sidebar-text">Surat</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/persyaratandokumen') }}"><span class="sidebar-text">Persyaratan Dokumen</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/datapublik') }}"><span class="sidebar-text">Data Publik</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/programpemerintah') }}"><span class="sidebar-text">Program Pemerintah</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-spinner"></i><span class="sidebar-text">Peristiwa</span>
                <span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/kelahiran') }}"><span class="sidebar-text">Kelahiran</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/kematian') }}"><span class="sidebar-text">Kematian</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/pindah') }}"><span class="sidebar-text">Pindah</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/migrasitenagakerja') }}"><span class="sidebar-text">Migrasi Tenaga Kerja</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-legal"></i><span class="sidebar-text">Kemiskinan</span>
                    <span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/auditkemiskinan') }}"><span class="sidebar-text">Audit Kemiskinan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/surveikemiskinan') }}"><span class="sidebar-text">Survei Kemiskinan</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-square"></i><span class="sidebar-text">Pertanahan</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/blok') }}"><span class="sidebar-text">Blok</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/persil') }}"><span class="sidebar-text">Persil</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/peta') }}"><span class="sidebar-text">Peta</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-briefcase"></i><span class="sidebar-text">Perkantoran</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/surat/masuk') }}"><span class="sidebar-text">Surat Masuk</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/surat/keluar') }}"><span class="sidebar-text">Surat Keluar</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/ekspor') }}"><span class="sidebar-text">Ekspor</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/aset/desa') }}"><span class="sidebar-text">Aset Desa</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-check"></i><span class="sidebar-text">Inventaris</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/inventaris') }}"><span class="sidebar-text">Inventaris</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/jenis/inventaris') }}"><span class="sidebar-text">Jenis Inventaris</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i><span class="sidebar-text">Statistik</span><span class="fa arrow"></span>
                </a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/statistik/piramidapenduduk') }}"><span class="sidebar-text">Piramida Penduduk</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/jeniskelamin') }}"><span class="sidebar-text">Jenis Kelamin</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/perkawinan') }}"><span class="sidebar-text">Perkawinan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/agama') }}"><span class="sidebar-text">Agama</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/golongandarah') }}"><span class="sidebar-text">Golongan Darah</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/pendidikan') }}"><span class="sidebar-text">Pendidikan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/pekerjaan') }}"><span class="sidebar-text">Pekerjaan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/statustinggal') }}"><span class="sidebar-text">Status Tinggal</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/kemiskinan') }}"><span class="sidebar-text">Kemiskinan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/statistik/jenislahan') }}"><span class="sidebar-text">Jenis Lahan</span></a>
                    </li>
                </ul>
            </li>
            <li class="active current hasSub">
                <a href="#"><i class="fa fa-money"></i><span class="sidebar-text">Keuangan</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/keuangan/perencanaan') }}"><span class="sidebar-text">Perencanaan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/keuangan/penganggaran') }}"><span class="sidebar-text">Penganggaran</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/keuangan/realisasi') }}"><span class="sidebar-text">Realisasi</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/keuangan/kodifikasiakun') }}"><span class="sidebar-text">Kodifikasi Akun</span></a>
                    </li>
                    <li class="current">
                        <a href="{{ URL::to('/keuangan/sumberdana') }}"><span class="sidebar-text">Sumberdana</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/keuangan/pustakasatuan') }}"><span class="sidebar-text">Pustaka Satuan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/keuangan/pengaturan') }}"><span class="sidebar-text">Pengaturan</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-archive"></i><span class="sidebar-text">Laporan</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/laporan/menurutwilayah') }}"><span class="sidebar-text">Menurut Wilayah</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/laporan/wajibktp') }}"><span class="sidebar-text">Wajib KTP</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i><span class="sidebar-text">Pustaka</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/agama') }}"><span class="sidebar-text">Agama</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/hubungan') }}"><span class="sidebar-text">Hubungan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/pekerjaan') }}"><span class="sidebar-text">Pekerjaan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/pendidikan') }}"><span class="sidebar-text">Pendidikan</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/penyalur/tki') }}"><span class="sidebar-text">Penyalur TKI</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/status/kawin') }}"><span class="sidebar-text">Status Kawin</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/status/tinggal') }}"><span class="sidebar-text">Status Tinggal</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/surat') }}"><span class="sidebar-text">Surat</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/standar/kemiskinan') }}"><span class="sidebar-text">Standar Kemiskinan</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-group"></i><span class="sidebar-text">Pengguna</span><span class="fa arrow"></span></a>
                <ul class="submenu collapse">
                    <li>
                        <a href="{{ URL::to('/pengguna') }}"><span class="sidebar-text">Pengguna</span></a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/hak/akses') }}"><span class="sidebar-text">Hak akses</span></a>
                    </li>
                </ul>
            </li>
            <li class="m-b-245">
                <a href="{{ URL::to('/pengaturan/umum') }}"><i class="fa fa-wrench"></i><span class="sidebar-text">Pengaturan</span></a>
            </li>
        </ul>
    </div>
    <div class="footer-widget">
        <div class="footer-gradient"></div>
        <div id="sidebar-charts">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Orders</div>
                    <div class="sidebar-chart-number">1,256</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar1"></span>
                </div>
            </div>
            <hr class="divider">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Income</div>
                    <div class="sidebar-chart-number">$47,564</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar2"></span>
                </div>
            </div>
            <hr class="divider">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Visits</div>
                    <div class="sidebar-chart-number" id="number-visits">147,687</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar3"></span>
                </div>
            </div>
        </div>
        <div class="sidebar-footer clearfix">
            <a class="pull-left" href="profil_edit.html" data-rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
            <a class="pull-left" href="lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
            <a class="pull-left" href="{{ URL::to('/auth/logout') }}" data-rel="tooltip" data-placement="top" data-original-title="Keluar"><i class="fa fa-power-off"></i></a>
        </div>
    </div>
</nav>
@endsection

@section('maincontent')
<div id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <h1>Blank Page <small>Blank Page</small></h1>
            <br><br><br>
        </div>
    </div>
</div>
@endsection
