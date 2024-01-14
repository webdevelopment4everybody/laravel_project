<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceFormRequest;
use App\Services\ConferenceService;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct(protected ConferenceService $conferenceService)
    {

    }

    public function index()
    {
        return view('conferences.conference-reservation-form');
    }

    public function create(ConferenceFormRequest $request)
    {
        $response = $this->conferenceService->createConference($request->all(), $request->id);
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

    public function logout()
    {
        auth()->logout();
        return redirect()->to('login');
    }

}
