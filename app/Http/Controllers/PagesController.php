<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Midmenu;
use App\Models\Novita;
use App\Models\Service;
use App\Models\Social;
use App\Models\Teacher;
use App\Models\Timetable;
use Illuminate\Http\Request;
use App\Models\Page;
use App;

class PagesController extends Controller
{
    public function index()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->get();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->get();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->get();
        $timetable = Timetable::orderby('timetable')->take(4)->pluck('timetable', 'fromto')->toArray();
        $news = Novita::latest()->take(5)->get()->toArray();
        $teachers = Teacher::orderBy('surname')->get()->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //echo '<pre>';
        //print_r($director);
        return view('layouts.default.main')->with([
            'topmenu' => $topmenu,
            'sidemenu' => $sidemenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'news' => $news,
            'teachers' => $teachers,
            'timetable' => $timetable,
            'director' => $director,
            'services' => $services,


        ]);
    }


    public function about()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $about = Page::find(1)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($about);
        return view('layouts.default.about')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'about' => $about,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function history()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $history = Page::find(1)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($about);
        return view('layouts.default.history')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'history' => $history,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function advantages()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $advantages = Page::where('id', 2)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($topmenu);
        return view('layouts.default.advantages')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'advantages' => $advantages,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function program()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link',);
        $program = Page::where('id', 3)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($topmenu);
        return view('layouts.default.program')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'program' => $program,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function partners()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $text = Page::where('id', 7)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($topmenu);
        return view('layouts.default.partners')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

    public function suppliers()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $text = Page::where('id', 9)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($topmenu);
        return view('layouts.default.suppliers')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }



    public function moodleLogin(Request $request)
    {
        //$request->authenticate();
        if($request['login']&&$request['pwd']){
        return redirect('moodle')->with('success', 'logged-in successfully');}
        else{ return redirect('moodle')->with('failure', 'please try one more time');}
    }


    public function moodle()
    {
        $topmenu = Page::where('topmenu', 1)->orderby('page_order')->pluck('link', 'title')->toArray();
        $sidemenu = Page::where('topmenu', 0)->orderby('page_order')->pluck('link', 'title')->toArray();
        $socials = Social::orderby('icon_order')->get()->toArray();
        $contact = Contact::where('id', 1)->get()->toArray();
        $midmenu = Midmenu::orderby('item_order')->pluck('title', 'link');
        $text = Page::where('id', 7)->pluck('content')->toArray();
        $director = Employee::where('id', 1)->get()->toArray();
        $services = Service::orderBy('created_at')->take(10)->get()->toArray();
        //print_r($topmenu);
        return view('layouts.default.moodle')->with([
            'topmenu' => $topmenu,
            'socials' => $socials,
            'contact' => $contact,
            'midmenu' => $midmenu,
            'text' => $text,
            'sidemenu' => $sidemenu,
            'director' => $director,
            'services' => $services,

        ]);
    }

//    public function change(Request $request){
//
////        $locale = App::currentlocale();
////        if (App::islocale('en')){ redirect()->back();
////        } else {redirect()->back();}
////        //session()->put('locale', $request->lang);
//
//
//        App::setLocale($request->lang);
//        session()->put('locale', $request->lang);
//
//        return redirect()->back();
//
//    }
//
}
