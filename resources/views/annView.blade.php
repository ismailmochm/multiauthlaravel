@extends('pengguna')
@section('content')
    <div class="container-fluid">
        <table class="table table-striped  table-responsive">
            <thead>
              <tr>
                <th>Usia Penggugat</th>
                <th>Usia tergugat</th>
                <th>Lama nikah</th>
                <th>Jumlah anak</th>
                <th>Mediasi</th>
                <th>Indikator</th>
                <th>action</th>
                <th>Hasil Ann</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $p)
                  <tr>
                    <td>{{$p->usia_penggugat}}</td>
                    <td>{{$p->usia_tergugat}}</td>
                  </tr> 
                @endforeach
            </tbody>
          </table>
    </div>
@endsection