<?php

namespace App\Services;

use App\Models\Conference;
use App\Models\UserConference;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class ConferenceService
{
    public function getAllConferences(): Collection
    {
        return Conference::all();
    }

    public function getConferenceById(int $id): Conference
    {
        return Conference::find($id);
    }

    public function createConference(array $data): \Illuminate\Http\JsonResponse
    {
        $success = false;
        $message = '';
            $conference = Conference::create([
                'name' => $data['conference_name'],
                'description' => $data['conference_description'],
                'place' => $data['conference_place'],
                'date' => Carbon::parse($data['conference_date'] . ' ' . $data['conference_time']),
                'lectors' => $data['conference_lectors'],
            ]);
            if ($conference) {
                $success = true;
                $message = __('content.conferences.registration_success');
            } else {
                $message = __('content.conferences.registration_fail');
            }


        return response()->json([
            'success' => $success,
            'message' => $message
        ]);

    }

    public function deleteConference(int $id): \Illuminate\Http\JsonResponse
    {
        $conference = Conference::find($id);
        if ($conference) {
            $conference->delete();
            return response()->json([
                'success' => true,
                'message' => 'Successfully deleted.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Not found.'
        ]);
    }

    public function updateConference(array $data, int $id): \Illuminate\Http\JsonResponse
    {
        $success = false;
        $message = '';
        $conference = Conference::find($id)->first();
        if ($conference) {
            $conference->update([
                'name' => $data['conference_name'],
                'description' => $data['conference_description'],
                'place' => $data['conference_place'],
                'date' => Carbon::parse($data['conference_date'] . ' ' . $data['conference_time']),
                'lectors' => $data['conference_lectors'],
            ]);
            if ($conference) {
                $success = true;
                $message = __('content.conferences.update_success');
            } else {
                $message = __('content.conferences.update_fail');
            }

        } else {
            $message = __('content.conferences.already_registered');
        }


        return response()->json([
            'success' => $success,
            'message' => $message
        ]);
    }

    public function registerToConference(int $id): \Illuminate\Http\JsonResponse
    {

        $success = false;
        $message = '';
        if(!UserConference::where("user_id",auth()->user()->id)->where("conference_id",$id)->exists()) {
            $conference = UserConference::create([
                'user_id' => auth()->user()->id,
                'conference_id' => $id,
            ]);
            if ($conference) {
                $success = true;
                $message = __('content.conferences.registration_success');
            } else {
                $message = __('content.conferences.registration_fail');
            }

        }else {
            $message = __('content.conferences.already_registered');
        }


        return response()->json([
            'success' => $success,
            'message' => $message
        ]);

    }

}
