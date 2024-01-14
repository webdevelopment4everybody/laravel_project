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

    public static function getIndex($name): ?int
    {
        $cases = self::cases();
        foreach ($cases as $index => $case) {
            if ($case->name === $name) {
                return $index+1;
            }
        }

        return null; // Return null if the name is not found
    }

}
