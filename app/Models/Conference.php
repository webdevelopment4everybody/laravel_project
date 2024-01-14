<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_conferences', 'conference_id', 'user_id');
    }


    public function getDateAttribute()
    {
        $datetime = Carbon::parse($this->attributes['date']);
        return $datetime->format('Y-m-d');
    }

    public function getTimeAttribute()
    {

        $datetime = Carbon::parse($this->attributes['date']);
        return $datetime->format('H:i');
    }
}
