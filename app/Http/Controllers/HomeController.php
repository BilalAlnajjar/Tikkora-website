<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GeneralSetting;
use App\Models\News;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $games = Game::orderBy('partydate', 'desc')->get();;
        $general = GeneralSetting::first();
        $newses = News::get();
        $slides = Slide::get();
            return view('pages.home',[
                'general' => $general,
                'games' => $games,
                'newses' => $newses,
                'slides' => $slides,
            ]);
    }

    public function contactUs(){
        $general = GeneralSetting::first();
        return view('pages.contact_us',[
            'general' => $general
        ]);
    }

    public function privacyPolicy(){
        $general = GeneralSetting::first();
        return view('pages.privacy_policy',[
            'general' => $general
        ]);
    }

    public function dmca(){
        $general = GeneralSetting::first();
        return view('pages.dmca',[
            'general' => $general
        ]);
    }

}
