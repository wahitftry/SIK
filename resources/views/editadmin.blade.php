@section('title', 'Admin Manager')
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
                    <table class="table" id="table1">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->username }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="#" class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#editAdminModal" data-id="{{ $admin->id }}" data-username="{{ $admin->username }}" data-email="{{ $admin->email }}">Edit</a>                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST">
                                            <form action="{{ route('admin.destroy', $admin->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
    <!-- Modal -->
    <div class="modal fade" id="editAdminModal" tabindex="-1" aria-labelledby="editAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAdminModalLabel">Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form goes here -->
                    <form id="editAdminForm" action="{{ route('admin.update', $admin->id) }}" method="POST">                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <!-- Add more fields as necessary -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="editAdminForm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.bawah')
