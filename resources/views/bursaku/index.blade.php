@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tabel Kendaraan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('bursaku.create') }}"> Input Data Kendaraan</a>
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
            <th>ID Kendaraan</th>
            <th width="280px"class="text-center">Tahun Keluaran</th>
            <th width="280px"class="text-center">Warna</th>
            <th width="280px"class="text-center">Harga</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($bursaku as $bursa)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $bursa->id_kendaraan }}</td>
            <td>{{ $bursa->tahun_keluaran }}</td>
            <td>{{ $bursa->warna }}</td>
            <td>{{ $bursa->harga }}</td>
            <td class="text-center">
                <form action="{{ route('bursaku.destroy',$bursa->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('bursaku.show',$bursa->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('bursaku.edit',$bursa->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	
				<a class="btn btn-success" href="/"> Index</a>
				<a class="btn btn-secondary" href="{{ route('motor.index') }}"> Tabel Motor</a>
				<a class="btn btn-secondary" href="{{ route('mobil.index') }}"> Tabel Mobil</a>
				<a class="btn btn-success" href="stock1"> Stock Mobil/Pembelian/Detail Transaksi</a>
				<a class="btn btn-success" href="stock2"> Stock Motor/Pembelian/Detail Transaksi</a>
    {!! $bursaku->links() !!}
	
				<br><br>
				<p> Input ID Kendaraan harus sama dengan ID pada Mobil Maupun Motor karna akan digunakkan sebagai inner join
				Contoh id_kendaraan(2)=id_motor(2)</p>

@endsection