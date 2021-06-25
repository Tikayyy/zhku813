<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\page_attachment;

class IndexController extends Controller
{
    public function index(){
        return view('/pages/main');
    }

    public function contacts(){
        return view('pages/contacts');
    }

    public function dop_contacts(){
        return view('pages/dop-contacts');
    }

    public function login(){
        return view('pages/login');
    }

    public function meter_form(){
        return view('pages/meter-form');
    }

    public function kak_pereyti(){
        $docs = page_attachment::where('id_page', 3)->get();
        return view('pages/kak-pereyti', ['docs' => $docs]);
    }

    public function tarif(){
        return view('pages/tarif');
    }

    public function plani_otchet(){
        return view('pages/plani-otchet');
    }

    public function news(){
        $news = news::OrderBy('date_news', 'DESC')->get();
        return view('pages/news', ['news' => $news]);
    }

    public function current_news($id){
        $news = news::where('id_news',$id)->first();
        return view('pages/current-news', ['news' => $news]);
    }

    public function reports(){
        return view('pages/reports');
    }

    public function recriviz(){
        return view('pages/recriviz');
    }
}

