<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('AdminRole');
    }

    public function index()
    {
        $brands = Brand::paginate(5);
        return view('admin.brand.index', ['brands' => $brands]);
    }

    public function find(Request $request)
    {
        if (!is_numeric($request->search)) {
            $result = Brand::select('brandID', 'brandName')
                ->where('brandName', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $result = Brand::select('brandID', 'brandName')
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

        DB::beginTransaction();
        try {
            $params = [
                'brandName' => $request->brandName,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ];

            Brand::insert($params);
            // Cập nhật lại các ID tăng dần
            DB::statement('SET @new_id = 0;');
            DB::statement('UPDATE brands SET brandID = (@new_id := @new_id + 1) ORDER BY brandID;');

            // Commit thay đổi
            DB::commit();
            return redirect()->route('brand.index');
        } catch (\Exception $e) {
            // Rollback nếu có lỗi xảy ra
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = Brand::where('brandID', $id)->first();
        return view('admin.brand.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::where('brandID', $id)->first();
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
        Brand::where('brandID', $id)->update($params);
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     DB::table('brands')->where('brandID', $id)->delete();
    //     return redirect()->route('brand.index');
    // }

    public function destroy(string $id)
    {
        // Xóa brand
       DB::beginTransaction();
        try {
            Brand::where('brandID', $id)->delete();

            // Cập nhật lại các ID tăng dần
            DB::statement('SET @new_id = 0;');
            DB::statement('UPDATE brands SET brandID = (@new_id := @new_id + 1) ORDER BY brandID;');

            // Commit thay đổi
            DB::commit();
            return redirect()->route('brand.index');
        } catch (\Exception $e) {
            // Rollback nếu có lỗi xảy ra
            DB::rollback();
            throw $e;
        }
    }
}
