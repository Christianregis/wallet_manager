<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('id', '!=', $request->user()->id)
            ->orderBy('name')
            ->get();

        return Inertia::render('Users', [
            'users' => UserResource::collection($users),
        ]);
    }
}
