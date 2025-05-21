<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; 

class DashboardController extends Controller
{
    public function index()
    {
        $motivationalQuotes = [
            "Believe you can and you're halfway there.",
            "Your limitation—it's only your imagination.",
            "Push yourself, because no one else is going to do it for you.",
            "Sometimes later becomes never. Do it now.",
            "Great things never come from comfort zones.",
            "Dream it. Wish it. Do it.",
            "Success doesn't just find you. You have to go out and get it.",
            "The harder you work for something, the greater you'll feel when you achieve it."
        ];

        $randomQuote = $motivationalQuotes[array_rand($motivationalQuotes)];

        View::share('randomQuote', $randomQuote); 
        return view('dashboard');
    }
}