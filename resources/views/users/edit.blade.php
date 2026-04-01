@extends('be.master')

@section('menu')
@include('be.menu')
@endsection

@section('users')

<div class="container mt-4">
    <h4>Edit {{ $tittle }}</h4>

    {{-- VALIDASI ERROR --}}
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

    <form action="{{ route('users.update', $data->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')

        {{-- ANTI AUTOFILL --}}
        <input type="text" style="display:none">
        <input type="password" style="display:none">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control"
                   value="{{ old('name', $data->name) }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control"
                   value="{{ old('email', $data->email) }}" required>
        </div>

        <div class="mb-3">
            <label>Password (kosongkan jika tidak ingin ganti)</label>
            <input type="password" name="password" class="form-control"
                   placeholder="Masukkan password baru"
                   autocomplete="new-password">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="">-- Pilih Role --</option>
                <option value="admin" {{ old('role',$data->role)=='admin'?'selected':'' }}>Admin</option>
                <option value="courier" {{ old('role',$data->role)=='courier'?'selected':'' }}>Courier</option>
                <option value="owner" {{ old('role',$data->role)=='owner'?'selected':'' }}>Owner</option>
                <option value="customer" {{ old('role',$data->role)=='customer'?'selected':'' }}>Customer</option>
            </select>
        </div>

        <div class="mb-3">
            <label>No Telepon</label>
            <input type="text" name="no_telepon" class="form-control"
                   value="{{ old('no_telepon',$data->no_telepon) }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat',$data->alamat) }}</textarea>
        </div>

        {{-- FOTO --}}
        <div class="mb-3">
            <label>Foto</label><br>

            <img id="preview"
                 src="{{ $data->foto ? asset('images/users/'.$data->foto) : asset('images/users/default.png') }}"
                 width="100"
                 class="mb-2 rounded cursor-pointer"
                 onclick="lihatFoto(this.src)">

            <input type="file" name="foto" class="form-control" onchange="previewFoto(event)">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

{{-- SWEET ALERT --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
// 🔥 PREVIEW FOTO
function previewFoto(event) {
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById('preview').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

// 🔥 POPUP FOTO
function lihatFoto(url) {
    swal({
        content: {
            element: "img",
            attributes: {
                src: url,
                style: "width:100%; border-radius:10px;"
            }
        }
    });
}
</script>

@endsection