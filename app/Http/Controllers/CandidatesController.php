<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Page;
use App\Models\Social;
use Illuminate\Http\Request;

class CandidatesController extends Controller
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


    public function enroll()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck( 'title', 'link');
        $text = Page::where('id',5)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        return view ('layouts.default.enroll')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(['surname'=>'min:2']);
        Candidate::create($request->all());
        return redirect()->back()->with('success', 'you have enrolled');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
