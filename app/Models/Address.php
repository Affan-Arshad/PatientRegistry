<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function island(): BelongsTo {
        return $this->belongsTo(Island::class);
    }

    public function patients(): HasMany {
        return $this->hasMany(Patient::class);
    }
}
