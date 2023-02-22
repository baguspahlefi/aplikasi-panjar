@extends('layouts.admin')
@section('title')
    Dashboard Admin - Aplikasi Panjar
@endsection
@section('content')
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #30923A;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">
            Admin Aplikasi Panjar
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion bg-success text-white" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link text-white" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
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
                                            <th class="col text-center">Tanggal</th>
                                            <th class="col text-center">Penggugat</th>
                                            <th class="col text-center">Tergugat</th>
                                            <th class="col text-center">Status Perkara</th>
                                        </tr>
                                    </thead>
                                  
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
                        <div class="row">
                            <div class="col-12 float-end">
                                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Progres
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
                                            <form class="row g-3">
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Nomor Perkara</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Tanggal Pendaftaran</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Penggugat</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Tergugat</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                <div class="col-6">
                                                    <p class="fs-5 my-auto mx-auto">Prodeo</p>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                                </div>
                                                

                                              </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Simpan</button>
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
</body>
@endsection