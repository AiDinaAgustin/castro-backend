<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $latestPodcasts = Podcast::latest()->get();
        $oldestPodcasts = Podcast::oldest()->get();
    
        return view('podcasts', [
            "title" => "Podcasts",
            "latestPodcasts" => $latestPodcasts,
            "oldestPodcasts" => $oldestPodcasts,
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
