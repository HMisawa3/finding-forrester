<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UserController extends Controller
{
    public function show(Int $shop) {
        $shop = User::where('id', $shop)
        ->first();
        return view('user.shop', compact('shop'));
    }
    public function edit() {
        $shop = User::where('id', Auth::id())
        ->first();
        return view('user.edit', compact('shop'));
    }
    public function update(Request $request) {
        $data = $request->input();
        User::where('id', Auth::id())
        ->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'tel' => $data['tel'],
        ]);
        if(isset($data['newPassword'])){
            User::where('id', Auth::id())
            ->update([
                'password' => Hash::make($data['newPassword']),
            ]);
        }
        return redirect()->route('shop.show', ['shop' => Auth::id()]);
    }
}
