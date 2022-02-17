@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tabel Mobil</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('mobil.create') }}"> Input Data Mobil</a>
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
            <th>ID Mobil</th>
            <th width="280px"class="text-center">Nama Mobil</th>
            <th width="280px"class="text-center">Mesin</th>
            <th width="280px"class="text-center">Kapasitas Penumpang</th>
            <th width="280px"class="text-center">Tipe</th>
            <th width="280px"class="text-center">Stock</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($mobil as $mob)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $mob->id_mobil }}</td>
            <td>{{ $mob->nama_mobil }}</td>
            <td>{{ $mob->mesin }}</td>
            <td>{{ $mob->kapasitas_penumpang }}</td>
            <td>{{ $mob->tipe }}</td>
            <td>{{ $mob->stock }}</td>
            <td class="text-center">
                <form action="{{ route('mobil.destroy',$mob->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('mobil.show',$mob->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('mobil.edit',$mob->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data mobil ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	
        <a class="btn btn-success" href="/"> Index</a>
		<a class="btn btn-secondary" href="{{ route('bursaku.index') }}"> Tabel Kendaraan</a>
		<a class="btn btn-secondary" href="{{ route('motor.index') }}"> Tabel Motor</a>
        <a class="btn btn-success" href="stock1"> Stock Mobil/Pembelian/Detail Transaksi</a>
        <a class="btn btn-success" href="stock2"> Stock Motor/Pembelian/Detail Transaksi</a>
    {!! $mobil->links() !!}

				<br><br>
				<p> Input ID Kendaraan harus sama dengan ID pada Mobil Maupun Motor karna akan digunakkan sebagai inner join
				Contoh id_kendaraan(2)=id_motor(2)</p>
@endsection