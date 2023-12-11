<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// User
Route::get('/', [HomepageController::class, 'index'])->name('homepage');


//Login
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register,' , [UserController::class, 'postRegister']);

// admin
Route::group(['prefix'=>'admin'],function() {
    Route::group(['namespace'=>'App\Http\Controllers\Admin'],function() {
        Route::resources([
            'brand'=>'BrandController',
            'product'=>'ProductController',
            'user'=>'UserController'
        ]);
        Route::get('/',[AdminController::class, 'index'])->name('admin.index');
        Route::post('findProduct',[ProductController::class, 'find'])->name('product.find');
        Route::post('findBrand',[BrandController::class, 'find'])->name('brand.find');
        Route::post('findUser',[UserController::class, 'find'])->name('user.find');
        
    });
});



// Auth
Auth::routes(['register'=>true]);
Route::get('laythongtin',function () {
    if(Auth::check())
    {
        echo "<pre>";
        // print_r(Auth::user());
        $user = Auth::user();
        print_r($user->email);
        echo "</pre>";
    }
    else {
        echo "Ban chua dang nhap he thong !";
    }
});
Auth::routes();

