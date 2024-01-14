<?php

namespace App\Services;

use App\Models\Conference;
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

    public function createConference(array $data): string
    {
        return 'There will be form submission logic';
    }

    public function deleteConference(int $id): string
    {
        return 'There will be deletion logic';
    }

}
