<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceFormRequest;
use App\Http\Requests\CreateConferenceRequest;
use App\Http\Requests\DeleteRequest;
use App\Services\ConferenceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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
        $response =$this->conferenceService->deleteConference($request->id);
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
        $response = $this->conferenceService->createConference($request->all());
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
