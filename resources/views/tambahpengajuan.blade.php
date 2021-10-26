@extends('layoutUser.master')
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{url('/')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Utama</div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Menu Utama
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="{{url('/akun')}}" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Data Akun Outlet
                            </a>
                            <a class="nav-link collapsed" href="{{url('/room')}}" aria-expanded="false" aria-controls="pagesCollapseError">
                                Pengelolaan Bubuk Kopi
                            </a>
                            <a class="nav-link collapsed" href="{{url('/pesananoutlet')}}" aria-expanded="false" aria-controls="pagesCollapseError">
                                Data Pemesanan Bubuk Kopi
                            </a>
                            <a class="nav-link collapsed" href="{{url('/statuspengajuan')}}" aria-expanded="false" aria-controls="pagesCollapseError">
                                Status Pengajuan Rekayasa
                            </a>
                        </nav>
                    </div>
                    {{-- <div class="sb-sidenav-menu-heading">Adisional</div>
                    <a class="nav-link" href="/rekap">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Rekap Dinas
                    </a>
                    <a class="nav-link" href="/recap">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Rekap Meet
                    </a> --}}
                </div>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Data Persediaan Bubuk Kopi</h1>
            </div>
            
            <div class="card mb-4">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @elseif(session('berhasil'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ session('berhasil') }}</li>
                        </ul>
                    </div>
                    @endif
                    <form action="{{url('tambah-data-pengajuan')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Barang</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </div>
                    </form>
                    
                </div>
            </div>

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
