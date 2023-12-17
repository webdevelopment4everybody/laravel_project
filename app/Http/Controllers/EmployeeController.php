<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ConferenceService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct(protected ConferenceService $conferenceService)
    {

    }

    public function index()
    {
        session()->put('role', 'employee');
        return view('conferences.conference-list', [
            'conferences_list' => $this->conferenceService->getAllConferences(),
        ]);
    }
}
