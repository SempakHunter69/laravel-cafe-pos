@extends('layouts.app')

@section('title', 'Tambah Produk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Produk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Produk</a></div>
                    <div class="breadcrumb-item"><a href="#">Daftar Produk</a></div>
                    <div class="breadcrumb-item">Tambah Produk</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tambah Produk Baru</h2>
                <p class="section-lead">Isi data-data yang diperlukan untuk menambah data Produk baru aplikasi anda</p>


                <div class="card">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf
                        <div class="card-header">
                            <h4>Masukkan Data Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <input type="text" name="description" id="description"
                                    class="form-control @error('description') is-invalid @enderror">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-usd"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        name="price">
                                </div>
                            </div>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Stock Produk</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-shopping-basket"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control @error('stocks') is-invalid @enderror"
                                        name="stocks">
                                </div>
                            </div>
                            @error('stocks')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="food" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Makanan</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="snack" class="selectgroup-input">
                                        <span class="selectgroup-button">Snack</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="drink" class="selectgroup-input">
                                        <span class="selectgroup-button">Drink</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
