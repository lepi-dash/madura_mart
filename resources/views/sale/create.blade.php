@extends('be.master')
@section('menu')
  @include('be.menu')
@endsection
@section('sale')
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
    </div>
  </nav>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <input type="text" class="form-control fs-1 fw-bold bg-secondary text-white text-center" id="total_bayar"
              name="total_bayar"
              value="@if(isset(session('data')->total_bayar)){{ number_format(session('data')->total_bayar, 0, ',', '.') }}@else{{ 'Rp, -' }}@endif"
              disabled>
          </div>
          <div class="card-body px-0 pt-0 pb-2 border border-2 border-secondary border-radius-lg mt-3 mb-2 ms-4 me-4">
            <form action="{{ route('sale.store')}}" method="POST" id="form" enctype="multipart/form-data">
              @csrf
              <div class="row ms-3 me-3">
                <div class="col-lg-6 col-md-6">
                  <div class="mb-3 px-3 pt-3">
                    <label for="no_nota" class="form-label">No Invoice</label>
                    <input type="text" class="form-control" id="no_nota" name="no_nota"
                      value="@if(isset(session('data')->no_nota)){{ session('data')->no_nota }}@endif" readonly>
                  </div>
                  <div class="mb-3 px-3 pt-3">
                    <label for="id_barang" class="form-label">Product</label>
                    <select class="form-control" id="id_barang" name="id_barang">
                      <option value="" selected>Select Product</option>
                      @foreach($products as $product)
                        <option data-harga-jual="{{ $product->harga_jual }}" value="{{ $product->id }}"
                          @if(isset(session('data')->id_barang) && session('data')->id_barang == $product->id) selected
                          @endif>
                          {{ $product->nama_barang }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3 px-3 pt-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="text" class="form-control" id="subtotal" name="sub_total" readonly>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="mb-3 px-3 pt-3">
                    <label for="harga_jual" class="form-label">Selling Price</label>
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" readonly>
                  </div>
                  <div class="mb-3 px-3 pt-3">
                    <label for="jumlah_jual" class="form-label">Selling Amount</label>
                    <input type="text" class="form-control" id="jumlah_jual" name="jumlah_jual"
                      placeholder="Enter Amount">
                  </div>
                </div>
              </div>
              <div class="row ms-3 me-3 mt-3">
                <div class="col-12">
                  <div class="px-3 pb-3 text-end">
                    <a href="{{ route('purchase.index')}}" class="btn bg-gradient-secondary me-3">Cancel</a>
                    <button type="button" id="simpan" class="btn bg-gradient-primary">Save New {{ $tittle }}</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Sales Data</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2 border border-2 border-secondary border-radius-lg mt-3 mb-3 ms-4 me-4">
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
                      <td class="text-center font-weight-bolder text-xs mb-0">Rp
                        {{ number_format($data->harga_jual, 0, ',', '.') }}
                      </td>

                      {{-- 10. Purchase Price --}}
                      <td class="text-center font-weight-bolder text-xs mb-0">Rp
                        {{ number_format($data->harga_beli, 0, ',', '.') }}
                      </td>

                      {{-- 11. Selling Margin --}}
                      <td class="text-center font-weight-bolder text-xs mb-0">{{ $data->margin_jual }}</td>

                      {{-- 12. Quantity --}}
                      <td class="text-center font-weight-bolder text-xs mb-0">{{ $data->jumlah_beli }}</td>

                      {{-- 13. Image --}}
                      <td class="text-center font-weight-bolder text-xs mb-0">
                        <img src="{{ asset('storage/' . $data->foto_barang) }}" class="img-thumbnail cursor-pointer"
                          alt="img product" width="50" data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop{{ $data->id_barang }}">
                      </td>

                      {{-- 14. Sub Total --}}
                      <td class="text-center font-weight-bolder text-xs mb-0">Rp
                        {{ number_format($data->sub_total, 0, ',', '.') }}
                      </td>

                      {{-- 15. Total Pay --}}
                      <td class="text-center font-weight-bolder text-xs mb-0">Rp
                        {{ number_format($data->total_bayar, 0, ',', '.') }}
                      </td>

                
                    </tr>

                    <div class="modal fade" id="staticBackdrop{{ $data->id_barang }}" data-bs-backdrop="static"
                      tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">{{ $data->nama_barang }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            <img src="{{ asset('storage/' . $data->foto_barang) }}" class="img-thumbnail" alt="Product"
                              width="75%">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script>
        let btnSimpan = document.getElementById('simpan');
        let form = document.getElementById('form');
        let id_barang = document.getElementById('id_barang');
        let no_nota = document.getElementById('no_nota');
        let jumlah_jual = document.getElementById('jumlah_jual');
        let harga_jual = document.getElementById('harga_jual');
        let subtotal = document.getElementById('subtotal');
        let total_bayar_input = document.getElementById('total_bayar');

        const rupiah = (number) => {
          return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
          }).format(number);
        };

        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            evt.preventDefault();
          }
          return true;
        }

        jumlah_jual.addEventListener('keypress', hanyaAngka);

        jumlah_jual.addEventListener('focus', function () {
          if (jumlah_jual.value.trim() === '0') {
            jumlah_jual.value = '';
          }
        });

        jumlah_jual.addEventListener('blur', function () {
          if (jumlah_jual.value.trim() === '') {
            jumlah_jual.value = '0';
          }
        });

        function subTotal(hrg_jual, jml_jual) {
          return hrg_jual * jml_jual;
        }

        function totalBayar() {
          let total_bayar_lama;
          @if(isset(session('data')->total_bayar))
            total_bayar_lama = {{ session('data')->total_bayar }};
          @else
            total_bayar_lama = 0;
          @endif

          // Bersihkan format rupiah dari subtotal sebelum dijumlahkan
          let sub = parseInt(subtotal.value.replace(/[^0-9]/g, '')) || 0;
          return parseInt(total_bayar_lama) + sub;
        }

        function jalankanHitungTotal() {
          let st = parseInt(subtotal.value.replace(/[^0-9]/g, '')) || 0;
          let total_bayar_lama = 0;
          @if(isset(session('data')->total_bayar))
            total_bayar_lama = {{ session('data')->total_bayar }};
          @endif
          total_bayar_input.value = rupiah(st + total_bayar_lama);
        }

        // Bagian id_barang change dengan struktur IF-ELSE yang kamu mau
        id_barang.addEventListener('change', function () {
          let selectedOption = id_barang.options[id_barang.selectedIndex];
          let hargaJual = selectedOption.getAttribute('data-harga-jual') || 0;

          harga_jual.value = rupiah(hargaJual);

          if (jumlah_jual.value.trim() === '' || jumlah_jual.value.trim() === '0') {
            subtotal.value = rupiah(subTotal(parseInt(hargaJual), 0));
            total_bayar_input.value = rupiah(totalBayar());
          } else {
            let hasilSub = subTotal(parseInt(hargaJual), parseInt(jumlah_jual.value));
            subtotal.value = rupiah(hasilSub);

            @if (isset(session('data')->total_bayar))
              total_bayar_input.value = rupiah(parseInt({{ session('data')->total_bayar }}) + hasilSub);
            @else
              total_bayar_input.value = rupiah(hasilSub);
            @endif
          }
        });

        // Sinkronisasi saat jumlah diketik agar subtotal langsung berubah
        jumlah_jual.addEventListener('keyup', function () {
          if (id_barang.value !== "") {
            id_barang.dispatchEvent(new Event('change'));
          }
        });

        btnSimpan.addEventListener('click', function () {
          if (id_barang.value === '' || harga_jual.value.trim() === '' || jumlah_jual.value.trim() === '' || jumlah_jual.value == '0') {
            swal("Invalid!", "Please fill Product, Selling Price, and Quantity!", "error");
            return;
          }
          form.submit();
        });

        @if (session('success'))
          swal({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            buttons: {
              confirm: {
                text: "Yes, add new item!",
                value: true,
                visible: true,
                className: "btn btn-info",
                closeModal: true
              },
              cancel: {
                text: "No, cancel!",
                value: false,
                visible: true,
                className: "btn btn-danger",
                closeModal: true
              }
            }
          }).then((isConfirm) => {
            if (isConfirm) {
              no_nota.readOnly = true;
              // Logika tambahan jika ada distributor/tgl_nota yang mau di-disable
            } else {
              window.location.href = "{{ route('sale.index') }}";
            }
          });
        @endif
      </script>
@endsection