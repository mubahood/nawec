<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('power-stations', PowerStationController::class);
    $router->resource('tanks', TankController::class);
    $router->resource('engines', EngineController::class);
    $router->resource('contracts', ContractController::class);
    $router->resource('contract-records', ContractRecordController::class);
});
