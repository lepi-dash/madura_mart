<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'tittle' => 'Users',
            'datas' => User::all()
        ]);
    }

    public function create()
    {
        return view('users.create', [
            'tittle' => 'Users'
        ]);
    }

    public function store(Request $request)
    {
        // ✅ VALIDASI
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
        ]);

        try {
            $data = $request->only(['name', 'email', 'role', 'alamat', 'no_telepon']);

            // ✅ HASH PASSWORD
            $data['password'] = Hash::make($request->password);

            // ✅ UPLOAD FOTO
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/users'), $filename);
                $data['foto'] = $filename;
            } else {
                $data['foto'] = 'default.png';
            }

            User::create($data);

            return redirect()->route('users.index')->with('simpan', 'User berhasil ditambahkan');
        } catch (Throwable $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        return view('users.edit', [
            'tittle' => 'Users',
            'data' => User::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->only(['name', 'email', 'role', 'alamat', 'no_telepon']);

        // ✅ PASSWORD OPTIONAL
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // ✅ UPDATE FOTO
        if ($request->hasFile('foto')) {
            if ($user->foto != 'default.png' && File::exists(public_path('images/users/' . $user->foto))) {
                File::delete(public_path('images/users/' . $user->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/users'), $filename);
            $data['foto'] = $filename;
        }

        $user->update($data);

        return redirect()->route('users.index')->with('ubah', 'User berhasil diupdate');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->foto != 'default.png' && File::exists(public_path('images/users/' . $user->foto))) {
            File::delete(public_path('images/users/' . $user->foto));
        }

        $user->delete();

        return redirect()->route('users.index')->with('hapus', 'User berhasil dihapus');
    }
}