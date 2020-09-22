<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Pengguna;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:pengguna');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_pembuat' => 'required|string|max:255',
            'nama_penggugat' => 'required|string|max:255',
            'nama_tergugat' => 'required|string|max:255',
            'usia_penggugat' => 'required|string|max:255',
            'usia_tergugat' => 'required|string|max:255',
            'lama_nikah' => 'required|string|max:255',
            'jumlah_anak' => 'required|string|max:255',
            'pekerjaan_penggugat' => 'required|string|max:255',
            'pekerjaan_tergugat' => 'required|string|max:255',
            'alamat_penggugat' => 'required|string|max:255',
            'alamat_tergugat' => 'required|string|max:255',
            'mediasi' => 'required|string|max:255',
            'indikator' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPenggunaRegisterForm()
    {
        return view('auth.register', ['url' => 'pengguna']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return Pengguna::create([
            'name_pembuat' => $data['name_pembuat'],
            'nama_penggugat' => $data['nama_penggugat'],
            'nama_tergugat' => $data['nama_tergugat'],
            'usia_penggugat' => $data['usia_penggugat'],
            'usia_tergugat' => $data['usia_tergugat'],
            'lama_nikah' => $data['lama_nikah'],
            'jumlah_anak' => $data['jumlah_anak'],
            'pekerjaan_penggugat' => $data['pekerjaan_penggugat'],
            'pekerjaan_tergugat' => $data['pekerjaan_tergugat'],
            'alamat_penggugat' => $data['alamat_penggugat'],
            'alamat_tergugat' => $data['alamat_tergugat'],
            'mediasi' => $data['mediasi'],
            'indikator' => $data['indikator'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createPengguna(Request $request)
    {
        $this->validator($request->all())->validate();
        Blogger::create([
            'name_pembuat' => $request->name_pembuat,
            'nama_penggugat'=> $request->nama_penggugat,
            'nama_tergugat' => $request->nama_tergugat,
            'usia_penggugat' => $request->usia_penggugat,
            'usia_tergugat' => $request->usia_tergugat,
            'lama_nikah' => $request->lama_nikah,
            'jumlah_anak' => $request->jumlah_anak,
            'pekerjaan_penggugat' => $request->pekerjaan_penggugat,
            'pekerjaan_tergugat' => $request->pekerjaan_tergugat,
            'alamat_penggugat' => $request->alamat_penggugat,
            'alamat_tergugat' => $request->alamat_tergugat,
            'mediasi' => $request->mediasi,
            'indikator' => $request->indikator,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/pengguna');
    }
}