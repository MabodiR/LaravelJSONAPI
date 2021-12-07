<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;

use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\TagController;
use App\Http\Controllers\Api\V1\UserController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
       $server->resource('posts', JsonApiController::class)->readOnly();
    });


// JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
//     $server->resource('posts', JsonApiController::class)
//        ->only('index', 'show', 'store')
//         ->relationships(function ($relations) {
//             $relations->hasOne('author')->readOnly();
//             $relations->hasMany('comments')->readOnly();
//             $relations->hasMany('tags')->readOnly();
//         });
// });