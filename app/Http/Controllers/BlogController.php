<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toram;
use App\Label;
use App\Faq;
use App\Informasi;
use App\Tag;
use Session;
use Redirect;
// use Input;

class BlogController extends Controller
{

    public function all_artikel_view(){
        $artikel = Toram::where('id_artikel', '>=', 1)
                    ->where('page', '=', 'artikel')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->select('label.nama_label', 'label.id_label', 'guide.created_at', 'guide.judul', 'guide.url', 'guide.image')
                    ->paginate(3);
        $service = Toram::where('id_artikel', '>=', 1)
                    ->where('page', '=', 'service')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->paginate(9);

        $label = Label::where('id_label', '>=', 1)->get();


        return view('itcc.itcc_index')->with('data_artikel', $artikel)->with('data_service', $service)->with('data_label', $label);
    }

    public function saran_result_view(){
        if(Session::has('message')){
            return view('enhaii.blog_saran_result');
        }else{
            return Redirect::to('/');
        }
    }

    public function all_service(){

        $service = Toram::where('id_artikel', '>=', 1)
                ->where('page', '=', 'service')
                ->orderBy('id_artikel', 'ASC')
                ->join('label', 'guide.type', '=', 'label.id_label')
                ->get()->groupBy('type');
        $label = Label::where('id_label', '>=', 1)
                ->orderBy('id_label', 'DESC')
                ->get();
        $title = "Layanan";


        return view('itcc.itcc_service')->with('data_service', $service)->with('data_label', $label)->with('title', $title);

    }

    public function detail_service($url){

        $service = Toram::where('url', '=', $url)
            ->where('page', '=', 'service')
            ->join('label', 'guide.type', '=', 'label.id_label')
            ->first();

        $tag = Tag::where('id_artikel', '=', $service->id_artikel)
            ->paginate(3);

        if($service && $tag){

            $artikel_tag = [];
                $i = 0;
                foreach($tag as $tags){

                    $artikel_tag[$i] = Tag::where('nama_tag', '=', $tags->nama_tag)
                                        ->where('page_type', '=', 'artikel')
                                        ->pluck('id_artikel');

                    $i++;
            }

            if($artikel_tag != null){

                $title = $service->judul;

                $typeTotals = array_map("count", $artikel_tag);
                $maxs = array_keys($typeTotals, max($typeTotals));

                $side_artikel = [];
                $i = 0;
                foreach($artikel_tag[$maxs[0]] as $each_artikel){

                    $side_artikel[$i] = Toram::where('id_artikel', '=', $each_artikel)
                        ->where('page', '=', 'artikel')
                        ->get();
                    $i++;
                }

                return view('itcc.itcc_service_detail')->with('data_service', $service)->with('data_side_artikel', $side_artikel)->with('title', $title);

            }else{

                $side_artikel = [];
                $title = $service->judul;
                return view('itcc.itcc_service_detail')->with('data_service', $service)->with('data_side_artikel', $side_artikel)->with('title', $title);


            }

        }else{
            return view('errors.404');
        }

    }

    public function test_service($url){

        $service = Toram::where('url', '=', $url)
            ->where('page', '=', 'service')
            ->join('label', 'guide.type', '=', 'label.id_label')
            ->first();

        $tag = Tag::where('id_artikel', '=', $service->id_artikel)
            ->paginate(3);

        // service dan tag harus ada

        $artikel_tag = [];
        $i = 0;
        foreach($tag as $tags){

            $artikel_tag[$i] = Tag::where('nama_tag', '=', $tags->nama_tag)
                                ->where('page_type', '=', 'artikel')
                                ->pluck('id_artikel');

            $i++;
        }

        // artikel_tag harus ada

        $typeTotals = array_map("count", $artikel_tag);
        $maxs = array_keys($typeTotals, max($typeTotals));

        $side_artikel = [];
        $i = 0;
        foreach($artikel_tag[$maxs[0]] as $each_artikel){

            $side_artikel[$i] = Toram::where('id_artikel', '=', $each_artikel)
                                ->where('page', '=', 'artikel')
                                ->pluck('judul');

            $i++;
        }


    }

    public function service_label_view($label_url){
        $label_url = str_replace('-', ' ', $label_url);
        $label = Label::where('nama_label', '=', $label_url)->first();
        if($label){
            $service = Toram::where('type', '=', $label->id_label)->orderBy('id_artikel', 'ASC')->where('page', '=', 'service')->paginate(100);
            $title = "Service Label : ".$label->nama_label;
            return view('enhaii.blog_service_label')->with('data_service', $service)->with('data_label', $label)->with('title', $title);
        }else{

            return view('errors.404');
        }

    }

    public function all_project(){

        $project = Toram::where('id_artikel', '>=', 1)
                    ->where('page', '=', 'project')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->paginate(6);
        $label = Label::where('id_label', '>=', 1)->get();


        return view('enhaii.blog_project_all')->with('data_project', $project)->with('data_label', $label);

    }

    public function detail_project($url){

        $project = Toram::where('url', '=', $url)
                    ->where('page', '=', 'project')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->first();

        if($project){
            return view('enhaii.blog_project_detail')->with('data_project', $project);
        }else{
            return view('errors.404');
        }

    }

    public function all_artikel(){

        $artikel = Toram::where('id_artikel', '>=', 1)
                    ->where('page', '=', 'artikel')
                    ->orderBy('id_artikel', 'DESC')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->select('label.nama_label', 'label.id_label', 'guide.created_at', 'guide.judul', 'guide.url', 'guide.image', 'guide.isi')
                    ->paginate(6);
        $title = "Artikel";
        return view('itcc.itcc_blog')->with('data_artikel', $artikel)->with('title', $title);

    }

    public function detail_artikel($url){

        $artikel = Toram::where('url', '=', $url)
                    ->where('page', '=', 'artikel')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->select('label.nama_label', 'label.id_label', 'guide.created_at', 'guide.judul', 'guide.url', 'guide.image', 'guide.header_image', 'guide.isi', 'guide.id_artikel')
                    ->first();
        $label = Label::where('id_label', '>=', 1)->get();

        $side_artikel= Toram::where('id_artikel', '>=', 1)
                    ->where('page', '=', 'artikel')
                    ->orderBy('id_artikel', 'DESC')
                    ->join('label', 'guide.type', '=', 'label.id_label')
                    ->select('label.nama_label', 'label.id_label', 'guide.created_at', 'guide.judul', 'guide.url', 'guide.image')
                    // ->select('label.id_label')
                    // ->select('guide.created_at')
                    ->paginate(3);

        $tag = Tag::where('id_artikel', '=', $artikel->id_artikel)->get();

        if($artikel){
            $title = $artikel->judul;
            return view('itcc.itcc_blog_detail')->with('data_artikel', $artikel)->with('data_label', $label)->with('data_side_artikel', $side_artikel)->with('tag', $tag)->with('title', $title);
        }else{
            return view('errors.404');
        }

    }

    public function artikel_label_view($label_url){
        $label_url = str_replace('-', ' ', $label_url);
        $label = Label::where('nama_label', '=', $label_url)->first();
        if($label){
            $title = "Artikel Label : ".$label->nama_label;
            $artikel = Toram::where('type', '=', $label->id_label)->orderBy('id_artikel', 'DESC')->where('page', '=', 'artikel')->paginate(6);
            return view('enhaii.blog_artikel_label')->with('data_artikel', $artikel)->with('data_label', $label)->with('title', $title);
        }else{

            return view('errors.404');
        }

    }

    public function contact_view(){
        $title = "Kontak";
        return view('itcc.itcc_contact')->with('title', $title);
    }

    public function about_view(){
        $title="Tentang Perusahaan";
        return view('itcc.itcc_about')->with('title', $title);
    }

    public function kebijakan_view(){
        $title = "Kebijakan";
        return view('enhaii.blog_kebijakan')->with('title', $title);
    }

    public function keluhan_view(){
        $title = "Prosedur Keluhan";
        return view('enhaii.blog_prosedur_keluhan')->with('title', $title);
    }

    public function skema_view(){
        $title = "Skema";
        return view('enhaii.blog_skema')->with('title', $title);
    }

    public function akreditasi_view(){
        $title = "Akreditasi";
        return view('enhaii.blog_akreditasi')->with('title', $title);
    }

    public function perundangan_view(){
        $title = "Perundangan";
        return view('enhaii.blog_perundangan')->with('title', $title);
    }

    public function syarat_view(){
        $title = "Persyaratan Sertifikasi";
        return view('enhaii.blog_syarat')->with('title', $title);
    }

    public function informasi_publik_view(){
        $informasi = Informasi::where('id_informasi', '>=', 1)
                    ->orderBy('id_informasi', 'DESC')
                    ->paginate(10000);
        $title = "Informasi Publik";
        return view('enhaii.blog_informasi_publik')->with('data_informasi', $informasi)->with('title', $title);
    }

    public function banding_view(){
        $title = "Prosedur Banding";
        return view('enhaii.blog_prosedur_banding')->with('title', $title);
    }

    public function permohonan_view(){
        $title = "Form Permohonan";
        return view('enhaii.blog_permohonan')->with('title', $title);
    }

    public function faq_view(){
        $faq = Faq::where('id_faq', '>=', 1)
                ->join('label', 'faq.type', '=', 'label.id_label')
                ->get()->groupBy('type');
        $label = Label::where('id_label', '>=', 1)->get();
        $title = "Pertanyaan Umum";
        // dd($faq);
        return view('enhaii.blog_faq')->with('data_faq', $faq)->with('data_label', $label)->with('title', $title);
    }


    // public function search(Request $request){

    //     $query = $request->search;

    //     $result_search = new Toram;
    //     $result = Toram::where('judul','like',"%".$query."%")->paginate(5)->onEachSide(1);
    //     $result->appends(['search' => $query]);
    //     $result_search->cari = $query;
    //     $result_search->page_title = "Search for '".$query."'";
    //     return view('blog.blog_search')->with('data_artikel', $result)->with('data', $result_search);

    // }

}
