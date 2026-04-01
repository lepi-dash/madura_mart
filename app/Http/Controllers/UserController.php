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
        try {
            $data = $request->only(['name', 'email', 'role', 'alamat', 'no_telepon']);
            $data['password'] = Hash::make($request->password);

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/users'), $filename);
                $data['foto'] = $filename;
            } else {
                $data['foto'] = 'default.png';
            }

            User::create($data);
            return redirect()->route('users.index')->with('simpan', 'User ' . $request->name . ' berhasil disimpan');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->back()->withInput()->with('error', 'Gagal: Email sudah terdaftar.');
            }
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan users: ' . $e->getMessage());
        } catch (Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        try {
            return view('users.edit', [
                'tittle' => 'Users',
                'data' => User::findOrFail($id)
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan.');
        } catch (Throwable $e) {
            return redirect()->route('users.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $data = $request->only(['name', 'email', 'role', 'alamat', 'no_telepon']);
            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            }
            $users = User::findOrFail($id);

            if ($request->hasFile('foto')) {
                if ($users->foto && $users->foto != 'default.png' && File::exists(public_path('images/users/' . $users->foto))) {
                    File::delete(public_path('images/users/' . $users->foto));
                }
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/users'), $filename);
                $data['foto'] = $filename;
            }

            $users->update($data);
            return redirect()->route('users.index')->with('ubah', 'User ' . $request->name . ' berhasil diupdate');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->back()->withInput()->with('error', 'Gagal: Email sudah terdaftar.');
            }
            return redirect()->back()->withInput()->with('error', 'Gagal mengupdate users: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan.');
        } catch (Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            $users = User::findOrFail($id);
            $nama = $users->name;

            if ($users->foto && $users->foto != 'default.png' && File::exists(public_path('images/users/' . $users->foto))) {
                File::delete(public_path('images/users/' . $users->foto));
            }

            $users->delete();
            return redirect()->route('users.index')->with('hapus', 'User ' . $nama . ' berhasil dihapus');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('users.index')->with('error', 'User tidak ditemukan atau sudah dihapus.');
        } catch (QueryException $e) {
             if ($e->errorInfo[1] == 1451) {
                 return redirect()->route('users.index')->with('error', 'Gagal: User tidak bisa dihapus karena memiliki data transaksi (Order).');
            }
            return redirect()->route('users.index')->with('error', 'Gagal menghapus users: ' . $e->getMessage());
        } catch (Throwable $e) {
            return redirect()->route('users.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
