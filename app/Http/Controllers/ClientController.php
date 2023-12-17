<?php

namespace App\Http\Controllers;

use App\Services\ConferenceService;
use function view;

class ClientController extends Controller
{
    public function __construct(protected ConferenceService $conferenceService)
    {

    }

    public function index()
    {
        return view("conferences.conference-list", [
            'conferences_list' => $this->conferenceService->getAllConferences()
        ]);
    }
}
