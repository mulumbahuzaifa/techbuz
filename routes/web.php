<?php

use App\Livewire\Admin\AdminAddBlogsComponent;
use App\Livewire\Admin\AdminAddServicesComponent;
use App\Livewire\Admin\AdminBlogsComponent;
use App\Livewire\Admin\AdminContactsComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminEditBlogsComponent;
use App\Livewire\Admin\AdminEditServicesComponent;
use App\Livewire\Admin\AdminServicesComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ServieDetailsComponent;
use App\Livewire\ContactUsComponent;
use App\Livewire\ServiceDetailsComponent;
use App\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
// Route::get('/servie-details', ServieDetailsComponent::class)->name('servie-details');
Route::get('/service-details/{id}', ServiceDetailsComponent::class)->name('service-details');
Route::get('/contact-us', ContactUsComponent::class)->name('contact-us');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
 

//User
Route::middleware(['auth:sanctum',
config('jetstream.auth_session'),
'verified',])->group(function(){
Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//Admin
Route::middleware(['auth:sanctum',
config('jetstream.auth_session'),
'verified'
])->group(function(){
    Route::get('/admin-dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/services', AdminServicesComponent::class)->name('admin.services');
    Route::get('/admin/services/add', AdminAddServicesComponent::class)->name('admin.addservices');
    Route::get('/admin/services/edit/{service_id}', AdminEditServicesComponent::class)->name('admin.editservices');
    
    Route::get('/admin/blogs', AdminBlogsComponent::class)->name('admin.blogs');
    Route::get('/admin/blogs/add', AdminAddBlogsComponent::class)->name('admin.addblog');
    Route::get('/admin/blogs/edit/{blog_id}', AdminEditBlogsComponent::class)->name('admin.editblog');

    Route::get('/admin/contacts', AdminContactsComponent::class)->name('admin.contacts');

});
