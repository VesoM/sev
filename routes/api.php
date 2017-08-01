<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function(){
  Route::get('/user', function (Request $request) {
      return $request->user();
  });
  Route::patch('/AssetGroup/{AssetGroup}/restore','AssetGroupController@restore');
  Route::resource('/AssetGroup','AssetGroupController');
  Route::resource('/AssetGroup.Asset','AssetController');
  Route::resource('/AssetGroup.Asset.AssetContract','AssetContractController');
});
