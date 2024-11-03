<?php

use App\Http\Controllers\CloudVariableController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\ThingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('devices')->name('devices.')->group(function () {
        Route::get('/', [DeviceController::class, 'index'])->name('index'); // devices.index
        Route::get('/create', [DeviceController::class, 'create'])->name('create'); // devices.create
        Route::get('/{device}/edit', [DeviceController::class, 'edit'])->name('edit'); // devices.edit
        Route::get('/{device}', [DeviceController::class, 'show'])->name('show'); // devices.show
    });

    Route::prefix('things')->name('things.')->group(function () {
        Route::get('/', [ThingController::class, 'index'])->name('index');
        Route::get('/create', [ThingController::class, 'create'])->name('create');
        Route::get('/{thing}/edit', [ThingController::class, 'edit'])->name('edit');
        Route::get('/{thing}', [ThingController::class, 'show'])->name('show');
    });

    Route::prefix('cv')->name('cv.')->group(function () {
        Route::get('/', [CloudVariableController::class, 'index'])->name('index');
        Route::get('/create', [CloudVariableController::class, 'create'])->name('create');
        Route::get('/{cloudVariable}/edit', [CloudVariableController::class, 'edit'])->name('edit');
        Route::get('/{cloudVariable}', [CloudVariableController::class, 'show'])->name('show');
    });

    Route::prefix('sensors')->name('sensors.')->group(function () {
        Route::get('/', [SensorController::class, 'index'])->name('index'); // sensors.index
        Route::get('/create', [SensorController::class, 'create'])->name('create'); // sensors.create
        Route::get('/{sensor}/edit', [SensorController::class, 'edit'])->name('edit'); // sensors.edit
        Route::get('/{sensor}', [SensorController::class, 'show'])->name('show'); // sensors.show
    });

    Route::prefix('parkings')->name('parkings.')->group(function () {
        Route::get('/', [DataController::class, 'index'])->name('index'); // parking.index
        // Route::get('/{parking}', [DataController::class, 'show'])->name('show'); // parking.show
    });

    Route::prefix('reservations')->name('reservations.')->group(function () {
        Route::get('/', [SensorController::class, 'index'])->name('index'); // sensors.index
        Route::get('/create', [SensorController::class, 'create'])->name('create'); // sensors.create
        Route::get('/{sensor}/edit', [SensorController::class, 'edit'])->name('edit'); // sensors.edit
        Route::get('/{sensor}', [SensorController::class, 'show'])->name('show'); // sensors.show
    });
});
