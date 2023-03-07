@extends('layouts.app')
@section('title')
    Detail Panjar - Aplikasi Panjar
@endsection
@section('content')
    <!-- Section input  -->
    <section id="pantau-panjar">
        <div class="container-fluid">
            <div class="row my-4">
                <div class="col-12" style="margin-top: 10vh">
                    <h2 class="text-dark">
                        Progress Detail Perkara
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="overflow-x: auto;">
                    <table id="tabel" class="table table-bordered border-light">
                        <tr>
                            <th>No</th>
                            <th class="col text-center">Nomor Perkara</th>
                            <th class="col text-center">Klasifikasi</th>
                            <th class="col text-center">Tanggal</th>
                            <th class="col text-center">Penggugat</th>
                            <th class="col text-center">Tergugat</th>
                            <th class="col text-center">Perkara Tingkat</th>
                        </tr>    
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
            <div class="row my-4">
                <div class="col-12" style="overflow-x: auto;">
                    <table id="tabel" class="table table-bordered border-light">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2" class="col text-center">Tanggal Transaksi</th>
                                <th rowspan="2" class="col text-center">Uraian</th>
                                <th rowspan="2" class="col text-center">Pihak</th>
                                <th colspan="3" class="col text-center">Nominal</th>
                                <th rowspan="2" class="col text-center">Keterangan</th>
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
                            <td class="text-primary text-center">
                                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#modalDetailBuktiTransfer">Lihat Bukti Transfer</button>
                            </td>
                            
                            
                        </tfoot>
                        
                    </table>
                </div>
            </div>
        </div>
    </section>
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
@endsection