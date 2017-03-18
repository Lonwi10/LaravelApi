<?php

use Illuminate\Http\Request;
use App\Wifi;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/distrito/{distrito}', function(Request $request, $distrito) {
	//echo $barri."\n";
	$puntosWifi = Wifi::select("codigoCapa","CapaGenerica","nombreCapa","equip","distrito","barrio","direccion")->where('distrito','like',"%".$distrito."%")->get();
    return response()->json($puntosWifi);
});

Route::get('/barrio/{barrio}', function(Request $request, $barrio) {
	//echo $barri."\n";
	$puntosWifi = Wifi::select("codigoCapa","CapaGenerica","nombreCapa","equip","distrito","barrio","direccion")->where('barrio','like',"%".$barrio."%")->get();
    return response()->json($puntosWifi);
});


