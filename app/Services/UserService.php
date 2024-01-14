<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function getAllUsers(): Collection
    {
        return User::all();
    }

    public function getUserById(int $id): User
    {
        return User::find($id);
    }

    public function update(array $data, int $userId):\Illuminate\Http\JsonResponse
    {
        $user = User::find($userId);

        if ($user) {

            $user->update([
                "name" => $data['first_name'],
                "lastname" => $data['last_name'],
                "email" => $data['email'],
                "phone" => $data['phone'],
            ]);

            return response()->json([
                'success' => true,
                'message' => __('content.conferences.user_updated_successfuly')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => __('content.conferences.user_updated_error')
        ]);

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
        if (auth()->attempt(['email' => $email, 'password' => $password])) {

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
