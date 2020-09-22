<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Pengguna extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'pengguna';

        protected $fillable = [
            'name_pembuat',
            'nama_penggugat',
            'nama_tergugat',
            'usia_penggugat',
            'usia_tergugat',
            'lama_nikah',
            'jumlah_anak',
            'pekerjaan_penggugat',
            'pekerjaan_tergugat',
            'alamat_penggugat',
            'alamat_tergugat',
            'mediasi',
            'indikator',
            'email', 
            'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    }