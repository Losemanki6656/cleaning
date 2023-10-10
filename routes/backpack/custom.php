<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('content-banner', 'ContentBannerCrudController');
    Route::crud('content-about', 'ContentAboutCrudController');
    Route::crud('content-success-projects', 'ContentSuccessProjectsCrudController');
    Route::crud('content-project-photos', 'ContentProjectPhotosCrudController');
    Route::crud('content-application', 'ContentApplicationCrudController');
    Route::crud('content-service', 'ContentServiceCrudController');
    Route::crud('social-link', 'SocialLinkCrudController');
    Route::crud('application', 'ApplicationCrudController');

    Route::post('send-message', 'ApplicationCrudController@sendMessage')->name('send_message');

}); // this should be the absolute last line of this file
