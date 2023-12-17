<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceFormRequest;
use App\Http\Requests\CreateConferenceRequest;
use App\Http\Requests\DeleteRequest;
use App\Services\ConferenceService;
use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    public function __construct(protected ConferenceService $conferenceService)
    {

    }

    public function index()
    {
        return view("admin.admin");
    }

    public function conferences()
    {
        session()->put('role', 'admin');
        return view("conferences.conference-list", [
            'conferences_list' => $this->conferenceService->getAllConferences(),
        ]);
    }

    public function delete(DeleteRequest $request)
    {
        return redirect()->back()->with([
            'success' => $this->conferenceService->deleteConference($request->id)
        ]);
    }

    public function showForm(Request $request)
    {
        $data = [];
        if($request->edit) {
            $data = $this->conferenceService->getConferenceById($request->edit);
        }
        return view("admin.conference-form", [
            'data' => $data
        ]);
    }

    public function create(CreateConferenceRequest $request)
    {
        return redirect()->back()->with([
            'success' => $this->conferenceService->createConference($request->all())
        ]);
    }
}
