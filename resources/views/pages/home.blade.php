@extends('layouts.app')
@section('title')
    Index - Aplikasi Panjar
@endsection
@section('content')
    <!-- Hero Section  -->
    <section id="hero">
        <div class="container hero-container w-100">
            <div class="row h-100 ">
                <div class="col-md-6 my-auto">
                    <h3 class="hero text-uppercase text-light">
                        Simplifikasi Pengembalian dan Pemantauan Panjar pada Pengadilan Tata Usaha Negara Bandar Lampung
                    </h3>
                    <h4 class="font-weight-normal text-light">
                        In publishing and graphic design, Lorem ipsum is a placeholder text commonly 
                        used to demonstrate the visual form of a 
                    </h4>
                    <a href=" {{route('ajukanPanjar')}} ">
                        <button class="btn btn-panjar">Form Adminitrasi</button>
                    </a>
                    <a href=" {{route('pantauPanjar')}} ">
                        <button class="btn btn-panjar mx-4">Pantau Panjar</button>
                    </a>
                </div>
            </div>

            <img src="images/Home.png" class="hero-image position-absolute end-0 bottom-0" width="400" alt="">
        </div>
    </section>

        <!-- Tentang Section -->
    <section id="tentang-section">
        <div class="container w-100">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="text-dark">Tentang Panjar</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 col-sm-12 text-dark">
                    <h2 style="width: 80%;" class="my-auto">
                        Better Solutions For 
                        Your Business
                    </h2>

                    <h4 class="font-weight-normal ">
                        In publishing and graphic design, Lorem ipsum is a placeholder text commonly 
                        used to demonstrate the visual form of a 
                    </h4>

                </div>
                <div class="col-md-6 col-sm-12 my-auto d-flex justify-content-end">
                    <img src="images/tentang.png" width="400" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection