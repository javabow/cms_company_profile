<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Session;
use Redirect;
use Input;

class KomentarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('comment_post');
    }

    public function index(){

        $comment = Komentar::orderBy('id', 'ASC')->get();
        $count = Komentar::where('status', '=', '0')->count();

    	return view('komentar.komentar_table', ['data' => $comment])->with('count', $count);

    }

    public function approve($id){

        $komentar = Komentar::find($id);
        $komentar->status = 1;
        $komentar->save();

        if ($komentar->save()) {
            Session::flash('message', 'Berhasil Approve Komentar');

            return redirect('/dashboard/komentar');
        }else{
            Session::flash('message', 'Terjadi kesalahan saat approve komentar');

            return redirect('/dashboard/komentar');
        }

    }

    public function delete($id){

        $komentar = Komentar::find($id);

        if($komentar){

            if($komentar->delete()){
                Session::flash('message', 'Berhasil Delete Komentar');

                return redirect('/dashboard/komentar');
            }else{
                Session::flash('message', 'Terjadi kesalahan saat menghapus komentar');

                return redirect('/dashboard/komentar');
            }

        }
    }

    public function comment_post(Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'isi_komentar' => 'required',
            'url' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //optimisasi untuk isi komentar

        //insert
        $komentar = new Komentar;
        $komentar->nama = $request->nama;
        $komentar->email = $request->email;
        $komentar->komentar = $request->isi_komentar;
        $komentar->url = $request->url;

        if ($komentar->save()) {
            Session::flash('message', 'Komentar anda akan muncul setelah di verifikasi, terima kasih');

            return Redirect::back();
        }else{
            return Redirect::back()->withInput(Input::all());
        }

    }

}
