<?php

namespace App\Http\Controllers;

use App\Enums\UserRoles;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceFormRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("registration");
    }

    public function create(RegisterRequest $request)
    {
        $response = $this->userService->create($request->first_name, $request->last_name, $request->email, $request->phone, $request->password);
        $jsonResponse = json_decode($response->content());

        if ($jsonResponse->success) {
            return redirect()->back()->with([
                'message'=> $jsonResponse->message,
                'status'=> 1
            ]);
        }

        return redirect()->back()->withInput()->with([
            'message'=> $jsonResponse->message,
            'status'=> 0
        ]);

    }
}
