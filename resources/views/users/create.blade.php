@extends('be.master')

@section('menu')
@include('be.menu')
@endsection

@section('users')

<div class="container mt-4">
    <h4>Add New Users</h4>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    {{-- SWEET ALERT ERROR --}}
    @if(session('error'))
    <script>
        swal("Error!", "{{ session('error') }}", "error");
    </script>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf

        {{-- ANTI AUTOFILL --}}
        <input type="text" style="display:none">
        <input type="password" style="display:none">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" autocomplete="new-password" required>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="courier">Courier</option>
            </select>
        </div>

        <div class="mb-3">
            <label>No Telepon</label>
            <input type="text" name="no_telepon" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('simpan'))
<script>
    swal("Success!", "{{ session('simpan') }}", "success");
</script>
@endif

@if(session('ubah'))
<script>
    swal("Success!", "{{ session('ubah') }}", "success");
</script>
@endif

@if(session('hapus'))
<script>
    swal("Deleted!", "{{ session('hapus') }}", "success");
</script>
@endif

@endsection