<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Repairs;
use App\Models\Problems;
use App\Models\Troubleshootings;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        $rusak = Troubleshootings::count('nama');
        $trashed = Troubleshootings::withTrashed()
            ->count('nama');
        $harga = problems::withTrashed()
            ->sum('harga_r');
        $problem = problems::withTrashed()
            ->count('nama_r');
        $problempr = Problems::count('nama_r');
        $success = Repairs::count('nama_r');
        $shot = troubleshootings::orderBy('id', 'desc')->get();

        return view('pages.dashboard.login', [
            'rusak' => $rusak,
            'problem' => $problem,
            'problempr' => $problempr,
            'harga' => $harga,
            'success' => $success,
            'trashed' => $trashed,
            'shot' => $shot
        ]);
    }

    public function logindashboard()
    {
        return view('pages.dashboard.login');
    }


    public function tablelogin()
    {

        $shot = troubleshootings::orderBy('id', 'desc')->get();
        $problem = problems::orderBy('id', 'desc')->get();
        $re = Repairs::orderBy('id', 'desc')->get();

        return view('pages.dashboard.table', [
            'shot' => $shot,
            'problem' => $problem,
            're' => $re,
        ]);
    }

    public function createdashboard(Request $request)
    {

        Troubleshootings::create($request->all());
        return redirect('/login')->with('status', 'Problem siap di proses oleh IT');
    }

    public function userprofile()
    {

        $rusak = Troubleshootings::count('nama');
        $trashed = Troubleshootings::withTrashed()->count('nama');
        $harga = problems::withTrashed()->sum('harga_r');
        $problem = problems::withTrashed()->count('nama_r');
        $problempr = Problems::count('nama_r');
        $success = Repairs::count('nama_r');
        $shot = troubleshootings::orderBy('id', 'desc')->get();


        return view('pages.dashboard.userprofile', [
            'rusak' => $rusak,
            'problem' => $problem,
            'problempr' => $problempr,
            'harga' => $harga,
            'success' => $success,
            'trashed' => $trashed,
            'shot' => $shot

        ]);
    }
}
