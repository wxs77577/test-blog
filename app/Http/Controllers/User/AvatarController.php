<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\SaveAvatarRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvatarController extends Controller
{
    public function edit()
    {
        return view('user.avatar', ['user' => \Auth::user()]);
    }

    public function update(SaveAvatarRequest $request)
    {
        /**
         * @var $user User
         */
        $user = \Auth::user();
        $path = $request->file('avatar')->store('avatars', 'uploads');
        $user->avatar = $path;
        $user->saveOrFail();
//        dd($path);
        return redirect()->refresh();

    }
}
