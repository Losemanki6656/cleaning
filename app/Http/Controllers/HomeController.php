<?php

namespace App\Http\Controllers;

use App\Models\ContentAbout;
use App\Models\ContentBanner;
use App\Models\ContentProjectPhotos;
use App\Models\ContentSuccessProjects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = ContentBanner::all();
        $about = ContentAbout::first();

        $success_project = ContentSuccessProjects::first();
        $project_photos = ContentProjectPhotos::all();

        return view('welcome',[
           'banners' => $banners,
            'about' => $about,
            'success_project' => $success_project,
            'project_photos' => $project_photos
        ]);
    }
}
