<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->middleware('AdminRole');
    }
    

    public function index()
    {
        $products = Product::paginate(5);
        $brands = Brand::whereIn('brandID', $products->pluck('brandID'))->get();
        return view('admin.product.index', ['products' => $products, 'brands' => $brands]);
    }
    /**
     * find the product
     */
    public function find(Request $request)
    {
        if (!is_numeric($request->search)) {
            $result = DB::table('brands')
                ->join('products', 'brands.brandID', '=', 'products.brandID')
                ->select('brandName', 'productCode', 'productName', 'listPrice')
                ->orWhere('brandName', 'like', '%' . $request->search . '%')
                ->orWhere('productCode', 'like', '%' . $request->search . '%')
                ->orWhere('productName', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $result = DB::table('brands')
                ->join('products', 'brands.brandID', '=', 'products.brandID')
                ->select('brandName', 'productCode', 'productName', 'listPrice')
                ->where('listPrice', 'like', '%' . $request->search . '%')
                ->orWhere('listPrice', '>', $request->search)
                ->get();
        }

        return view('admin.product.find', ['result' => $result]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.product.create', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $des = 'img';
        $imgname = $request->file('productImage')->getClientOriginalName();
        $product = new Product();
        $product->brandID = $request->brandID;
        $product->productCode = $request->productCode;
        $product->productName = $request->productName;
        $product->productImage = $imgname; // Sửa dòng này để gán tên file ảnh thay vì $request->$imgname
        $product->description = $request->description;
        $product->listPrice = $request->listPrice;
        $product->save();
        $request->file('productImage')->move($des, $imgname);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brands = Brand::all();
        $product = Product::find($id);
        return view('admin.product.edit', ['brands' => $brands, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $des = 'img';
        $imgname = $request->file('productImage')->getClientOriginalName();
        $product = Product::find($id);
        $product->brandID = $request->brandID;
        $product->productCode = $request->productCode;
        $product->productName = $request->productName;
        $product->productImage = $imgname; // Sửa dòng này để gán tên file ảnh thay vì $request->$imgname
        $product->listPrice = $request->listPrice;
        $product->description = $request->description;
        $product->listPrice = $request->listPrice;
        $product->save();
        $request->file('productImage')->move($des, $imgname);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('product.index');
    }
}
