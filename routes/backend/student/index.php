<?php

// , 'middleware' => 'auth'

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\LogsController;

Route::group(['prefix' => 'student/dashboard'], function () {

  Route::get('/', [DashboardController::class, 'index']);

  Route::resource('application', App\Http\Controllers\Student\ApplicationController::class, [
    'names' => [
      'index' => 'student.dashboard.application.index',
      'create' => 'student.dashboard.application.create',
      'edit' => 'student.dashboard.application.edit',
      //   'delete' => 'student.dashboard.application.delete',
      'store' => 'student.dashboard.application.store',
      'update' => 'student.dashboard.application.update',
      //   'review' => 'student.dashboard.application.review',
    ]
  ]);

  Route::resource('logs',  LogsController::class, [
    'names' => [
      'index' => 'student.dashboard.logs.index',
    ]
  ]);

  Route::post('/save_image/{id?}', [App\Http\Controllers\Student\ApplicationController::class, 'save_image'])->middleware(['auth'])->name('save_image');
});
