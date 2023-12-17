<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;
use App\Services\ConferenceService;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function __construct(protected ConferenceService $conferenceService)
    {

    }

    public function index(Request $request)
    {
        return view("conferences.conference-inner", [
            'conference' => $this->conferenceService->getConferenceById($request->id)
        ]);
    }
}
