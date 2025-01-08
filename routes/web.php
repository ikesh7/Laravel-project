<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


//auth route for both
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/userdashboard', [App\Http\Controllers\PersonalInfoController::class, 'index'])->name('personalinfo');
    Route::get('/userdashboard', [App\Http\Controllers\PersonalInfoController::class, 'update'])->name('personalinfoupdate');
});
/* start agent Routes */
Route::middleware(['auth', 'role:agent'])
    ->prefix('agent')
    ->namespace("App\Http\Controllers\Agent")
    ->group(function () {


        Route::get('/', 'DashboardController@index')
            ->name('agent.index');
        Route::resource('/facilities', 'FacilitiesController')
            ->except(['show', 'edit', 'update']);

        Route::resource('/bed', 'BedController');
        Route::resource('/roomtype', 'RoomTypeController');
        Route::resource('/amenity', 'AmenityController');
        Route::resource('/room', 'RoomController');

        /* Room Images */
        Route::get('/room/{room}/upload', 'RoomController@addImage')
            ->name('room.addImage');
        Route::post('/room/{room}/upload', 'RoomController@upload')
            ->name('room.upload');
        Route::delete('/room/media/{mediaId}/{modelId}', 'RoomController@deleteImage')
            ->name('room.media.destroy');
        Route::post('/hotel-registration', [App\Http\Controllers\HotelRegisterController::class, 'registration'])->name('hotel.registration');
        /* Hotel Images */
        Route::get('/hotel/{hotel}/upload', [App\Http\Controllers\HotelRegisterController::class, 'addImage'])
            ->name('hotel.addImage');
        Route::post('/hotel/{hotel}/upload',  [App\Http\Controllers\HotelRegisterController::class, 'upload'])
            ->name('hotel.upload');
        Route::delete('/hotel/media/{mediaId}/{modelId}',  [App\Http\Controllers\HotelRegisterController::class, 'deleteImage'])
            ->name('hotel.media.destroy');
        Route::get('/hotel-registration', [App\Http\Controllers\HotelRegisterController::class, 'registerForm'])->name('home')->middleware('auth');
        Route::post('/hotel-registration', [App\Http\Controllers\HotelRegisterController::class, 'registration']);

        Route::get('/edit-info', [App\Http\Controllers\HotelRegisterController::class, 'editView'])->name('agent.edit-info');
        Route::put('/edit-info', [App\Http\Controllers\HotelRegisterController::class, 'edit'])->name('agent.update-info');
            Route::post('/hotel-registration', [App\Http\Controllers\HotelRegisterController::class, 'registration'])->name('hotel.registration');
             /* Hotel Images */
      
        Route::get('/bookings', [App\Http\Controllers\BookController::class, 'bookingList'])->name('agent.booking')->middleware('auth');
        Route::get('/unverifiedbookings', [App\Http\Controllers\BookController::class, 'unverifiedbookingList'])->name('agent.unverifiedbooking')->middleware('auth');
    });

// Route::post('/hotel-registration', [App\Http\Controllers\HotelRegisterController::class, 'registration']);

/* end agent Routes */


/* start admin routes */
Route::middleware(['auth', 'role:admin'])->prefix('admin')->namespace("App\Http\Controllers\Admin")->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::resource('/facility', 'FacilityController');
    Route::resource('/users', 'UsersController');
    Route::get('/users-data', 'UsersController@data')->name('users.data');
    Route::get('/hotel-data', 'HotelController@data')->name('hotel.data');
    Route::get('/hotels', 'HotelController@index')->name('admin.hotel.list');
    Route::get('/hotel-details/{id}', 'HotelController@details')->name('admin.hotel.details');
    Route::put('/hotel-details/{id}', 'HotelController@edit')->name('admin.hotel.edit');
    Route::get('/facility-data', 'FacilityController@data')->name('facility.data');
  
    Route::get('/facilities','FacilityController@index')->name('facilitiesadmin.index');
});


/* end admin routes */

Route::get('/form', [FormController::class, 'index']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
//Auth::routes(['verify' => true]);
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
// Auth::routes();
require __DIR__ . '/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

ROute::view('/', 'welcome');
Route::post('/', [App\Http\Controllers\AutocompleteController::class, 'fetch'])->name('autocomplete.fetch');

Route::get('/hotel-registration', function () {
    return view('hotel-registration');
});

Route::post('/hotel-registration',  'HotelRegister@registrationForm');

//Route::get('/hotel-registration','HotelRegisterController@registerForm');

Route::get('/form-creator',  [App\Http\Controllers\FormCreator::class, 'index'])->name('home');
Route::post('/form-creator', [App\Http\Controllers\FormCreator::class, 'addForm']);

Route::get('/view-form-settings',  [App\Http\Controllers\FormCreator::class, 'viewForms']);

Route::get('/view-form-settings/update/{id}', [App\Http\Controllers\FormCreator::class, 'editForm']);
Route::get('/view-form-settings/delete/{id}', [App\Http\Controllers\FormCreator::class, 'deleteForm']);
Route::put('/update-form/{id}', [App\Http\Controllers\FormCreator::class, 'updateForm']);







Route::get('/autocomplete', [App\Http\Controllers\AutocompleteController::class, 'index']);
Route::post('/autocomplete/fetch', [App\Http\Controllers\AutocompleteController::class, 'fetch'])->name('autocomplete.fetch');

Route::get('/', [App\Http\Controllers\AutocompleteController::class, 'index']);
Route::post('/fetch', [App\Http\Controllers\AutocompleteController::class, 'fetch'])->name('autocomplete.fetch');

Route::get('/search',  [App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::post('/search-filter',  [App\Http\Controllers\SearchController::class, 'filter']);


Route::get('hotel/{slug}', [App\Http\Controllers\SearchController::class, 'details'])->name('search.details');

//  Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/book/{id}', [App\Http\Controllers\BookController::class, 'index'])->middleware('auth');
Route::get('/book/rooms/{id}', [App\Http\Controllers\BookController::class, 'confirmindex'])->middleware('auth');
Route::post('/book/confirm/{id}',  [App\Http\Controllers\BookController::class, 'insert']);

Route::get('/bookings', [App\Http\Controllers\BookController::class, 'bookingList'])->name('agent.booking')->middleware('auth');

Route::get('/bookings', [App\Http\Controllers\BookController::class, 'bookingList'])->name('bookings')->middleware('auth');
Route::get('/booking/update/{id}', [App\Http\Controllers\BookController::class, 'editView'])->middleware('auth');
Route::put('/booking/update/{id}', [App\Http\Controllers\BookController::class, 'updateBooking'])->middleware('auth');

Route::get('/mybookings', [App\Http\Controllers\BookController::class, 'mybookingList'])->name('mybookings')->middleware('auth');


Route::get('/bookingdetails',[App\Http\Controllers\BookController::class, 'mybookingList'])->name('booking')->middleware('auth');

Route::get('/passwordchange', [App\Http\Controllers\PasswordChangeController::class, 'index'])->name('passwordchange');
Route::put('/passwordchange', [App\Http\Controllers\PasswordChangeController::class, 'update'])->name('passwordupdate');
Route::get('/userdashboard', [App\Http\Controllers\PersonalInfoController::class, 'index'])->name('personalinfo');
Route::put('/userdashboard', [App\Http\Controllers\PersonalInfoController::class, 'update'])->name('personalinfoupdate');