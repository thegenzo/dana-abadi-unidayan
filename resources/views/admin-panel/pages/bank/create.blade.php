@extends('admin-panel.layout.app')

@section('title', 'Tambah Data Bank')

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-secondary shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Tambah Data Bank</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted"
                                        href="{{ route('admin-panel.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a class="text-muted"
                                        href="{{ route('admin-panel.banks.index') }}">Data Bank</a></li>
                                <li class="breadcrumb-item" aria-current="page">Tambah Data Bank</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center">
                            <img src="{{ asset('panel-assets/dist/images/breadcrumb/bank.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h4 class="mb-0 text-white card-title">Masukkan Data Bank Disini</h4>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <h3 class="text-white">Gagal Simpan Data</h3> 
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin-panel.banks.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="bank_name">Nama Bank <span class="text-danger">*</span></label>
                                <input type="text" name="bank_name" id="bank_name" class="form-control"
                                    value="{{ old('bank_name') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="account_number">Nomor Rekening <span class="text-danger">*</span></label>
                                <input type="number" name="account_number" id="account_number" class="form-control"
                                    value="{{ old('account_number') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="account_name">Atas Nama <span class="text-danger">*</span></label>
                                <input type="text" name="account_name" id="account_name" class="form-control"
                                    value="{{ old('account_name') }}">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('admin-panel.banks.index') }}" class="btn btn-warning mx-2">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
