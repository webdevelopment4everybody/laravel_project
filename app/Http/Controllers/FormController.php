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
        return redirect()->back()->with([
            'success' => $this->conferenceService->createConference($request->all())
        ]);
    }
}
