<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        $users = DB::table('users')->paginate(10);
        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'typeuser' => $request->typeuser,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ];
        DB::table('users')->insert($params);
        return redirect()->route('user.index');
    }

    /**
     * find the users
     */
    public function find(Request $request)
    {
        if (!is_numeric($request->search)) {
            $result = DB::table('users')
                ->select('id', 'name', 'email', 'typeuser')
                ->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('typeuser', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $result = DB::table('users')
                ->select('id', 'name', 'email', 'typeuser')
                ->where('id', 'like', '%' . $request->search . '%')
                ->get();
        }

        return view('admin.user.find', ['result' => $result]);
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
        $user = User::find($id);
        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->typeuser = $request->typeuser;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            DB::table('users')->where('id', $id)->delete();

            // Cập nhật lại các ID tăng dần
            DB::statement('SET @new_id = 0;');
            DB::statement('UPDATE users SET id = (@new_id := @new_id + 1) ORDER BY id;');

            // Commit thay đổi
            DB::commit();
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            // Rollback nếu có lỗi xảy ra
            DB::rollback();
            throw $e;
        }
    }
}
