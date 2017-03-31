<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        /**
         * @var User $me
         */
        $me = \Auth::user();
        return view('user.notifications', ['list' => $me->notifications()->paginate(20)]);
    }
}
