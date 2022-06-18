<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function usloviya1()
    {
        return view('frontend.usloviya.pagefirst');
    }

    public function usloviya2()
    {
        return view('frontend.usloviya.pagetwo');
    }

    public function usloviya3()
    {
        return view('frontend.usloviya.pagetree');
    }

    public function usloviya4()
    {
        return view('frontend.usloviya.pagefour');
    }

    public function usloviya5()
    {
        return view('frontend.usloviya.pagefive');
    }

    public function usloviya6()
    {
        return view('frontend.usloviya.pagesix');
    }

    public function usloviya7()
    {
        return view('frontend.usloviya.pageseven');
    }

    public function library()
    {
        return view('frontend.library');
    }

    public function company()
    {
        return view('frontend.about_us.company');
    }

    public function large()
    {
        return view('frontend.about_us.company2');
    }

    public function litsenziya()
    {
        return view('frontend.about_us.litsenziya');
    }

    public function ourteam()
    {
        return view('frontend.about_us.our_team');
    }

    public function vakansiya()
    {
        return view('frontend.about_us.jobopenings');
    }

    public function spravichnik()
    {
        return view('frontend.sprachnik');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function sector()
    {
        return view('frontend.sector');
    }

    public function project()
    {
        return view('frontend.project');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
