<?php

use Illuminate\Support\Facades\Route;


Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {

    Route::crud('content-banner', 'ContentBannerCrudController');
    Route::crud('content-about', 'ContentAboutCrudController');
    Route::crud('content-success-projects', 'ContentSuccessProjectsCrudController');
    Route::crud('content-project-photos', 'ContentProjectPhotosCrudController');
    Route::crud('content-application', 'ContentApplicationCrudController');
    Route::crud('content-service', 'ContentServiceCrudController');
    Route::crud('social-link', 'SocialLinkCrudController');
    Route::crud('application', 'ApplicationCrudController');

    Route::post('send-message', 'ApplicationCrudController@sendMessage')->name('send_message');
    Route::post('send-comment', 'CommentCrudController@sendComment')->name('send_comment');

    Route::crud('comment', 'CommentCrudController');

});
