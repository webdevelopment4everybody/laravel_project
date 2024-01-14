<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("login");
    }

    public function login(LoginRequest $request)
    {
        $authenticated = $this->userService->authenticate($request->email, $request->password);
        $jsonResponse = json_decode($authenticated->content());

        if ($jsonResponse->success) {
            return redirect()->to('client');
        }

        return redirect()->back()->withInput()->with([
            'message'=> $jsonResponse->message,
            'status'=> 0
        ]);
    }
}
