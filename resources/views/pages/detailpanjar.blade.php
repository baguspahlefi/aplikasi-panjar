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
                          <th class="col text-center">Tanggal</th>
                          <th class="col text-center">Penggugat</th>
                          <th class="col text-center">Tergugat</th>
                          <th class="col text-center">Status Perkara</th>
                        </tr>
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-center">1/G/2023/PTUN.BL</td>
                          <td class="text-center">17 Januari 2022</td>
                          <td class="text-center">Zaenal Abidin</td>
                          <td class="text-center">Kantor Badan Pertanahan Nasional (BPN) Kabupaten Pesawaran </td>
                          <td class="text-center">Pemeriksaan Perkara</td>
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
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Rabu, 04 Jan. 2023</td>
                                <td class="text-center">Panjar Biaya Perkara</td>
                                <td class="text-center">Penggugat</td>
                                <td class="text-center">Rp. 710.000 </td>
                                <td class="text-center"></td>
                                <td class="text-center">Rp. 710.000</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Rabu, 04 Jan. 2023</td>
                                <td class="text-center">Biaya Pendaftaran/ PNPB</td>
                                <td class="text-center">Bagus Pahlefi</td>
                                <td class="text-center"> </td>
                                <td class="text-center">Rp. 30.000</td>
                                <td class="text-center">Rp. 680.000</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Rabu, 04 Jan. 2023</td>
                                <td class="text-center">Biaya Pendaftaran/ PNPB</td>
                                <td class="text-center">Bagus Pahlefi</td>
                                <td class="text-center"> </td>
                                <td class="text-center">Rp. 30.000</td>
                                <td class="text-center">Rp. 680.000</td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td colspan="4" class="text-dark fw-bold text-center">Total</td>
                            <td class="text-dark fw-bold text-center">Rp. 710.000</td>
                            <td class="text-dark fw-bold text-center">Rp. 710.000</td>
                            <td class="text-dark fw-bold text-center">0</td>
                            <td class="text-primary text-center">
                                <a href="#">Bukti Transfer</a>
                            </td>
                            
                        </tfoot>
                        
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection