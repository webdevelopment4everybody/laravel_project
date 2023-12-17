<?php

namespace App\Services;

class UserService
{
    public function getAllUsers(): array
    {
        $users = [
            [
                'id' => '1',
                'name' => 'Migle',
                'lastname' => 'Pupeikyte',
                'email' => 'm.pupeikyteee@gmail.com',
                'phone_number' => '1234567890'
            ],
            [
                'id' => '2',
                'name' => 'Jonas',
                'lastname' => 'Jonaitis',
                'email' => 'j.jonaitis@gmail.com',
                'phone_number' => '2234567899'
            ],
            [
                'id' => '3',
                'name' => 'Saule',
                'lastname' => 'Saulyte',
                'email' => 'saule.saulyte@aa.com',
                'phone_number' => '2232167800'
            ]
        ];
        return $users;
    }

    public function getUserById(int $id): array
    {
        $users = [
            [
                'id' => '1',
                'name' => 'Migle',
                'lastname' => 'Pupeikyte',
                'email' => 'm.pupeikyteee@gmail.com',
                'phone_number' => '1234567890'
            ],
            [
                'id' => '2',
                'name' => 'Jonas',
                'lastname' => 'Jonaitis',
                'email' => 'j.jonaitis@gmail.com',
                'phone_number' => '2234567899'
            ],
            [
                'id' => '3',
                'name' => 'Saule',
                'lastname' => 'Saulyte',
                'email' => 'saule.saulyte@aa.com',
                'phone_number' => '2232167800'
            ]
        ];

        foreach ($users as $user) {
            if ($user['id'] == $id) {

                return $user;
            }
        }

        return [];
    }

    public function update(array $data): string
    {
        return 'There will be form submission logic';
    }
}
