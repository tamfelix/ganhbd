<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Contact;
use App\Models\Midmenu;
use App\Models\Novita;
use App\Models\Social;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function index(){
    $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
    $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
    $socials = Social::orderby('icon_order')->get()->toArray();
    $contact = Contact::where('id', 1)->get()->toArray();
    $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');

    $news = Novita::latest()->take(5)->get()->toArray();
    $teachers = Teacher::orderBy('surname')->get()->toArray();
   //echo '<pre>';
    //print_r($midmenu);
    return view('layouts.default.main')->with([
        'topmenu' => $topmenu,
        'sidemenu' => $sidemenu,
        'socials' => $socials,
        'contact' => $contact,
        'midmenu' => $midmenu,
        'news' => $news,
        'teachers' => $teachers,




    ]);
    }


    public function about(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $about = Page::find(1)->pluck('content')->toArray();

        //print_r($about);
        return view('layouts.default.about')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'about' => $about,
            'sidemenu' => $sidemenu,


        ]);
    }

    public function history(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck( 'title', 'link');
        $history = Page::find(1)->pluck('content')->toArray();
        //print_r($about);
        return view('layouts.default.history')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'history' => $history,
            'sidemenu' => $sidemenu,


        ]);
    }

    public function advantages(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title','link');
        $advantages = Page::where('id',2)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.advantages')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'advantages' => $advantages,
            'sidemenu' => $sidemenu,


        ]);
    }

    public function program(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title','link', );
        $program = Page::where('id',3)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.program')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'program' => $program,
            'sidemenu' => $sidemenu,


        ]);
    }
    public function fees(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $fees = Page::where('id',6)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.fees')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'fees' => $fees,
            'sidemenu' => $sidemenu,


        ]);
    }
    public function partners(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $text = Page::where('id',7)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.partners')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,


        ]);
    }

    public function suppliers(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck( 'title', 'link');
        $text = Page::where('id',9)->pluck('content')->toArray();
        //print_r($topmenu);
        return view('layouts.default.suppliers')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,


        ]);
    }

    public function contact(){
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck( 'title','link');
        $text = Page::where('id', 16)->pluck('content')->toArray();

        //print_r($text);

        return view('layouts.default.contact')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,


        ]);
    }

    public function moodleLogin(LoginRequest $request){
        $request->authenticate();


        return redirect()->back()->with('success', 'logged-in successfully');
    }



}
