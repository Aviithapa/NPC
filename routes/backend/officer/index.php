<?php
//, 'middleware' => 'auth'
Route::group(['prefix' => 'office/dashboard'], function() {
  
  Route::get('/', function () {
      return view('admin.dashboard.officer');
  });
  
  // Route::get('/profile', function () {
  //   return view('admin.website.applicant.view');
  // });

  Route::resource('profile', App\Http\Controllers\Officer\Applicant\ApplicantController::class, [
    'names' => [
      'index' => 'officer.dashboard.profile.index',
      'show' =>  'officer.dashboard.profile.show'
    ]
  ]);
});