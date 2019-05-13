<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getPortfolio()
    {
        return view('portfolio');
    }

    public function getPortfolioSingle()
    {
        return view('portfolio-single');
    }

    public function getNews()
    {
        return view('news');
    }

    public function getSingleNews()
    {
        return view('single-news');
    }

    public function getContact()
    {
        return view('contact');
    }
}
