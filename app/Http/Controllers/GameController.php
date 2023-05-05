<?php

namespace App\Http\Controllers;

use App\Models\DisplayEditor;
use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Link;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::get();
        return view('pages.admin.matches',[
            'games' => $games,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.add_match');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        $validation = $request->validated();

        $game = Game::create($request->only('name_team_one','name_team_two','country','league','round'
            ,'level_team_one','level_team_two','speaker','stadium','chanel','partydate','time','result'));

        foreach ($request->titles as $key => $title) {
            Link::create([
                'game_id' => $game->id,
                'title' => $title,
                'url' => $request->links[$key],
        ]);
        }

        if($request->file('logo_team_one')){
           $path_logo_team_one =  $request->file('logo_team_one')->store('/imagesSite', ['disk' => 'uploads']);
        }

        if($request->file('logo_team_two')){
            $path_logo_team_two = $request->file('logo_team_two')->store('/imagesSite', ['disk' => 'uploads']);
        }

        if($request->file('logo_league')){
            $path_logo_league = $request->file('logo_league')->store('/imagesSite', ['disk' => 'uploads']);
        }

        $game->update([
           'logo_team_one'  => $path_logo_team_one,
            'logo_team_two' => $path_logo_team_two,
            'logo_league' => $path_logo_league,
        ]);

        $request->session()->put('message', 'تم اضافة المباراة بنجاح');
        return back()->with('result', "success");
    }

    public function randomString(){
        $length = 10;

// قائمة الأحرف المسموح بها في النص العشوائي
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

// النص العشوائي
        $randomString = '';

// إنشاء النص العشوائي
        for ($i = 0; $i < $length; $i++) {
            // اختيار حرف عشوائي من القائمة
            $randomChar = $characters[rand(0, strlen($characters) - 1)];

            // إضافة الحرف العشوائي إلى النص العشوائي
            $randomString .= $randomChar;
        }

// طباعة النص العشوائي
        return $randomString;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::with('links')->findOrFail($id);
        $links = $game->links;
        $section_one = DisplayEditor::first();
        $section_two =  DisplayEditor::get()->last() == DisplayEditor::first() ? null: DisplayEditor::get()->last();
        $string_id = $this->randomString();
        return view('pages.matche',[
            'links' => $links,
            'string_id' => $string_id,
            'section_one' => $section_one,
            'section_two' => $section_two,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('pages.admin.edit_match',[
            'game' => $game,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $validation = $request->validated();


        $game->update($request->only('name_team_one','name_team_two','country','league','round'
            ,'level_team_one','level_team_two','speaker','stadium','chanel','partydate','time','result'));

        $links_game = $game->links;
        foreach ($links_game as $link){
            $link->delete();
        }
        foreach ($request->titles as $key => $title) {
            Link::create([
                'game_id' => $game->id,
                'title' => $title,
                'url' => $request->links[$key],
            ]);
        }
      ;

        if($request->file('logo_team_one')){
            Storage::disk('uploads')->delete(asset($game->logo_team_one));
            $path_logo_team_one =  $request->file('logo_team_one')->store('/imagesSite', ['disk' => 'uploads']);
            $game->update([
                'logo_team_one' => $path_logo_team_one,
            ]);
        }

        if($request->file('logo_team_two')){
            Storage::disk('uploads')->delete(asset($game->logo_team_two));
            $path_logo_team_two = $request->file('logo_team_two')->store('/imagesSite', ['disk' => 'uploads']);
            $game->update([
                'logo_team_two' => $path_logo_team_two,
            ]);
        }

        if($request->file('logo_league')){
            Storage::disk('uploads')->delete(asset($game->logo_league));
            $path_logo_league = $request->file('logo_league')->store('/imagesSite', ['disk' => 'uploads']);
            $game->update([
                'logo_league' => $path_logo_league,
            ]);
        }




        $request->session()->put('message', 'تم تعديل بيانات المباراة بنجاح');
        return back()->with('result', "success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game ,Request $request)
    {
        Storage::disk('uploads')->delete(asset($game->logo_team_two));
        Storage::disk('uploads')->delete(asset($game->logo_league));
        Storage::disk('uploads')->delete(asset($game->logo_team_one));

        $game->delete();

        $request->session()->put('message', 'تم حذف المباراة بنجاح');
        return back()->with('result', "success");

    }

    public function changeState(Request $request, $id){
        $request->validate([
            'state' => 'required'
        ]);

        $game = Game::findOrFail($id);

        $game->update($request->only('state'));
        $request->session()->put('message', 'تم تغير حالة المباراة  بنجاح');
        return back()->with('result', "success");
    }

    public function allGame(){
        $games = Game::orderBy('partydate', 'desc')->get();

        return response()->json($games);
    }

    public function todayGame(){
        $games = Game::whereDate('partydate', '=', (new DateTime)->format('Y-m-d'))->orderBy('partydate', 'desc')->get();

        return response()->json($games);
    }

    public function yesterdayGame(){
        $games = Game::whereDate('partydate', '=', Carbon::yesterday()->format('Y-m-d'))->orderBy('partydate', 'desc')->get();

        return response()->json($games);
    }

    public function tomorrowGame(){
        $games = Game::whereDate('partydate', '=', Carbon::tomorrow()->format('Y-m-d'))->orderBy('partydate', 'desc')->get();

        return response()->json($games);
    }
}
