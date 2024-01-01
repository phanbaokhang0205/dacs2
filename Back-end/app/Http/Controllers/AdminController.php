<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Poster;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
<<<<<<< HEAD
        // v_quantity
        $sql = "select * from v_quantity";
        $quantity = DB::select($sql);

        // quantity
        $brandCount = Brand::count();
        $productCount = Product::count();
        $userCount = User::count();

        // // poster
        // $newly_poster = Poster::orderBy('created_at', 'desc')->take(2)->get();

        return view('admin.dashboard', [
            'quantity' => $quantity,
            'brandCount' => $brandCount,
            'productCount' => $productCount,
            'userCount' => $userCount,
            // 'posters' => $newly_poster
        ]);
=======
        // $sql = "select * from v_quantity";
        // $quantity = DB::select($sql);
        return view('admin.dashboard');
>>>>>>> bc5f221fb35bbbd56602ad6de4f394d7c84bf727
    }

}
