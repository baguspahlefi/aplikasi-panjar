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
                        <a class="nav-link text-white" href="{{route('dataPenggugat')}}">
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
                <!-- Section input  -->
                <section id="pantau-panjar">
                    <div class="container-fluid">
                        <div class="row my-4">
                            <div class="col-12 mt-4">
                                <h2 class="text-dark">
                                    Progress Detail Perkara
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" style="overflow-x: auto;">
                                <table id="datatablesSimple" class="table table-bordered border-light">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="col text-center">Nomor Perkara</th>
                                            <th class="col text-center">Klasifikasi</th>
                                            <th class="col text-center">Tanggal</th>
                                            <th class="col text-center">Penggugat</th>
                                            <th class="col text-center">Tergugat</th>
                                            <th class="col text-center">Perkara Tingkat</th>
                                        </tr>
                                    </thead>
                              
                                    <tr>
                                        <td class="text-center">{{$item->perkara_id}}</td>
                                        <td class="text-center">{{$item->nomor_perkara}} </td>
                                        <td class="text-center">{{$item->klasifikasi}}</td>
                                        <td class="text-center">{{$item->tgl_pendaftaran}}</td>
                                        <td class="text-center">{{$item->penggugat}}</td>
                                        <td class="text-center">{{$item->tergugat}} </td>
                                        <td class="text-center">{{$item->perkara_tingkat}}</td>
                                    </tr>
                           
                                   
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 float-end">
                                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Progress
                                </button>
                            </div>
                             <!-- Modal -->
                             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Tambah Perkara</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{route('detail.store')}}" method="POST" enctype="multipart/form-data" class="row g-3">
                                            @csrf
                                                <div class="col-6 d-none">
                                                    <input class="form-control" type="text" id="perkara_id" name="perkara_id" value="{{$item->perkara_id}}" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Tanggal Transaksi</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="date" id="tgl_transaksi" name="tgl_transaksi" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Uraian</p>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" id="uraian" name="uraian" placeholder="Uraian" />
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Pihak</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="pihak" name="pihak" placeholder="Pihak" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Pemasukan</p>
                                                </div>
                                                <div class="col-6">
                                                    <input id="rupiah" class="form-control" type="text" id="pemasukan" name="pemasukan" placeholder="Masukan 0 jika tidak ada pemasukan" aria-label="default input example" required>
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Pengeluaran</p>
                                                </div>
                                                <div class="col-6">
                                                    <input id="rupiah-2" class="form-control" type="text" id="pengeluaran" name="pengeluaran" placeholder="Masukan 0 jika tidak ada pengeluaran" aria-label="default input example" required>
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Keterangan</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" id="keterangan" name="keterangan" placeholder="Keterangan" aria-label="default input example">
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
                        <div class="row my-4">
                            <div class="col-12" style="overflow-x: auto;">
                                <table id="datatablesSimple" class="table table-bordered border-light">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2" class="col text-center">Tanggal Transaksi</th>
                                            <th rowspan="2" class="col text-center">Uraian</th>
                                            <th rowspan="2" class="col text-center">Pihak</th>
                                            <th colspan="3" class="col text-center">Nominal</th>
                                            <th rowspan="2" class="col text-center">Keterangan</th>
                                            <th rowspan="2" class="col text-center">Aksi</th>
                                            <tr>
                                                <th class="text-center">Pemasukan</th>
                                                <th class="text-center">Pengeluaran</th>
                                                <th class="text-center">Sisa</th>
                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $totalPemasukan = 0;
                                        $totalPengeluaran = 0;
                                        ?>
                                        @foreach($detail as $detail_data)
                                        @if($detail_data->perkara_id == $item->perkara_id)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$detail_data->tgl_transaksi}}</td>
                                            <td class="text-center">{{$detail_data->uraian}}</td>
                                            <td class="text-center">{{$detail_data->pihak}}</td>
                                            <td class="text-center">
                                                Rp.
                                                @php
                                                echo number_format("$detail_data->pemasukan")."<br>";
                                                @endphp   
                                            </td>
                                            <td class="text-center"> Rp.
                                                @php
                                                echo number_format("$detail_data->pengeluaran")."<br>";
                                                @endphp</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">{{$detail_data->keterangan}}</td>
                                            <td class="text-center">
                                            <form action="{{route('detail.destroy',$detail_data->perkara_detail_id)}}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-link">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php
                                        $totalPemasukan += $detail_data->pemasukan;
                                        $totalPengeluaran += $detail_data->pengeluaran;
                                        ?>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <td colspan="4" class="text-dark fw-bold text-center">Total</td>
                                        <td class="text-dark fw-bold text-center">
                                            Rp.
                                            @php
                                            echo number_format("$totalPemasukan")."<br>";
                                            @endphp
                                        </td>
                                        <td class="text-dark fw-bold text-center">
                                            Rp.
                                            @php
                                            echo number_format("$totalPengeluaran")."<br>";
                                            @endphp
                                        
                                        </td>
                                        <td class="text-dark fw-bold text-center">
                                            Rp.
                                            @php
                                            echo number_format("$totalPemasukan"-"$totalPengeluaran")."<br>";
                                            @endphp
                                
                                        </td>
                                        <td> 
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDetailBuktiTransfer">
                                                Lihat Bukti Transfer
                                            </button>
                                        </td>
                                        <td class="text-primary text-center">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modaltransfer">
                                                Upload bukti transfer
                                            </button>
                                        </td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalDetailBuktiTransfer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Bukti Transfer</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img width="100%" src="{{ URL::asset('storage/'.$item->bukti_transfer) }}" alt="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modaltransfer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload bukti transfer</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <form action="{{route('bukti_transfer.update',$item->perkara_id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="col-6 d-none">
                                                            <input class="form-control" type="text" id="perkara_id" name="perkara_id" value="{{$item->perkara_id}}" placeholder="Default input" aria-label="default input example">
                                                        </div>
                                                        <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer">
                                                        <label class="input-group-text" for="bukti_transfer">Upload</label>  
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </tfoot>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
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


