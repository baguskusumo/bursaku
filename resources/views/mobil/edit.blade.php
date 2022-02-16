@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Mobil</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('motor.index') }}"> Back</a>
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

    <form action="{{ route('mobil.update',$mobil->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Mobil:</strong>
                <input type="text" name="id_mobil" class="form-control" placeholder="ID Mobil" value="{{ $mobil->id_mobil }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mesin:</strong>
                <input type="text" name="mesin" value="{{ $mobil->mesin }}" class="form-control" placeholder="Mesin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kapasitas Penumpang:</strong>
                <input type="text" name="kapasitas_penumpang" value="{{ $mobil->kapasitas_penumpang }}" class="form-control" placeholder="Kapasitas Penumpang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe:</strong>
                <input type="text" name="tipe" value="{{ $mobil->tipe }}" class="form-control" placeholder="Tipe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection