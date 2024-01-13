<?php

namespace App\Enums;

enum UserRoles: string
{
    case ADMINISTRATOR = 'administrator';
    case CLIENT = 'client';
    case EMPLOYEE = 'employee';

    public static function toArray(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[$case->name] = $case->value;
        }

        return $array;
    }

}
