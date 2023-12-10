<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->middleware('AdminRole');
    }

    public function index()
    {
        $brands = DB::table('brands')->paginate(5);
        return view('admin.brand.index', ['brands' => $brands]);
    }

    public function find(Request $request)
    {
        if (!is_numeric($request->search)) {
            $result = DB::table('brands')
                ->select('brandID', 'brandName')
                ->where('brandName', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $result = DB::table('brands')
                ->select('brandID', 'brandName')
                ->where('brandID', 'like', '%' . $request->search . '%')
                ->get();
        }

        return view('admin.brand.find', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $params = [
            'brandName' => $request->brandName,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ];
        DB::table('brands')->insert($params);
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = DB::table('brands')->where('brandID', $id)->first();
        return view('admin.brand.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = DB::table('brands')->where('brandID', $id)->first();
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $params = [
            'brandName' => $request->brandName,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ];
        DB::table('brands')->where('brandID', $id)->update($params);
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('brands')->where('brandID', $id)->delete();
        return redirect()->route('brand.index');
    }
}
