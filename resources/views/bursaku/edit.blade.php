@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Kendaraan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('bursaku.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bursaku.update',$bursaku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Kendaraan:</strong>
                <input type="text" name="id_kendaraan" class="form-control" placeholder="ID Kendaraan" value="{{ $bursaku->id_kendaraan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Keluaraan:</strong>
                <input type="text" name="tahun_keluaran" value="{{ $bursaku->tahun_keluaran }}" class="form-control" placeholder="Tahun Keluaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warna:</strong>
                <input type="text" name="warna" value="{{ $bursaku->warna }}" class="form-control" placeholder="Warna">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="harga" value="{{ $bursaku->harga }}" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection