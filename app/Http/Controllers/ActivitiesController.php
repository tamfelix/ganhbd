<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Page;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck( 'title', 'link');
        $activities = DB::table('activities')->paginate(2);
        $director = Employee::where('id', 1)->get()->toArray();
        //echo('<pre>');
        // echo $news->links();//
        return view('layouts.default.activities')->with([
            'activities' => $activities,
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activitie  $activitie
     * @return \Illuminate\Http\Response
     */
    public function show(Activitie $activitie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activitie  $activitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Activitie $activitie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activitie  $activitie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activitie $activitie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activitie  $activitie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activitie $activitie)
    {
        //
    }
}
