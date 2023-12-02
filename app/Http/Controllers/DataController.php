<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    // Show home page
    public function index() {
        return view('index');
    }

    // Show form
    public function create() {
        return view('listings.post');
    }

    // Store Data
    public function store(Request $request) {
        $post = new Posting;
        $post->pickup = $request->pickup;
        $post->dropoff = $request->dropoff;
        $post->date = $request->date;
        $post->weight = $request->weight;
        $post->price = $request->price;
        $post->broker = $request->broker;
        return redirect('/')->with('status', 'Added Successfully');
    }
}
