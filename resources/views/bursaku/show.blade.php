@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Data Kendaraan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('bursaku.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Kendaraan:</strong>
                {{ $bursaku->id_kendaraan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Keluaran:</strong>
                {{ $bursaku->tahun_keluaran }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warna:</strong>
                {{ $bursaku->warna }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $bursaku->harga }}
            </div>
        </div>
    </div>
@endsection