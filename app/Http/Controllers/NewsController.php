<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = News::get();
        return view('pages.admin.news',[
            'newses' => $newses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.add_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $request->validated();
        $news =  News::create($request->only('title','part_description','description'));

        $path = $request->file('image')->store('/imagesSite', ['disk' => 'uploads']);
        $news->update([
            'image' => $path
        ]);


        $request->session()->put('message', 'تم اضافة الخبر بنجاح');
        return back()->with('result', "success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('pages.news',[
            "news" => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('pages.admin.edit_news',[
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $request->validated();
        $news->update($request->only('title','part_description','description'));


        if($request->file('image')) {
            Storage::disk('uploads')->delete(asset($news->image));
            $path = $request->file('image')->store('/imagesSite', ['disk' => 'uploads']);

            $news->update([
                'image' => $path
            ]);
        }


        $request->session()->put('message', 'تم اضافة الخبر بنجاح');
        return back()->with('result', "success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,News $news)
    {
        Storage::disk('uploads')->delete(asset($news->image));

        $news->delete();

        $request->session()->put('message', 'تم حذف الخبر بنجاح');
        return back()->with('result', "success");
    }
}
