<?php

use App\Http\Controllers\Order\CalculationController;
use App\Http\Controllers\Order\CommonDataController;
use App\Http\Controllers\Order\Complectation\ComplectationColorSolutionController;
use App\Http\Controllers\Order\Complectation\ComplectationExteriorController;
use App\Http\Controllers\Order\Complectation\ComplectationFurnitureAndAccessoryController;
use App\Http\Controllers\Order\Complectation\ComplectationInteriorController;
use App\Http\Controllers\Order\DeliveryController;
use App\Http\Controllers\Order\DesigningController;
use App\Http\Controllers\Order\EngineeringSystemController;
use App\Http\Controllers\Order\LinkController;
use App\Http\Controllers\Order\MountingController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Order\TechnicalDetailController;
use App\Http\Controllers\TetrisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('get-orders', [OrderController::class, 'getOrders']);
Route::post('store-order', [OrderController::class, 'storeOrder']);
Route::post('update-order/{id}', [OrderController::class, 'updateOrder']);


Route::post('get-link/{id}', [LinkController::class, 'getLink']);
Route::post('store-link', [LinkController::class, 'storeLink']);
Route::post('update-link/{id}', [LinkController::class, 'updateLink']);

Route::post('get-common-data/{id}', [CommonDataController::class, 'getCommonData']);
Route::post('store-common-data', [CommonDataController::class, 'storeCommonData']);
Route::post('update-common-data/{id}', [CommonDataController::class, 'updateCommonData']);

Route::post('get-complectation-exterior/{id}', [ComplectationExteriorController::class, 'getComplectationExterior']);
Route::post('store-complectation-exterior', [ComplectationExteriorController::class, 'storeComplectationExterior']);
Route::post('update-complectation-exterior/{id}', [ComplectationExteriorController::class, 'updateComplectationExterior']);

Route::post('get-complectation-interior/{id}', [ComplectationInteriorController::class, 'getComplectationInterior']);
Route::post('store-complectation-interior', [ComplectationInteriorController::class, 'storeComplectationInterior']);
Route::post('update-complectation-interior/{id}', [ComplectationInteriorController::class, 'updateComplectationInterior']);

Route::post('get-complectation-color-solution/{id}', [ComplectationColorSolutionController::class, 'getComplectationColorSolution']);
Route::post('store-complectation-color-solution', [ComplectationColorSolutionController::class, 'storeComplectationColorSolution']);
Route::post('update-complectation-color-solution/{id}', [ComplectationColorSolutionController::class, 'updateComplectationColorSolution']);

Route::post('get-complectation-furniture-and-accessory/{id}', [ComplectationFurnitureAndAccessoryController::class, 'getComplectationFurnitureAndAccessory']);
Route::post('store-complectation-furniture-and-accessory', [ComplectationFurnitureAndAccessoryController::class, 'storeComplectationFurnitureAndAccessory']);
Route::post('update-complectation-furniture-and-accessory/{id}', [ComplectationFurnitureAndAccessoryController::class, 'updateComplectationFurnitureAndAccessory']);

Route::post('get-delivery/{id}', [DeliveryController::class, 'getDelivery']);
Route::post('store-delivery', [DeliveryController::class, 'storeDelivery']);
Route::post('update-delivery/{id}', [DeliveryController::class, 'updateDelivery']);

Route::post('get-designing/{id}', [DesigningController::class, 'getDesigning']);
Route::post('store-designing', [DesigningController::class, 'storeDesigning']);
Route::post('update-designing/{id}', [DesigningController::class, 'updateDesigning']);

Route::post('get-engineering-system/{id}', [EngineeringSystemController::class, 'getEngineeringSystem']);
Route::post('store-engineering-system', [EngineeringSystemController::class, 'storeEngineeringSystem']);
Route::post('update-engineering-system/{id}', [EngineeringSystemController::class, 'updateEngineeringSystem']);

Route::post('get-mounting/{id}', [MountingController::class, 'getMounting']);
Route::post('store-mounting', [MountingController::class, 'storeMounting']);
Route::post('update-mounting/{id}', [MountingController::class, 'updateMounting']);

Route::post('get-technical-detail/{id}', [TechnicalDetailController::class, 'getTechnicalDetail']);
Route::post('store-technical-detail', [TechnicalDetailController::class, 'storeTechnicalDetail']);
Route::post('update-technical-detail/{id}', [TechnicalDetailController::class, 'updateTechnicalDetail']);


Route::get('get-total-price/{orderId}', [CalculationController::class, 'getTotalPrice']);
Route::get('calculation/{orderId}', [CalculationController::class, 'calculation']);


Route::get('get-tetris', [TetrisController::class, 'getTetrisByGameId']);
Route::post('store-tetris', [TetrisController::class, 'storeTetris']);
Route::post('update-tetris/{id}', [TetrisController::class, 'updateTetris']);
Route::post('check-tetris', [TetrisController::class, 'checkTetris']);
Route::post('add-block-tetris', [TetrisController::class, 'addBlockTetris']);



//Route::post('update-order/{id}', [OrderController::class, 'updateOrder']);


