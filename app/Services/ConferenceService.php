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
                'registered_users' => [
                    [
                        'name' => 'Migle',
                        'lastname' => 'Pupeikyte',
                        'email' => 'm.pupeikyteee@gmail.com',
                        'phone_number' => '1234567890'
                    ],
                    [
                        'name' => 'Jonas',
                        'lastname' => 'Jonaitis',
                        'email' => 'j.jonaitis@gmail.com',
                        'phone_number' => '2234567899'
                    ],
                    [
                        'name' => 'Saule',
                        'lastname' => 'Saulyte',
                        'email' => 'saule.saulyte@aa.com',
                        'phone_number' => '2232167800'
                    ]
                ]
            ],
            [
                'id' => 2,
                'name' => 'Conference II',
                'location' => 'laks - Ryga, Latvia',
                'date' => '2023-12-27',
                'time' => '11:00',
                'registered_users' => [
                    [
                        'name' => 'Migle',
                        'lastname' => 'Pupeikyte',
                        'email' => 'm.pupeikyteee@gmail.com',
                        'phone_number' => '1234567890'
                    ],
                    [
                        'name' => 'One',
                        'lastname' => 'Onaite',
                        'email' => 'ona@ee.com',
                        'phone_number' => '1233367333'
                    ],
                ]
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
                'description' => 'lalalalala',
                'lectors' => 'Angele Angelaite',
                'registered_users' => [
                    [
                        'name' => 'Migle',
                        'lastname' => 'Pupeikyte',
                        'email' => 'm.pupeikyteee@gmail.com',
                        'phone_number' => '1234567890'
                    ],
                    [
                        'name' => 'Jonas',
                        'lastname' => 'Jonaitis',
                        'email' => 'j.jonaitis@gmail.com',
                        'phone_number' => '2234567899'
                    ],
                    [
                        'name' => 'Saule',
                        'lastname' => 'Saulyte',
                        'email' => 'saule.saulyte@aa.com',
                        'phone_number' => '2232167800'
                    ]
                ]
            ],
            [
                'id' => 2,
                'name' => 'Conference II',
                'location' => 'laks - Ryga, Latvia',
                'date' => '2023-12-27',
                'time' => '11:00',
                'description' => 'lalalalala',
                'lectors' => 'Matas Mataitis',
                'registered_users' => [
                    [
                        'name' => 'Migle',
                        'lastname' => 'Pupeikyte',
                        'email' => 'm.pupeikyteee@gmail.com',
                        'phone_number' => '1234567890'
                    ],
                    [
                        'name' => 'One',
                        'lastname' => 'Onaite',
                        'email' => 'ona@ee.com',
                        'phone_number' => '1233367333',

                    ],
                ]
            ],
            [
                'id' => 3,
                'name' => 'Conference III',
                'location' => 'Aaaa - Kaunas, Lietuva',
                'date' => '2023-01-30',
                'time' => '12:00',
                'description' => 'lalalalala',
                'lectors' => 'Stasys Stasaitis'
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

    public function deleteConference(int $id): string
    {
        return 'There will be deletion logic';
    }

}
