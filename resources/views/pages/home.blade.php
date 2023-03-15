@extends('layouts.app')
@section('title')
    SIMPANTAUMULI POP - PTUN BANDAR LAMPUNG
@endsection
@section('content')
    <!-- Hero Section  -->
    <section id="hero" style="background-image: url(images/Home-polos.png);">
        <div class="container hero-container w-100">
            <div class="row h-100 ">
                <div class="col-md-6 transparent-bg">
                    <div class="container mx-4">
                        <h2 class="hero text-uppercase mt-4">
                            SIMPANTAUMULI POP
                        </h2>
                        <h3 class="hero text-uppercase mt-4">
                        Simplifikasi Pemantauan dan Pengembalian Sisa Panjar Ongkos Perkara pada Pengadilan Tata Usaha Negara Bandar Lampung
                        </h3>

                        <a href=" {{route('ajukanPanjar')}} ">
                            <button class="btn btn-panjar">Form Administrasi</button>
                        </a>
                        <a href=" {{route('pantauPanjar')}} ">
                            <button class="btn btn-panjar">Pantau Panjar</button>
                        </a>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang-section">
        <div class="container w-100">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-dark text-judul-tentang">SEKILAS TENTANG
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 col-sm-12 text-dark">
                    <h5 class="font-small text-center text-tentang">
                        <p align="justify">
                        Berdasarkan Ketentuan Sekretaris Mahkamah Agung RI Nomor 4 Tahun 2008 tanggal 13 Juni 2008
                        tentang Pemungutan Biaya Perkara "Apabila ada kelebihan biaya perkara yang tidak terpakai
                        dalam proses berperkara, maka biaya tersebut wajib dikembalikan kepada pihak yang berhak"
                        Bilamana biaya tersebut tidak diambil dalam waktu 6 (enam) bulan setelah pihak yang bersangkutan
                        diberitahu, maka uang kelebihan tersebut dikeluarkan dari buku jurnal yang bersangkutan dan
                        dicatat dalam buku tersendiri sebagai uang tak bertuan (1948 KUH Perdata).
                        Uang tak bertuan tersebut secara berkala disetorkan ke kas negara. </p>
                    </h5>
                </div>
                <div class="col-lg-6 col-sm-12 text-dark">
                    <h5 class="font-small text-center text-tentang">
                        <p align="justify">
                        Sebagaimana saran dari responden survei yang dilaksanakan oleh
                        PTUN Bandar Lampung, telah dibuat penyederhanaan berupa aplikasi
                        Pemantauan dan Pengembalian Sisa Panjar Biaya Perkara, sehingga pihak
                        dapat memantau dan mendapatkan notifikasi terhadap panjar biaya perkara
                        apabila perkara telah putus. Sehingga pihak tidak perlu lagi datang ke pengadilan
                        untuk mengambil sisa panjar ongkos perkara dan apabila sisa panjar tersebut telah disetorkan
                        maka pihak dapat melihat bukti transfer melalui aplikasi tersebut. </p>
                    </h5>
                </div>
            </div>
        </div>
    </section>
@endsection