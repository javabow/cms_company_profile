<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toram;
use App\Label;
use App\Faq;
use App\Saran;
use App\Tag;
use Session;
use Redirect;
use Input;

class ToramController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['add_saran']]);
    }

    // ======== Artikel Section ========

    public function index(){

        $guide = Toram::where('id_artikel', '>=', 1)->paginate(100);

    	return view('toram_table', ['data' => $guide]);

    }

    public function add(){

        $label = Label::where('id_label', '>=', 1)->paginate(100);

    	return view('add_article_toram', ['label' => $label]);



    }

    public function store(Request $request){

        $this->validate($request,[
            'judul' => 'required',
            'content' => 'required',
            'page' => 'required',
            'label' => 'required',
            'thumbnail' => 'required',
            'header_thumbnail' => 'required',
            'tag' => 'required',
        ]);

        // $tag_array = explode(',', $request->tag);
        // print_r($tag_array);

        // optimisasi untuk pemanggilan artikel pada URL
        $urlJudul = str_replace(' -', '', $request->judul);

        $urlJudul = str_replace(' ', '-', $urlJudul);
        $urlJudul = str_replace(':', '-', $urlJudul);
        $urlJudul = str_replace('/', '-', $urlJudul);
        $urlJudul = strtolower($urlJudul);

        //insert
        $artikel = new Toram;
        $artikel->judul = $request->judul;
        $artikel->isi = utf8_encode($request->content);
        $artikel->image = $request->thumbnail;
        $artikel->header_image = $request->header_thumbnail;
        $artikel->url = $urlJudul;
        $artikel->page = $request->page;
        $artikel->type = $request->label;

        if ($artikel->save()) {

            $tag_array = explode(',', $request->tag);

            foreach ($tag_array as $tag_each){

                $tag = new Tag;
                $tag->nama_tag = $tag_each;
                $tag->id_artikel = $artikel->id_artikel;
                $tag->page_type = $artikel->page;
                $tag->save();
            }

            Session::flash('message', 'Sukses Post Artikel !');

            return redirect('/dashboard');
        }else{
            return Redirect::back()->withInput(Input::all());
        }

    }

    public function preview($id){

        $guide = Toram::find($id);

    	return view('toram_preview', ['data' => $guide]);

    }

    public function edit($id)
	{

        $article = Toram::find($id);
        $label = Label::where('id_label', '>=', 1)->paginate(100);
        $tag = Tag::where('id_artikel', '=', $article->id_artikel)->paginate(100);
    	return view('edit_article_toram')->with('label', $label)->with('data', $article)->with('tag', $tag);

	}

    private function clean($string) {
       $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
       $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

       return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'judul' => 'required',
            'content' => 'required',
            'label' => 'required',
            'thumbnail' => 'required',
            'header_thumbnail' => 'required',
            'tag' => 'required',
        ]);

        //optimisasi untuk pemanggilan artikel pada URL
        $urlJudul = str_replace(' -', '', $request->judul);

        $urlJudul = str_replace(' ', '-', $urlJudul);
        $urlJudul = str_replace(':', '-', $urlJudul);
        $urlJudul = str_replace('/', '-', $urlJudul);
        $urlJudul = strtolower($urlJudul);

        //update
        $artikel = new Toram;
        $artikel = Toram::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = utf8_encode($request->content);
        $artikel->image = $request->thumbnail;
        $artikel->header_image = $request->header_thumbnail;
        $artikel->url = $urlJudul;
        $artikel->page = $request->page;
        $artikel->type = $request->label;

        if ($artikel->save()) {

            $old_tag = Tag::where('id_artikel', '=', $id)->paginate(100);

            $new_tag = explode(',', $request->tag);

            $i = 0;
            foreach($old_tag as $old_tags){

                $delete_old_tag = 0;
                foreach($new_tag as $new_tags){
                    $compare_old_tag = $this->clean($old_tags->nama_tag);
                    $compare_new_tag = $this->clean($new_tags);
                    if (strcasecmp($compare_old_tag, $compare_new_tag) == 0) {

                        unset($new_tag[$i]);
                        $new_tag = array_values($new_tag);
                        $delete_old_tag = 0;
                        break;

                    }else{
                        $delete_old_tag = 1;

                    }

                    $i++;
                }

                $i = 0;
                if($delete_old_tag == 1){
                    $delete_tag = Tag::find($old_tags->id_tag);
                    $delete_tag->delete();

                }
            }
            print_r ($new_tag);

            foreach ($new_tag as $tag_each){

                $tag = new Tag;
                $tag->nama_tag = $tag_each;
                $tag->id_artikel = $artikel->id_artikel;
                $tag->page_type = $artikel->page;
                $tag->save();

            }

            Session::flash('message', 'Sukses Edit Artikel !');

            return redirect('/dashboard');
        }else{
            return Redirect::back()->withInput(Input::all());
        }

    }

    public function delete_artikel($id_artikel, Request $request){

        $this->validate($request,[
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //find data and define path
        $artikel = Toram::find($id_artikel);

        if($artikel->delete()){

            $old_tag = Tag::where('id_artikel', '=', $id_artikel)->paginate(100);

            foreach($old_tag as $old_tags){

                $delete_tag = Tag::find($old_tags->id_tag);
                $delete_tag->delete();

            }

            Session::flash('message', 'Sukses Delete Artikel !');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'Gagal Delete Artikel !');
            Session::flash('alert-info', 'danger');
            return Redirect::back();
        }

    }

    // ======== End of Artikel Section ========

    // ======== Saran Section ========

    public function add_saran(Request $request){
        $this->validate($request,[
            'nama' => 'required|string|max:50',
            'email' => 'required|email:rfc,dns|max:100',
            'saran' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //insert
        $saran = new saran;
        $saran->nama = $request->nama;
        $saran->email = $request->email;
        $saran->saran = $request->saran;

        if ($saran->save()) {
            Session::flash('message', 'Terima Kasih Telah Memberi Kami Saran !');
            Session::flash('alert-info', 'success');
            return Redirect::to('/saran/result');
        }else{
            Session::flash('message', 'Terjadi Kesalahan, Coba Beberapa Saat Lagi');
            Session::flash('alert-info', 'danger');
            return Redirect::to('/saran/result')->withInput(Input::all());
        }
    }

    // ======== End of Saran Section ========

    // ======== Label Section ========

    public function label(){
        $label = Label::where('id_label', '>=', 1)->paginate(100);

    	return view('label_table', ['data' => $label]);
    }

    public function add_label(Request $request){
        $this->validate($request,[
            'nama_label' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //insert
        $label = new label;
        $label->nama_label = $request->nama_label;

        if ($label->save()) {
            Session::flash('message', 'Label berhasil ditambahkan');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'Label tidak tersimpan');
            Session::flash('alert-info', 'danger');
            return Redirect::back()->withInput(Input::all());
        }
    }

    public function update_label($id, Request $request){

        $this->validate($request,[
            'nama_label' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //update
        $label = Label::find($id);
        $label->nama_label = $request->nama_label;

        if ($label->save()) {
            Session::flash('message', 'Label berhasil diubah');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'Label tidak terubah');
            Session::flash('alert-info', 'danger');
            return Redirect::back()->withInput(Input::all());
        }

    }

    public function delete_label($id_label, Request $request){

        $this->validate($request,[
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //find data and define path
        $label = Label::find($id_label);

        if($label->delete()){
            Session::flash('message', 'Sukses Delete Label !');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'Gagal Delete Label !');
            Session::flash('alert-info', 'danger');
            return Redirect::back();
        }

    }

    // ======== End of Label Section ========

    // ======== Faq Section ========

    public function faq(){
        $faq = Faq::where('id_faq', '>=', 1)
                ->join('label', 'faq.type', '=', 'label.id_label')
                ->paginate(100);
        $label = Label::where('id_label', '>=', 1)->paginate(100);

    	return view('faq_table', ['data' => $faq])->with('label', $label);
    }

    public function add_faq(Request $request){
        $this->validate($request,[
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'type' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //insert
        $faq = new Faq;
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->type = $request->type;

        if ($faq->save()) {
            Session::flash('message', 'Faq berhasil ditambahkan');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'Faq tidak tersimpan');
            Session::flash('alert-info', 'danger');
            return Redirect::back()->withInput(Input::all());
        }
    }

    public function update_faq($id, Request $request){

        $this->validate($request,[
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'type' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //update
        $faq = Faq::find($id);
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->type = $request->type;

        if ($faq->save()) {
            Session::flash('message', 'FAQ berhasil diubah');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'FAQ tidak terubah');
            Session::flash('alert-info', 'danger');
            return Redirect::back()->withInput(Input::all());
        }

    }

    public function delete_faq($id_faq, Request $request){

        $this->validate($request,[
            'g-recaptcha-response' => 'required|captcha'
        ]);

        //find data and define path
        $faq = Faq::find($id_faq);

        if($faq->delete()){
            Session::flash('message', 'Sukses Delete Faq !');
            Session::flash('alert-info', 'success');
            return Redirect::back();
        }else{
            Session::flash('message', 'Gagal Delete Faq !');
            Session::flash('alert-info', 'danger');
            return Redirect::back();
        }

    }

    // ======== End of Faq Section ========


    public function user_add_index(){
        return view('auth.user_add');
    }

}
