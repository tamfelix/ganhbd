<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Novita;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $topmenu;
    public $photos;
    public $news;
    public $classes;
    public $about;

    public function __construct(){
        $this->topmenu = Page::where('topmenu', 1)->get()->toArray();
        $this->photos = Photo::latest()->get()->toArray();
        $this->news = Novita::latest()->get()->toArray();
        $this->classes = Classe::all()->toArray();
        $this->about = Page::where('id', 1)->get()->toArray();

    }
    public function index()
    {
        return view('layouts.default.main')->with([
            'topmenu' => $this->topmenu,
            'photos' => $this->photos,
            'news' => $this->news,
            'classes' => $this->classes,
            'about' => $this->about,

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
