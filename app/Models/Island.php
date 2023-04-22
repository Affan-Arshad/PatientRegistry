<?php

namespace App\Models;

use App\Enums\Atoll;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Island extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'atoll' => Atoll::class
    ];

    public function addresses(): HasMany {
        return $this->hasMany(Address::class);
    }

    public function patients(): HasManyThrough {
        return $this->hasManyThrough(Patient::class, Address::class);
    }
}
