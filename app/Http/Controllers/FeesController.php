<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Fee;
use App\Models\Message;
use App\Models\Midmenu;
use App\Models\Page;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;

class FeesController extends Controller
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
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $fees = Page::where('id',6)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($topmenu);
        return view('layouts.default.fees')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'fees' => $fees,
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $request->validate(['name'=>'min:2']);
//        $request->validate(['surname'=>'min:2']);
//        $request->validate(['email'=>'min:7']);
//        $request->validate(['content'=>'min:7']);
        $request['subject'] = 'fees';
        //$data = $request->all();
        //$message = new Message();
        $message = Message::create($request->all());
        //$message->save();
//        dd($message);
        return redirect()->back()->with('success', __('messages.enquiry'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fee $fee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        //
    }
}
