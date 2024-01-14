<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserConference extends Model
{
    use HasFactory;
    protected $table = 'user_conferences';

    protected $fillable = [
        "user_id",
        "conference_id"
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_id");
    }

    public function conferences(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class, "conference_id");
    }
}
