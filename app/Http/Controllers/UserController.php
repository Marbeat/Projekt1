<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index ()
    {
        $users = DB::table('users')->where('id', Auth::user()->id)->paginate(1);
        return view('profil.index', compact('users'));
    }

    public function update (StoreUserRequest $request, $id)
    {
        $users = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => 'required|numeric|digits:9',
    ]);

        $users = User::findOrFail($id);
        $users->update($request->all());
        return redirect()->route('profil.index')->with(['message' => 'Pomyślnie zaktualizowano dane']);
    }

    public function edit ($id)
    {
        $users = User::findOrFail($id);
        return view('profil.edit', compact('users'));
    }
}