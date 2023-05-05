<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use App\Models\Project;
use App\Models\User;
use App\Notifications\NewOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $games = Game::orderBy('dec')->take(10);
        $matches_number = Game::count();
        $news_number = News::count();
        return view('pages.admin.index',[
            'games' => $games,
            'news_number' => $news_number,
            'matches_number' => $matches_number,
        ]);
    }
}
