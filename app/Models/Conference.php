<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "place",
        "date",
        "description",
        "lectors"
    ];

    protected $dates = [
        "date"
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, "user_id");
    }
}
