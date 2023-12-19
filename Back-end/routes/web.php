<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
        Route::resources([
            'brand' => 'BrandController',
            'product' => 'ProductController',
            'user' => 'UserController'
        ]);
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::post('findProduct', [ProductController::class, 'find'])->name('product.find');
        Route::post('findBrand', [BrandController::class, 'find'])->name('brand.find');
        Route::post('findUser', [UserController::class, 'find'])->name('user.find');
    });
});



//Login
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register,', [UserController::class, 'postRegister']);

// Auth
Auth::routes(['register' => true]);
Route::get('laythongtin', function () {
    if (Auth::check()) {
        echo "<pre>";
        // print_r(Auth::user());
        $user = Auth::user();
        print_r($user->email);
        echo "</pre>";
    } else {
        echo "Ban chua dang nhap he thong !";
    }
});
Auth::routes();


// User
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');
Route::get('/intro', function () {
    return view('user.intro');
})->name('intro');
Route::get('/detail_product/{id?}', function ($id) {
    $product = Product::find($id);
    $brands = Brand::all();
    $products = Product::where('gearBox', $product->gearBox)
        ->whereNotIn('productID', [$id])
        ->take(3)
        ->get();
    return view('user.detail_product', [
        'product' => $product,
        'brands' => $brands,
        'products' => $products
    ]);
})->name('detail_product');

// Products
Route::get('/scooter', [ProductsController::class, 'index2'])->name('scooter');
Route::get('/manual', [ProductsController::class, 'index3'])->name('manual');
Route::get('/electric', [ProductsController::class, 'index4'])->name('electric');
Route::post('/findUserProduct', [ProductsController::class, 'findUserProduct'])->name('user.product.find');


// Cart
Route::post('/addcart/{id}',[CartController::class, 'addcart'])->name('addcart');
Route::post('/updatecart',[CartController::class, 'updatecart'])->name('updatecart');
Route::get('/listcart',[CartController::class, 'listcart'])->name('listcart');
Route::delete('/delete-cart-product', [ProductsController::class, 'deleteProduct'])->name('delete.cart.product');