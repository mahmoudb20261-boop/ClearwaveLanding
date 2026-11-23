<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function index(): View
    {
        $plans = Plan::orderBy('id')->get();

        return view('welcome', compact('plans'));
    }
}