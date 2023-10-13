<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\ContentAbout;
use App\Models\ContentApplication;
use App\Models\ContentBanner;
use App\Models\ContentProjectPhotos;
use App\Models\ContentService;
use App\Models\ContentSuccessProjects;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = ContentBanner::all();
        $about = ContentAbout::first();

        $success_project = ContentSuccessProjects::first();
        $project_photos = ContentProjectPhotos::all();

        $application = ContentApplication::first();
        $services = ContentService::all();

        $social_links = SocialLink::all();

        $comments = Comment::where('status', true)->take(5)->get();

        return view('welcome',[
           'banners' => $banners,
            'about' => $about,
            'success_project' => $success_project,
            'project_photos' => $project_photos,
            'application' => $application,
            'services' => $services,
            'social_links' => $social_links,
            'comments' => $comments
        ]);
    }
}
