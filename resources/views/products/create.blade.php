@extends ('be.master')

@section('menu')
    @include ('be.menu')
@endsection

@section('products')

    <!-- NAVBAR ATAS -->
    <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        id="navbarBlur"
        navbar-scroll="true"
    >
        <div class="container-fluid py-1 px-3">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        {{ $tittle }}
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">{{ $tittle }}</h6>
            </nav>

            <div
                class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
                id="navbar"
            >
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Type here..."
                        >
                    </div>
                </div>

                <ul class="navbar-nav justify-content-end">

                    <li class="nav-item d-flex align-items-center">
                        <!--  -->
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a
                            href="javascript:;"
                            class="nav-link text-body p-0"
                            id="iconNavbarSidenav"
                        >
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a
                            href="javascript:;"
                            class="nav-link text-body p-0"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>

                        <ul
                            class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton"
                        >

                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img
                                                src="{{ asset('be/assets/img/team-2.jpg') }}"
                                                class="avatar avatar-sm me-3"
                                            >
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img
                                                src="{{ asset('be/assets/img/small-logos/logo-spotify.svg') }}"
                                                class="avatar avatar-sm bg-gradient-dark me-3"
                                            >
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                            <!-- SVG tetap utuh -->
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR ATAS -->

    <!-- Main Bagian Kanan -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">

                <div class="card-header pb-0">
                    <h6>Add New {{ $tittle }}</h6>
                </div>

                <div class="card-body px-0 pt-0 pb-2">

                    <form
                        action="{{ route('products.store') }}"
                        method="POST"
                        class="p-3"
                        id="frm"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="mb-3 px-3">
                                    <label for="kdbarang" class="form-label">Code</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="kdbarang"
                                        name="kdbarang"
                                        placeholder="Input code"
                                        required
                                        value="{{ old('kdbarang') }}"
                                        maxlength="15"
                                    >
                                </div>

                                <div class="mb-3 px-3">
                                    <label for="nama_barang" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nama_barang"
                                        name="nama_barang"
                                        placeholder="Input Name"
                                        required
                                        value="{{ old('nama_barang') }}"
                                        maxlength="50"
                                    >
                                </div>

                                <div class="mb-3 px-3">
                                    <label for="jenis_barang" class="form-label">Type</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="jenis_barang"
                                        name="jenis_barang"
                                        placeholder="Input Type"
                                        required
                                        value="{{ old('jenis_barang') }}"
                                        maxlength="50"
                                    >
                                </div>

                                <div class="mb-3 px-3">
                                    <label for="tgl_expired" class="form-label">Expired Date</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="tgl_expired"
                                        name="tgl_expired"
                                        required
                                        value="{{ old('tgl_expired') }}"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3 px-3">
                                    <label for="harga_jual" class="form-label">Price</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="harga_jual"
                                        name="harga_jual"
                                        required
                                        value="{{ old('harga_jual') ? old('harga_jual') : 0 }}"
                                        maxlength="11"
                                    >
                                </div>

                                <div class="mb-3 px-3">
                                    <label for="stok" class="form-label">Stock</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="stok"
                                        name="stok"
                                        required
                                        value="{{ old('stok') ? old('stok') : 0 }}"
                                        maxlength="11"
                                    >
                                </div>

                                <div class="mb-3 px-3">
                                    <label for="foto_barang" class="form-label">Image</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="foto_barang"
                                        name="foto_barang"
                                        required
                                    >
                                </div>
                            </div>

                        </div>

                        <button
                            type="button"
                            class="btn btn-primary"
                            id="btnsimpan"
                        >
                            Submit
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Main Bagian Kanan -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        let btnsimpan = document.getElementById('btnsimpan');
        let frm = document.getElementById('frm');
        let kdbarang = document.getElementById('kdbarang');
        let nama_barang = document.getElementById('nama_barang');
        let jenis_barang = document.getElementById('jenis_barang');
        let tgl_expired = document.getElementById('tgl_expired');
        let harga_jual = document.getElementById('harga_jual');
        let stok = document.getElementById('stok');
        let foto_barang = document.getElementById('foto_barang');

        btnsimpan.addEventListener('click', function () {

            if (kdbarang.value.trim() === '') {
                swal("Invalid", "Code cannot be empety!", "error");
                kdbarang.focus();
                return;
            }

            if (nama_barang.value.trim() === '') {
                swal("Invalid", "Name cannot be empety!", "error");
                nama_barang.focus();
                return;
            }

            if (jenis_barang.value.trim() === '') {
                swal("Invalid", "Type cannot be empety!", "error");
                jenis_barang.focus();
                return;
            }

            if (tgl_expired.value.trim() === '') {
                swal("Invalid", "Exp Date cannot be empety!", "error");
                tgl_expired.focus();
                return;
            }

            if (harga_jual.value.trim() === '') {
                swal("Invalid", "Price cannot be empety!", "error");
                harga_jual.focus();
                return;
            }

            if (stok.value.trim() === '') {
                swal("Invalid", "Stock cannot be empety!", "error");
                stok.focus();
                return;
            }

            if (foto_barang.value.trim() === '') {
                swal("Invalid", "Image cannot be empety!", "error");
                foto_barang.focus();
                return;
            }

            swal({
                title: "Berhasil!",
                text: "Data akan disimpan",
                icon: "success",
                buttons: false,
                timer: 1500
            }).then(() => {
                frm.submit();
            });
        });

        // @if (session('duplikat'))
        //     swal("Duplikat Data!", "{{ session('duplikat') }}", "error");
        // @endif
    </script>

@endsection
