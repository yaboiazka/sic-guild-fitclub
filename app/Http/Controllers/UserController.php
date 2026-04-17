<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:50|unique:users,email,',
            'role' => 'required|in:user,admin',
            'picutre' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name', 'username', 'role');

        if ($request->hasFile('picutre')) {
            if ($user->picutre) {
                Storage::disk('public')->delete($user->picutre);
            }
            $data['picutre'] = $request->file('picutre')->store('picutres', 'public');
        }

        $user->update($data);

        return redirect()->route('dashboard.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if ($user->posts()->count() > 0) {
            return redirect()->route('dashboard.users.index')
                ->with('error', 'Cannot delete user that has stories. Delete their stories first.');
        }
        
        if ($user->picutre) {
            Storage::disk('public')->delete($user->picutre);
        }
        $user->delete();

        return redirect()->route('dashboard.users.index')->with('success', 'User deleted successfully.');
    }
}
