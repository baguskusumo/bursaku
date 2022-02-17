@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Stock Motor</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('mobil.index') }}"> Back</a>
            </div>
        </div>
    </div>	
			<form action="{{ route('stock2.store') }}" method="POST">
			@csrf
			@foreach ($data as $k => $item)
			 <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Nama Motor:</strong>
						<input type="text" name="nama" readonly class="form-control" placeholder="Nama Mobil" value="{{ $item->nama_motor }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Mesin:</strong>
						<input type="text" name="mesin" readonly class="form-control" placeholder="Mesin" value="{{ $item->mesin }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Tahun Keluaran:</strong>
						<input type="text" name="tahun_keluaran" readonly class="form-control" placeholder="Tahun Keluaran" value="{{ $item->tahun_keluaran }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Warna:</strong>
						<input type="text" name="warna" readonly class="form-control" placeholder="Warna" value="{{ $item->warna }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Harga:</strong>
						<input type="text" name="harga" readonly class="form-control" placeholder="Harga" value="{{ $item->harga }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Stock:</strong>
						<input type="text" name="stock" readonly class="form-control" placeholder="Stock" value="{{ $item->stock }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<button type="submit" class="btn btn-primary">Beli</button>
				</div>
			</div>

			</form>
	
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Detail Pembayaran</h2>
            </div>
			<table class="table table-striped">
                <tr>
                    <th>Nama Motor</th>
                    <th>Mesin</th>
                    <th>Tahun Keluaran</th>
                    <th>Warna</th>
                    <th>Harga</th>
                </tr>
                @foreach ($data as $k => $item)
                    <tr>
                        <td>{{$item->nama_motor}}</td>
                        <td>{{$item->mesin}}</td>
                        <td>{{$item->tahun_keluaran}}</td>
                        <td>{{$item->warna}}</td>
                        <td>{{$item->harga}}</td>
                    </tr>
                @endforeach
            </table>
			
        </div>
    </div>	
			
                @endforeach
@endsection