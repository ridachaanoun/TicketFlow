<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Software extends Model
{
    protected $table = 'software';
    protected $fillable = ['name', 'version'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'software_id');
    }
}