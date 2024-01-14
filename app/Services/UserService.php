<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

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

    public function create(string $firstName, string $lastName, string $email, string $phoneNumber, string $password)
    {
        $user = User::create([
            "name" => $firstName,
            "lastname" => $lastName,
            "email" => $email,
            "phone" => $phoneNumber,
            "password" => Hash::make($password)
        ]);


        if ($user) {
            return response()->json([
                'success' => true,
                'message' => __('content.messages.user_created_successfuly')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => __('content.messages.user_created_error')
        ]);
    }

    public function authenticate(string $email, string $password)
    {
        if(auth()->attempt(['email' => $email, 'password' => $password])) {

            return response()->json([
                'success' => true,
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => __('content.login.user_not_found')
        ]);
    }
}
