@section('title', 'Pegawai Manager')
@include('layouts.kepala')
@include('layouts.sidebar')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Panel Administrator</h3>
                <p class="text-subtitle text-muted">Disini anda dapat melakukan perubahan data admin</p>
            </div>
            {{--            <div class="col-12 col-md-6 order-md-2 order-first">--}}
            {{--                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">--}}
            {{--                    <ol class="breadcrumb">--}}
            {{--                        <li class="breadcrumb-item">Dibuat Oleh Wahit Fitriyanto</li>--}}
            {{--                    </ol>--}}
            {{--                </nav>--}}
            {{--            </div>--}}
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Data Admin
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
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
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($semuaPegawai as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->NIP }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->telepon }}</td>
                                <td>{{ $p->jabatan }}</td>
                                <td><span class="badge {{ $p->status == 'Aktif' ? 'bg-success' : 'bg-danger' }}">{{ $p->status }}</span></td>
                                <td>
                                    <div style="display: flex;">
                                        <button type="button" class="btn btn-primary edit-btn1" data-bs-toggle="modal" data-bs-target="#editModal" data-NIP="{{ $p->NIP }}" data-nama="{{ $p->nama }}" data-email="{{ $p->email }}" data-alamat="{{ $p->alamat }}" data-telepon="{{ $p->telepon }}" data-jabatan="{{ $p->jabatan }}" data-status="{{ $p->status }}">
                                            Edit
                                        </button>
                                        <form action="{{ route('pegawai.destroy', $p->NIP) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        @foreach ($semuaPegawai as $p)
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pegawai.update', $p->NIP) }}" method="POST" id="editPegawaiForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="NIP" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="NIP" name="NIP" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Nonaktif">Nonaktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</div>
@include('layouts.bawah')
