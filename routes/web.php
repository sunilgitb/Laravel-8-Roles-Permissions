<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    UserController,
    
   
};
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        Route::resource('jobs','JobController');
        Route::resource('contacts','ContactController');
        Route::resource('applications','ApplicationController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});

Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/our-team', [HomeController::class, 'ourTeam']);
Route::get('/development', [HomeController::class, 'development']);
Route::get('/designing', [HomeController::class, 'designing']);
Route::get('/enterprise-solution', [HomeController::class, 'enterpriseSolution']);
Route::get('/careers', [HomeController::class, 'career']);
Route::get('/cloud-solutions', [HomeController::class, 'cloudSolutions']);
Route::get('/it-consulting', [HomeController::class, 'itConsulting']);
Route::get('/our-work', [HomeController::class, 'ourWork']);
Route::get('/our-work-detail', [HomeController::class, 'ourWorkDetail']);   
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/terms-of-service', [HomeController::class, 'termsofService']);
Route::get('/job-openings', [HomeController::class, 'jobOpenings']);
Route::post('/apply', [ApplicationController::class, 'ApplyApplication'])->name('apply');
Route::get  ('/resume-donwload', [ApplicationController::class, 'resumeDonwload'])->name('resume.download');;
Route::get('/resumes/{id}/download', [ApplicationController::class, 'download'])->name('resumes.download');


Route::post('/contact', [ContactController::class, 'Contact'])->name('contact.submit');
Route::post('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/posts', [PostController::class, 'posts']);
Route::get('/blog', [PostController::class, 'showMore']);


Route::get('/blog/{id}', [PostController::class, 'showBlog'])->name('blog.show');

Route::get('total-counts', [UserController::class, 'totalCount']);

