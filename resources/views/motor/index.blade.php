@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tabel Motor</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('motor.create') }}"> Input Data Motor</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>ID Motor</th>
            <th width="280px"class="text-center">Nama Motor</th>
            <th width="280px"class="text-center">Mesin</th>
            <th width="280px"class="text-center">Tipe Suspensi</th>
            <th width="280px"class="text-center">Tipe Transmisi</th>
            <th width="280px"class="text-center">Stock</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($motor as $mot)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $mot->id_motor }}</td>
            <td>{{ $mot->nama_motor }}</td>
            <td>{{ $mot->mesin }}</td>
            <td>{{ $mot->tipe_suspensi }}</td>
            <td>{{ $mot->tipe_transmisi }}</td>
            <td>{{ $mot->stock }}</td>
            <td class="text-center">
                <form action="{{ route('motor.destroy',$mot->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('motor.show',$mot->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('motor.edit',$mot->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data motor ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	
        <a class="btn btn-success" href="/"> Index</a>
		<a class="btn btn-secondary" href="{{ route('bursaku.index') }}"> Tabel Kendaraan</a>
		<a class="btn btn-secondary" href="{{ route('mobil.index') }}"> Tabel Mobil</a>
        <a class="btn btn-success" href="stock1"> Stock Mobil/Pembelian/Detail Transaksi</a>
        <a class="btn btn-success" href="stock2"> Stock Motor/Pembelian/Detail Transaksi</a>
    {!! $motor->links() !!}

				<br><br>
				<p> Input ID Kendaraan harus sama dengan ID pada Mobil Maupun Motor karna akan digunakkan sebagai inner join
				Contoh id_kendaraan(2)=id_motor(2)</p>
@endsection