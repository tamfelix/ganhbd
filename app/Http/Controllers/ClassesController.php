<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Classe;
use App\Models\Event;
use App\Models\Novita;
use App\Models\Page;
use App\Models\Photo;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public $topmenu;
    public $photos;
    public $news;
    public $classes;
    public $about;
    public $events;
    public $activities;

    public function __construct(){
        $this->topmenu = Page::where('topmenu', 1)->get()->toArray();
        $this->photos = Photo::latest()->get()->toArray();
        $this->news = Novita::latest()->get()->toArray();
        $this->classes = Classe::all()->toArray();
        $this->about = Page::where('id', 1)->get()->toArray();
        $this->events = Event::latest()->get()->toArray();
        $this->activities = Activitie::latest()->get()->toArray();
    }
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
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe, $request)
    {
        $class = Classe::where('id', $request)->get()->toArray();

        return view('layouts.default.class')->with([
         'class' => $class,

        'topmenu' => $this->topmenu,
        'photos' => $this->photos,
        'news' => $this->news,
        'classes' => $this->classes,
        'about' => $this->about,
        'events' => $this->events,
        'activities' => $this->activities,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        //
    }
}
