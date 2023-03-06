@extends('layouts.app')
@section('title')
    Form Pengajuan Panjar - Aplikasi Panjar
@endsection
@section('content')
    <!-- Section input  -->
    <section id="form-input">
        <div class="container w-100">
            <div class="row" style="margin-top: 15vh">
                <div class="col-12 text-center">
                    <h3 class="text-dark">
                        Form Pengajuan Panjar
                    </h3>
                </div>
            </div>
            <div class="row h-100 ">
            <form action="{{route('ajukanPanjar.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">Nama Lengkap</label>
                        <input type="form-control" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">No Telepon</label>
                        <input type="form-control" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="No Telepon">
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">Nomor Perkara</label>
                        <input type="form-control" name="no_perkara" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Perkara">
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">Nomor Rekening</label>
                        <input type="form-control" name="no_rekening" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Rekening">
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">Upload KTP</label>
                        <div class="input-group mb-3">
                            <input name="ktp" type="file" class="form-control" id="inputGroupFile02">
                            </div>
                    </div>
                </div>
                <div class="col-md-4 my-auto">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark">Upload KTA</label>
                        <div class="input-group mb-3">
                            <input name="kta" type="file" class="form-control" id="inputGroupFile02">
                            </div>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="{{route('home')}}">
                            <button class="btn btn-light mx-4">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
           
            </div>
         
        </div>
    </section>
@endsection
    
    
