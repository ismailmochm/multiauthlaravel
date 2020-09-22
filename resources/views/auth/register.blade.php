@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name Pembuat" class="col-md-4 col-form-label text-md-right">{{ __('nama_pembuat') }}</label>

                            <div class="col-md-6">
                                <input id="name_pembuat" type="text" class="form-control @error('name_pembuat') is-invalid @enderror" name="name_pembuat" value="{{ old('name_pembuat') }}" required autocomplete="name_pembuat" autofocus>

                                @error('name_pembuat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nama Penggugat" class="col-md-4 col-form-label text-md-right">{{ __('nama_penggugat') }}</label>

                            <div class="col-md-6">
                                <input id="nama_penggugat" type="text" class="form-control @error('nama_penggugat') is-invalid @enderror" name="nama_penggugat" value="{{ old('nama_penggugat') }}" required autocomplete="name" autofocus>

                                @error('nama_penggugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nama Tergugat" class="col-md-4 col-form-label text-md-right">{{ __('nama_tergugat') }}</label>

                            <div class="col-md-6">
                                <input id="nama_tergugat" type="text" class="form-control @error('nama_tergugat') is-invalid @enderror" name="nama_tergugat" value="{{ old('nama_tergugat') }}" required autocomplete="name" autofocus>

                                @error('nama_tergugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Usia penggugat" class="col-md-4 col-form-label text-md-right">{{ __('usia_penggugat') }}</label>

                            <div class="col-md-6">
                                <input id="usia_penggugat" type="Number" class="form-control @error('usia_penggugat') is-invalid @enderror" name="usia_penggugat" value="{{ old('usia_penggugat') }}" required autocomplete="name" autofocus>

                                @error('usia_penggugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Usia tergugat" class="col-md-4 col-form-label text-md-right">{{ __('usia_tergugat') }}</label>

                            <div class="col-md-6">
                                <input id="usia_tergugat" type="text" class="form-control @error('usia_tergugat') is-invalid @enderror" name="usia_tergugat" value="{{ old('usia_tergugat') }}" required autocomplete="name" autofocus>

                                @error('usia_tergugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Lama nikah" class="col-md-4 col-form-label text-md-right">{{ __('lama_nikah') }}</label>

                            <div class="col-md-6">
                                <input id="lama_nikah" type="text" class="form-control @error('lama_nikah') is-invalid @enderror" name="lama_nikah" value="{{ old('lama_nikah') }}" required autocomplete="name" autofocus>

                                @error('lama_nikah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jumlah anak" class="col-md-4 col-form-label text-md-right">{{ __('jumlah_anak') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah_anak" type="text" class="form-control @error('jumlah_anak') is-invalid @enderror" name="jumlah_anak" value="{{ old('jumlah_anak') }}" required autocomplete="name" autofocus>

                                @error('jumlah_anak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Pekerjaan penggugat" class="col-md-4 col-form-label text-md-right">{{ __('pekerjaan_penggugat') }}</label>

                            <div class="col-md-6">
                                <input id="pekerjaan_penggugat" type="text" class="form-control @error('pekerjaan_penggugat') is-invalid @enderror" name="pekerjaan_penggugat" value="{{ old('pekerjaan_penggugat') }}" required autocomplete="name" autofocus>

                                @error('pekerjaan_penggugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan_tergugat" class="col-md-4 col-form-label text-md-right">{{ __('pekerjaan_tergugat') }}</label>

                            <div class="col-md-6">
                                <input id="pekerjaan_tergugat" type="text" class="form-control @error('pekerjaan_tergugat') is-invalid @enderror" name="pekerjaan_tergugat" value="{{ old('pekerjaan_tergugat') }}" required autocomplete="name" autofocus>

                                @error('pekerjaan_tergugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Alamat penggugat" class="col-md-4 col-form-label text-md-right">{{ __('alamat_penggugat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat_penggugat" type="text" class="form-control @error('alamat_penggugat') is-invalid @enderror" name="alamat_penggugat" value="{{ old('alamat_penggugat') }}" required autocomplete="name" autofocus>

                                @error('alamat_penggugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Alamat tergugat" class="col-md-4 col-form-label text-md-right">{{ __('alamat_tergugat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat_tergugat" type="text" class="form-control @error('alamat_tergugat') is-invalid @enderror" name="alamat_tergugat" value="{{ old('alamat_tergugat') }}" required autocomplete="name" autofocus>

                                @error('alamat_tergugat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mediasi" class="col-md-4 col-form-label text-md-right">{{ __('mediasi') }}</label>

                            <div class="col-md-6">
                                <input id="mediasi" type="text" class="form-control @error('mediasi') is-invalid @enderror" name="mediasi" value="{{ old('mediasi') }}" required autocomplete="name" autofocus>

                                @error('mediasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="indikator" class="col-md-4 col-form-label text-md-right">{{ __('indikator') }}</label>

                            <div class="col-md-6">
                                <input id="indikator" type="text" class="form-control @error('indikator') is-invalid @enderror" name="indikator" value="{{ old('indikator') }}" required autocomplete="name" autofocus>

                                @error('indikator')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
