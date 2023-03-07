@extends('layouts.app')
@section('title')
    Pantau Panjar - Aplikasi Panjar
@endsection
@section('content')
    <!-- Section input  -->
    <section id="pantau-panjar">
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-12" style="margin-top: 15vh">
                    <h2 class="text-dark">
                        Data Pengajuan Perkara
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="overflow-x: auto; margin-bottom: 20vh;">
                    <table id="tabel" class="table table-bordered border-light">
                        <thead>
                            <tr>
                                <th class="col">No</th>
                                <th class="col text-center">Nomor Perkara</th>
                                <th class="col text-center">Klasifikasi</th>
                                <th class="col text-center">Tanggal Pendaftaran</th>
                                <th class="col text-center">Penggugat</th>
                                <th class="col text-center">Tergugat</th>
                                <th class="col text-center">Perkara Tingkat</th>
                                <th class="col text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$item->nomor_perkara}}</td>
                                <td class="text-center">{{$item->klasifikasi}}</td>
                                <td class="text-center">{{$item->tgl_pendaftaran}}</td>
                                <td class="text-center">{{$item->penggugat}}</td>
                                <td class="text-center">{{$item->tergugat}}</td>
                                <td class="text-center">{{$item->perkara_tingkat}}</td>
                                <td class="text-center">
                                    <a href=" {{route('detailPanjar.show',$item->perkara_id)}} " class="btn btn-primary">
                                        Cek
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection