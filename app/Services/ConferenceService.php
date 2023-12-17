<?php

namespace App\Services;

class ConferenceService
{
    public function getAllConferences(): array
    {
        $conferences = [
            [
                'id' => 1,
                'name' => 'Conference I',
                'location' => 'Litexpo - Vilnius, Lithuania',
                'date' => '2023-12-10',
                'time' => '10:00',
            ],
            [
                'id' => 2,
                'name' => 'Conference II',
                'location' => 'laks - Ryga, Latvia',
                'date' => '2023-12-27',
                'time' => '11:00',
            ],
            [
                'id' => 3,
                'name' => 'Conference III',
                'location' => 'Aaaa - Kaunas, Lietuva',
                'date' => '2023-01-30',
                'time' => '12:00',
            ]
        ];

        return $conferences;
    }

    public function getConferenceById(int $id): array
    {
        $conferences = [
            [
                'id' => 1,
                'name' => 'Conference I',
                'location' => 'Litexpo - Vilnius, Lithuania',
                'date' => '2023-12-10',
                'time' => '10:00',
            ],
            [
                'id' => 2,
                'name' => 'Conference II',
                'location' => 'laks - Ryga, Latvia',
                'date' => '2023-12-27',
                'time' => '11:00',
            ],
            [
                'id' => 3,
                'name' => 'Conference III',
                'location' => 'Aaaa - Kaunas, Lietuva',
                'date' => '2023-01-30',
                'time' => '12:00',
            ]
        ];
        foreach ($conferences as $conference) {
            if ($conference['id'] == $id) {

                return $conference;
            }
        }

        return [];
    }

    public function createConference(array $data): string
    {
        return 'There will be form submission logic';
    }
}
