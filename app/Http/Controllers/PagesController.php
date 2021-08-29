<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Repairs;
use App\Models\Problems;
use App\Models\Troubleshootings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {

        $rusak = Troubleshootings::count('nama');
        $trashed = Troubleshootings::withTrashed()->count('nama');
        $harga = problems::withTrashed()->sum('harga_r');
        $problem = problems::withTrashed()->count('nama_r');
        $problempr = Problems::count('nama_r');
        $success = Repairs::count('nama_r');
        $user = User::get('name');


        return view('index', [
            'rusak' => $rusak,
            'problem' => $problem,
            'problempr' => $problempr,
            'harga' => $harga,
            'success' => $success,
            'trashed' => $trashed,
            'user' => $user
        ]);
    }

    public function demage()
    {
        $shot = troubleshootings::orderBy('id', 'desc')->get();
        $problem = problems::orderBy('id', 'desc')->get();
        $del = Troubleshootings::onlyTrashed()->orderBy('id', 'desc')->get();

        return view('.demage', [
            'shot' => $shot,
            'problem' => $problem,
            'del' => $del,
        ]);
    }


    public function create(Request $request)
    {
        Troubleshootings::create($request->all());
        return redirect('/')->with('status', 'Problem siap di proses oleh IT');
    }



    public function createupdate(Request $request)
    {

        Troubleshootings::find($request->id)
            ->update([
                'nama' => $request->nama,
                'qty' => $request->qty,
                'uom' => $request->uom,
                'jeniskerusakan' => $request->jeniskerusakan,
                'area' => $request->area,
                'dept' => $request->dept,
                'pic' => $request->pic,
                'ket' => $request->ket,
            ]);
        return redirect('/')->with('status', 'Update Success');
    }

    public function createpr(Request $request)
    {


        Problems::create($request->all());
        Troubleshootings::destroy($request->id);
        return redirect('/viar')->with('status', 'Problem sudah Mengajuan Purchase Requistion');
    }


    public function update(Request $request)

    {

        Troubleshootings::find($request->id)
            ->update([
                'nama' => $request->nama_p,
                'qty' => $request->qty_p,
                'uom' => $request->uom_p,
                'jeniskerusakan' => $request->jeniskerusakan_p,
                'area' => $request->area_p,
                'dept' => $request->dept_p,
                'pic' => $request->pic_p,
                'ket' => $request->ket_p,
            ]);
        return redirect('/demage')->with('status', 'Update Success');
    }

    public function update_p(Request $request)

    {
        Problems::find($request->id)
            ->update([
                'nama_r' => $request->nama_r,
                'qty_r' => $request->qty_r,
                'uom_r' => $request->uom_r,
                'jeniskerusakan_r' => $request->jeniskerusakan_r,
                'area_r' => $request->area_r,
                'dept_r' => $request->dept_r,
                'pic_r' => $request->pic_r,
                'ket_r' => $request->ket_r,
                'harga_r' => $request->harga_r

            ]);
        return redirect('/viar')->with('status', 'Update Success');
    }

    public function success(Request $request)
    {
        Repairs::create($request->all());
        Problems::destroy($request->id);
        return redirect('/repair')->with('status', 'Problem Success');
    }

    public function successmisi(Request $request)
    {
        Repairs::create($request->all());
        Troubleshootings::destroy($request->id);
        return redirect('/repair')->with('status', 'Problem Success');
    }



    public function destroy(Request $request)
    {

        Troubleshootings::destroy($request->id);
        return redirect('/demage')->with('status', 'Problem Delete');
    }

    public function destroy_p(Request $request)
    {

        Problems::destroy($request->id);
        return redirect('/viar')->with('status', 'Problem Delete');
    }

    public function viar()
    {
        $shot = troubleshootings::orderBy('id', 'desc')->get();
        $problem = problems::orderBy('id', 'desc')->get();
        $del = Problems::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('.viar', [
            'shot' => $shot,
            'problem' => $problem,
            'del' => $del
        ]);
    }

    public function repair()
    {
        $problem = Problems::orderBy('id', 'desc')->get();
        $r = Repairs::orderBy('id', 'desc')->get();
        $re = Repairs::orderBy('id', 'desc')->get();


        return view('.repair', [
            'problem' => $problem,
            'r' => $r,
            're' => $re
        ]);
    }

    public function table()
    {
        // $shot = DB::table('trobleshooting')->get();
        $shot = troubleshootings::orderBy('id', 'desc')->get();
        $problem = problems::orderBy('id', 'desc')->get();
        $re = Repairs::orderBy('id', 'desc')->get();

        return view('.table', [
            'shot' => $shot,
            'problem' => $problem,
            're' => $re
        ]);
    }

    public function report()
    {
        $shot = troubleshootings::orderBy('id', 'desc')->get();
        $problem = problems::orderBy('id', 'desc')->get();
        $re = Repairs::orderBy('id', 'desc')->get();

        return view('.report', [
            'shot' => $shot,
            'problem' => $problem,
            're' => $re
        ]);
    }

    public function user()
    {
        $rusak = Troubleshootings::count('nama');
        $trashed = Troubleshootings::withTrashed()->count('nama');
        $harga = problems::withTrashed()->sum('harga_r');
        $problem = problems::withTrashed()->count('nama_r');
        $problempr = Problems::count('nama_r');
        $success = Repairs::count('nama_r');


        return view('.user', [
            'rusak' => $rusak,
            'problem' => $problem,
            'problempr' => $problempr,
            'harga' => $harga,
            'success' => $success,
            'trashed' => $trashed,

        ]);
    }

    public function management()
    {
        return view('.management');
    }
}
