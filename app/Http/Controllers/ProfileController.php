<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
    	return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate()
        ]);
    }

    public function edit(User $user)
    {
    	return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
    	
    	$request = request()->validate([
    		'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
    		'name' => ['string', 'required', 'max:255'],
    		'avatar' => ['file'],
    		'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
    		'password' => ['string', 'required', 'min:5', 'max:255', 'confirmed']
    	]);

    	if (request('avatar')) {
    		$request['avatar'] = request('avatar')->store('avatars');
    	}

    	$user->update($request);

    	return redirect($user->path());
    }
}
