@extends('layouts.admin')
@section('title')
    Dashboard Admin - Aplikasi Panjar
@endsection
@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion bg-success text-white" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu Admin</div>
                        <a class="nav-link text-white" href="{{route('homeAdmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link text-white" href="{{route('homeAdmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Tabel Penggugat
                        </a>

                        <!-- 
                            <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-white" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link text-white" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        -->
                     
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <h3>ADMIN</h3>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid bg-light ">
                    <div class="row">
                        <div class="col">
                            <h3 class="mt-4 text-success">Data Penggugat</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body" style="overflow-x: auto;">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Perkara</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nomer Telepon</th>
                                        <th>Email</th>
                                        <th>Nomor Rekening</th>
                                        <th>Gambar KTP</th>
                                        <th>Gambar KTA</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $item->no_perkara }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->no_telepon }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->no_rekening }}</td>
                                        <td> 
                                            <img src="{{Storage::url($item->ktp)}}" alt="" width="150" class="img-thumbnail" data-mdb-img="{{Storage::url($item->ktp)}}">
                                        </td>
                                        <td>
                                            <img src="{{Storage::url($item->kta)}}" alt="" width="150" class="img-thumbnail">
                                        </td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Perkara</th>
                                        <th>Klasifikasi Perkara</th>
                                        <th>Pengguggat</th>
                                        <th>Tergugat</th>
                                        <th>Prodeo</th>
                                        <th>Proses Terakhir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                
                            </table>
                        </div>
                    </div>
                    
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aplikasi Panjar 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    
@endsection