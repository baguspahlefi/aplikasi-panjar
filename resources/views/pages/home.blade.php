@extends('layouts.app')
@section('title')
    SIMPANTAUMULI POP - PTUN BANDAR LAMPUNG
@endsection
@section('content')
    <!-- Hero Section  -->
    <section id="hero">
        <div class="container hero-container w-100">
            <div class="row h-100 ">
                <div class="col-md-6 my-auto">
                    <h3 class="hero text-uppercase text-light">
                    SIMPANTAUMULI POP
                    </h3>
                    <h4 class="hero text-uppercase text-light">
                    Simplifikasi Pemantauan dan Pengembalian Sisa Panjar Ongkos Perkara pada Pengadilan Tata Usaha Negara Bandar Lampung
                    </h3>
                    <a href=" {{route('ajukanPanjar')}} ">
                        <button class="btn btn-panjar">Form Administrasi</button>
                    </a>
                    <a href=" {{route('pantauPanjar')}} ">
                        <button class="btn btn-panjar mx-4">Pantau Panjar</button>
                    </a>
                </div>
            </div>

            <img src="images/Home.png" class="hero-image position-absolute end-0 bottom-0" height="600" width="600" alt="">
        </div>
    </section>

        <!-- Tentang Section -->
    <section id="tentang-section">
        <div class="container w-100">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-dark text-judul-tentang">Sekilas Tentang
                        SIMPANTAUMULI POP</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 col-sm-12 text-dark">
                    <h5 class="font-small text-center text-tentang">
                    Berdasarkan Ketentuan SEMA No 4 Tahun 2008 tanggal 13 Juni 2008 tentang Pemungutan Biaya Perkara
                    "Apabila ada kelebihan biaya perkara yang tidak terpakai dalam proses berperkara, maka biaya tersebut wajib dikembalikan kepada pihak yang berhak"
                    Bilamana biaya tersebut tidak diambil dalam waktu 6 (enam) bulan setelah pihak yang bersangkutan diberitahu, maka uang kelebihan tersebut dikeluarkan dari buku jurnal yang bersangkutan dan dicatat dalam buku tersendiri sebagai uang tak bertuan (1948 KUH Perdata).
                    Uang tak bertuan tersebut secara berkala disetorkan ke kas negara.
                    </h5>
                </div>
            </div>
        </div>
    </section>
@endsection