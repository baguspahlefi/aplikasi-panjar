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
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link text-white" href="{{route('homeAdmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
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
                            <h3 class="mt-4 text-success">Data Pengajuan Perkara</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 float-end">
                            <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Perkara
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Tambah Perkara</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        
                                            
                                        <div class="modal-body">
                                        
                                            <form action="{{route('perkara.store')}}" method="POST" enctype="multipart/form-data" class="row g-3">
                                            @csrf
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Nomor Perkara</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="nomor_perkara" name="nomor_perkara" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Tanggal Pendaftaran</p>
                                                </div>
                                                <div class="col-6">
                                                    <input type="date" name="tgl_pendaftaran" id="tgl_pendaftaran" class="form-control" required>
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Klasifikasi Perkara</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="klasifikasi" name="klasifikasi" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Penggugat</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="penggugat" name="penggugat" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">No Telepon Penggugat</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="no_telepon" name="no_telepon" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Tergugat</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="tergugat" name="tergugat" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Prodeo</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="prodeo" name="prodeo" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Status Perkara</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="status_perkara" name="status_perkara" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                              </form>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body" style="overflow-x: auto;">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Perkara</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Klasifikasi Perkara</th>
                                        <th>Pengguggat</th>
                                        <th>Tergugat</th>
                                        <th>Prodeo</th>
                                        <th>Proses Terakhir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($perkara as $perkaraData)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$perkaraData->nomor_perkara}}</td>
                                        <td>{{$perkaraData->tgl_pendaftaran}} </td>
                                        <td>{{$perkaraData->klasifikasi}}</td>
                                        <td>{{$perkaraData->penggugat}}</td>
                                        <td>{{$perkaraData->tergugat}}</td>
                                        <td>{{$perkaraData->prodeo}}</td>
                                        <td>{{$perkaraData->status_perkara}}</td>
                                        <td>
                                            <a href="#">Edit</a>
                                            <a href="{{route('perkara.show',$perkaraData->perkara_id)}}">Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
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