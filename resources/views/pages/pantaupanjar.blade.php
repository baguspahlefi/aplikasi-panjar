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
                                <th class="col text-center">Tanggal</th>
                                <th class="col text-center">Penggugat</th>
                                <th class="col text-center">Tergugat</th>
                                <th class="col text-center">Status Perkara</th>
                                <th class="col text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">1/G/2023/PTUN.BL</td>
                                <td class="text-center">17 Januari 2022</td>
                                <td class="text-center">Zaenal Abidin</td>
                                <td class="text-center">Kantor Badan Pertanahan Nasional (BPN) Kabupaten Pesawaran </td>
                                <td class="text-center">Pemeriksaan Perkara</td>
                                <td class="text-center">
                                    <a href=" {{route('detailPanjar')}} " class="btn btn-primary">
                                        Cek
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection