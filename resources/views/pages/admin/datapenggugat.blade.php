@extends('layouts.admin')
@section('title')
    Dashboard Admin - SIMPANTAUMULI POP
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
                                        <th>Jenis Bank</th>
                                        <th>Gambar KTP</th>
                                        <th>Gambar KTA</th>
                                        <th>Aksi</th>
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
                                        <td>{{ $item->jenis_bank }}</td>
                                        <td> 
                                            <img src="{{Storage::url($item->ktp)}}" alt="" width="150" class="img-thumbnail" data-mdb-img="{{Storage::url($item->ktp)}}">
                                        </td>
                                        <td>
                                            <img src="{{Storage::url($item->kta)}}" alt="" width="150" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->ajukan_panjar_id}}">
                                                Edit
                                            </button>

                                            <form action="{{route('dataPenggugat.destroy',$item->ajukan_panjar_id)}}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                           
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-{{$item->ajukan_panjar_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                             {{$item->ajukan_panjar_id}}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    @empty
                                        
                                    @endforelse
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aplikasi Pemantauan dan Pengembalian Sisa Panjar Perkara 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


 
    
@endsection