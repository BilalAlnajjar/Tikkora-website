<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGeneralSettingRequest;
use App\Http\Requests\UpdateGeneralSettingRequest;
use App\Models\ContactUs;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $general = GeneralSetting::first();
        return view('pages.admin.generalsettings', [
            'general' => $general,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo_footer' => 'required',
            'logo_header' => 'required',
            'favicon' => 'required',
            'cover_match' => 'required',
        ]);

        $pathLogoFooter = $request->file('logo_footer')->store('/imagesSite', ['disk' => 'uploads']);
        $pathLogoHeader = $request->file('logo_header')->store('/imagesSite', ['disk' => 'uploads']);
        $pathFav = $request->file('favicon')->store('/imagesSite', ['disk' => 'uploads']);
        $pathCoverMatch = $request->file('cover_match')->store('/imagesSite', ['disk' => 'uploads']);

        $general = GeneralSetting::create([
            'name' => $request->name,
            'logo_footer' => $pathLogoFooter,
            'logo_header' => $pathLogoHeader,
            'favicon' => $pathFav,
            'cover_match' => $pathCoverMatch,
        ]);

        if ($request->file('about_as_image')) {
            $pathAboutAsImage = $request->file('about_as_image')->store('/imagesSite', ['disk' => 'uploads']);
            $general->update([
                'about_as_image' => $pathAboutAsImage,
            ]);

        }

        if ($request->dmca) {
            $general->update([
                'dmca' => $request->dmca,
            ]);

        }

        if ($request->privacy_policy) {
            $general->update([
                'privacy_policy' => $request->privacy_policy,
            ]);

        }

        if ($request->contact_us) {
            $general->update([
                'contact_us' => $request->contact_us,
            ]);

        }

        if($request->state_news){
            $general->update([
                'state_news' => $request->state_news,
            ]);
        }

        if ($request->about_as_text) {
            $general->update([
                'about_as_text' => $request->about_as_text,
            ]);

        }

        if($request->state_aboutAs){
            $general->update([
                'state_aboutAs' => $request->state_aboutAs,
            ]);
        }
        if($request->state_slides){
            $general->update([
                'state_slides' => $request->state_slides,
            ]);
        }
        $request->session()->put('message', 'تمت عملية اضافة بيانات الموقع بنجاح');
        return back()->with('result', "success");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSetting $generalSetting)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSetting $generalSetting)
    {
        $general = GeneralSetting::first();
        $general->update($request->only('name', 'state_news', 'state_slides','state_aboutAs'));


        if ($request->file('logo_footer')) {
            $pathLogoFooter = $request->file('logo_footer')->store('/imagesSite', ['disk' => 'uploads']);
            $general->update([
                'logo_footer' => $pathLogoFooter,
            ]);

        }

        if ($request->file('cover_match')) {
            $pathCoverMatch = $request->file('cover_match')->store('/imagesSite', ['disk' => 'uploads']);
            $general->update([
                'cover_match' => $pathCoverMatch,
            ]);

        }

        if ($request->file('favicon')) {
            $pathFav = $request->file('favicon')->store('/imagesSite', ['disk' => 'uploads']);
            $general->update([
                'favicon' => $pathFav,
            ]);
        }

        if ($request->file('logo_header')) {
            $pathLogoHeader = $request->file('logo_header')->store('/imagesSite', ['disk' => 'uploads']);
            $general->update([
                'logo_header' => $pathLogoHeader,
            ]);
        }

        if ($request->file('about_as_image')) {
            $pathAboutAsImage = $request->file('about_as_image')->store('/imagesSite', ['disk' => 'uploads']);
            $general->update([
                'about_as_image' => $pathAboutAsImage,
            ]);

        }

        if ($request->about_as_text) {
            $general->update([
                'about_as_text' => $request->about_as_text,
            ]);

        }

        if ($request->dmca) {
            $general->update([
                'dmca' => $request->dmca,
            ]);

        }

        if ($request->privacy_policy) {
            $general->update([
                'privacy_policy' => $request->privacy_policy,
            ]);

        }

        if ($request->contact_us) {
            $general->update([
                'contact_us' => $request->contact_us,
            ]);

        }


        $request->session()->put('message', 'تم تحديث بيانات الموقع بنجاح');
        return back()->with('result', "success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}
