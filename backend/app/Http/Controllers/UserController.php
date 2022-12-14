<?php

namespace App\Http\Controllers;

use App\Helpers\helperClass;
use App\Interfaces\messasges;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {

        $users = User::where('role', 'user')->get();
        return view('dashboard.user.index', compact('users'));
    }

    public function create()
    {

        return view('dashboard.user.create');
    }

    public function save(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'username' => 'required|min:3|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {
            return redirect('admin/users')->with('success', messasges::userSave);
        } else {
            return back()->with('error', messasges::error);
        }


    }

    public function edit(User $user)
    {

        return view('dashboard.user.edit', compact('user'));

    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|min:3|unique:users,username,' . $user->id . '',
        ]);

        $userArray = array(
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
        );
        if ($request->password)
            $userArray['password'] = bcrypt($request->password);


        $user = $user->update($userArray);

        if ($user) {
            return redirect('admin/users')->with('success', messasges::userupdate);
        } else {
            return back()->with('error', messasges::error);
        }


    }

    public function delete(User $user)
    {


        if ($user) {
            $user->delete();
            return redirect('admin/users')->with('success', messasges::userDelete);
        } else {
            return back()->with('error', messasges::error);
        }


    }
}
