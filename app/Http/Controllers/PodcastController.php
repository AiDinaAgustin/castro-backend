<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        return view('podcasts', [
            "title" => "Podcasts",
            // "podcasts" => Podcast::all()
            "podcasts" => Podcast::latest()->get()
        ]);
    }

    public function terbaru(){
        return view('podcasts', [
            "title" => "Podcasts",
            "pod" => Podcast::latest()->get()
        ]);
    }

    public function show(Podcast $podcast)
    {
        return view('podcast', [
            "title" => "Single Podcast",
            "podcast" => $podcast
        ]);
    }
}
