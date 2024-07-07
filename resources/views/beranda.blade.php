@section('title', 'Beranda')
@include('layouts.kepala')
@include('layouts.sidebar')
<div class="page-heading">
    <h3>Beranda</h3>
    <div class="page-content">
        <section class="row">
            @if (session('success2'))
                <div class="alert alert-success">
                    {{ session('success2') }}
                </div>
            @endif
            <div class="col-0 col-lg-0"> <!-- ppppppppppp -->
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Jumlah Data Pegawai</h6>
                                            <h6 class="font-extrabold mb-0">{{ $jumlahPegawai }}</h6>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Data Admin</h6>
                                        <h6 class="font-extrabold mb-0">{{ $jumlahAdmin }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Data Pegawai
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive datatable-minimal">
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>E-Mail</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->NIP }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->telepon }}</td>
                                        <td>{{ $p->jabatan }}</td>
                                        <td><span class="badge {{ $p->status == 'Aktif' ? 'bg-success' : 'bg-danger' }}">{{ $p->status }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@include('layouts.bawah')
