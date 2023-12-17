<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceFormRequest;
use App\Services\ConferenceService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(protected UserService $userService)
    {

    }

    public function index()
    {

        return view('admin.admin');
    }

    public function show()
    {

        return view('admin.users', [
            'users' => $this->userService->getAllUsers(),
        ]);
    }

    public function showUserInfo(Request $request)
    {

        return view('admin.user', [
            'user' => $this->userService->getUserById($request->id),
        ]);
    }

    public function update(ConferenceFormRequest $request)
    {
        return redirect()->back()->with([
            'success' => $this->userService->update($request->all())
        ]);
    }
}
