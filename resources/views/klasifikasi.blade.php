@extends('admin')
@section('content')
    <div class="container-fluid">
        <table class="table table-striped  table-responsive">
            <thead>
                <tr>
                    <th>Nama Penggugat</th>
                    <th>Nama Tergugat</th>
                    <th>Hasil Predict</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $i)
              <tr>
                <td>{{$i->nama_penggugat}}</td>
                <td>{{$i->nama_tergugat}}</td>
                <td>80%</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection