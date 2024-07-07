@section('title', 'Tambah Pegawai')
@include('layouts.kepala')
@include('layouts.sidebar')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Data Pegawai</h3>
                <p class="text-subtitle text-muted">Form Untuk Menambahkan Data Pegawai</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="multiple-column-form">
        <div class="row match-height">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Data Pegawai Dengan Tepat Dan Benar!</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{ route('pegawai.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nomor Induk Pegawai</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                   placeholder="Nomor Induk Pegawai" name="nip">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Nama</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                   placeholder="Nama Lengkap" name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Email</label>
                                            <input type="email" id="city-column" class="form-control" placeholder="Email"
                                                   name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Alamat</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                   name="alamat" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Telepon</label>
                                            <input type="text" id="company-column" class="form-control"
                                                   name="telepon" placeholder="Telepon">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Jabatan</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                   name="jabatan" placeholder="Jabatan">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('layouts.bawah')
