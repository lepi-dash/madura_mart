@extends ('be.master')
@section('menu')
    @include ('be.menu')
@endsection
@section('purchase')
    <!-- NAVBAR ATAS -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $tittle }}</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">{{ $tittle }}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <!-- <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                                            href="https://www.creative-tim.com/builder?ref=navbar-soft-ui-dashboard">Online Builder</a> -->

                        <a href="{{ route('purchase.create') }}" class="btn bg-gradient-dark  mb-0 me-3">Add
                            {{ $tittle }}</a>

                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
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
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('be/assets/img/team-2.jpg') }}"
                                                class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
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
                                            <img src="{{ asset('be/assets/img/small-logos/logo-spotify.svg') }}"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
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
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
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
    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Invoice No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Invoice Date</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Product Id</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Product Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Product Type</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Expired Date</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Stock</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Selling Price</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Purchase Price</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Selling Margin</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Quantity</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Image</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Sub Total</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Total Pay</th>
                                    </tr>
                                </thead>

<tbody>
    @foreach ($datas as $nmr => $data)
        <tr>
            {{-- 1. No --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $nmr + 1 . "." }}</td>

            {{-- 2. Invoice No --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $data->no_nota }}</td>

            {{-- 3. Invoice Date --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $data->tgl_nota }}</td>

            {{-- 4. Product Id --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $data->id_barang }}</td>

            {{-- 5. Product Name --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $data->nama_barang }}</td>

            {{-- 6. Product Type --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $data->jenis_barang }}</td>

            {{-- 7. Expired Date --}}
            <td class="font-weight-bolder text-xs mb-0">{{ $data->tgl_expired }}</td>

            {{-- 8. Stock --}}
            <td class="text-center font-weight-bolder text-xs mb-0">{{ $data->stok }}</td>

            {{-- 9. Selling Price --}}
            <td class="text-center font-weight-bolder text-xs mb-0">Rp {{ number_format($data->harga_jual, 0, ',', '.') }}</td>

            {{-- 10. Purchase Price --}}
            <td class="text-center font-weight-bolder text-xs mb-0">Rp {{ number_format($data->harga_beli, 0, ',', '.') }}</td>

            {{-- 11. Selling Margin --}}
            <td class="text-center font-weight-bolder text-xs mb-0">{{ $data->margin_jual }}</td>

            {{-- 12. Quantity --}}
            <td class="text-center font-weight-bolder text-xs mb-0">{{ $data->jumlah_beli }}</td>

            {{-- 13. Image --}}
            <td class="text-center font-weight-bolder text-xs mb-0">
                <img src="{{ asset('storage/' . $data->foto_barang) }}" class="img-thumbnail cursor-pointer" alt="img product" width="50" 
                     data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $data->id_barang }}">
            </td>

            {{-- 14. Sub Total --}}
            <td class="text-center font-weight-bolder text-xs mb-0">Rp {{ number_format($data->sub_total, 0, ',', '.') }}</td>

            {{-- 15. Total Pay --}}
            <td class="text-center font-weight-bolder text-xs mb-0">Rp {{ number_format($data->total_bayar, 0, ',', '.') }}</td>

            {{-- 16. AKSI (paling kanan) --}}
            <td class="text-center font-weight-bolder text-xs mb-0">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('purchase.edit', $data->id) }}"> 
                        <img src="{{ asset('be/assets/img/pen-3-outline-18.png') }}" alt="Edit" width="20" class="cursor-pointer me-2" title="Edit"> 
                    </a>
                    <a href="{{ route('purchase.destroy', $data->id) }}" onclick="hapus(event, this)">
                        <img src="{{ asset('be/assets/img/trash-fill-18.png') }}" alt="Delete" width="20" class="cursor-pointer" title="Delete">
                    </a>
                </div>
            </td>
        </tr>

        <div class="modal fade" id="staticBackdrop{{ $data->id_barang }}" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $data->nama_barang }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('storage/' . $data->foto_barang) }}" class="img-thumbnail" alt="Product" width="75%">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</tbody>


    
    <!-- End Main Bagian Kanan -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <form action="" method="post" id="frm">
        @method('delete')
        @csrf
    </form>
    <script>
        let frm = document.getElementById('frm');
        function hapus(event, el) {
            event.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        frm.action = el.href;
                        frm.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        }
    </script>

    <script>
        @if (session('btnsimpan'))
            swal("Success!", "{{ session('btnsimpan') }}", "success");
        @endif

        @if (session('ubah'))
            swal("Success!", "{{ session('ubah') }}", "success");
        @endif

        @if (session('hapus'))
            swal("Deleted!", "{{ session('hapus') }}", "success");
        @endif
    </script>


@endsection