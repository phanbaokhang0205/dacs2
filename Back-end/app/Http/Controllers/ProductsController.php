<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('gearBox', 'motorcycle')->paginate(6);
        $lastestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $brands = Brand::all();
        return view(
            'user.products',
            [
                'lastestProducts' => $lastestProducts,
                'brands' => $brands, 
                'products' => $products,
            ]
        );
    }

    public function index2()
    {
        $products = Product::where('gearBox', 'scooter')->paginate(6);
        $lastestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $brands = Brand::all();
        return view(
            'user.products_scooter',
            [
                'lastestProducts' => $lastestProducts,
                'brands' => $brands, 'products' => $products,
            ]
        );
    }

    public function index3()
    {
        $products = Product::where('gearBox', 'manual')->paginate(6);
        $lastestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $brands = Brand::all();
        return view(
            'user.products_manual',
            [
                'lastestProducts' => $lastestProducts,
                'brands' => $brands, 'products' => $products,
            ]
        );
    }

    public function index4()
    {
        $products = Product::where('gearBox', 'electric')->paginate(6);
        $lastestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $brands = Brand::all();
        return view(
            'user.products_electric',
            [
                'lastestProducts' => $lastestProducts,
                'brands' => $brands, 'products' => $products,
            ]
        );
    }

    public function storeComment(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->comments = $request->comments;
        $user->save();
        return redirect()->route('products');
    }
    

    public function findUserProduct(Request $request)
    {
        $paginate = Product::paginate(6);
        $lastestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        if (!is_numeric($request->search)) {
            $result_user = DB::table('brands')
                ->join('products', 'brands.brandID', '=', 'products.brandID')
                ->select('productID', 'productImage', 'productName', 'gearBox', 'listPrice','brandName')
                ->orWhere('productName', 'like', '%' . $request->search . '%')
                ->orWhere('gearBox', 'like', '%' . $request->search . '%')
                ->orWhere('brandName', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $result_user = DB::table('brands')
                ->join('products', 'brands.brandID', '=', 'products.brandID')
                ->select('productName', 'gearBox', 'listPrice','productID','productImage')
                ->where('listPrice', 'like', '%' . $request->search . '%')
                ->orWhere('listPrice', '>', $request->search)
                ->get();
        }

        return view('user.products_find', [
            'result' => $result_user,
            'lastestProducts' => $lastestProducts,
            'paginate' => $paginate
        ]);
    }

    

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Book successfully deleted.');
        }
    }

    
}
