<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use SEOMeta;

class HomeController extends Controller
{
    /**
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        SEOMeta::setTitle('Powering the Flutter Developer Community');
        SEOMeta::setDescription('FlutterSDK empowers Flutter developers with plugins, job listings, news, and a thriving community—your all-in-one hub for everything Flutter.');

        return view('home');
    }
}
