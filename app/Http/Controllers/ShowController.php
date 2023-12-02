<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posting;

class ShowController extends Controller
{
    // this function shows data on the / page
    public function show() {
        $data=Posting::all();
        return view('index', compact('data'));
    }

    public function showForm() {
        return view('listings.post');
    }
}
