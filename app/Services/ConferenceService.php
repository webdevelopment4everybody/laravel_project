<?php

namespace App\Services;

use App\Models\Conference;
use App\Models\UserConference;
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

    public function createConference(array $data, int $id): \Illuminate\Http\JsonResponse
    {
        $success = false;
        $message = '';
        $conferenceExist = UserConference::where( 'user_id', auth()->user()->id)->where('conference_id', $id)->exists();
        if(!$conferenceExist) {
            $conference =  UserConference::create([
                'user_id'=> auth()->user()->id,
                'conference_id'=> $id
            ]);
            if ($conference) {
                $success = true;
                $message = __('content.conferences.registration_success');
            }else {
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

    public function deleteConference(int $id): string
    {
        return 'There will be deletion logic';
    }

}
