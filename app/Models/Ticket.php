<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets'; 

    protected $fillable = [
        'title',
        'description',
        'status',
        'client_id',
        'developer_id',
        'admin_id',
        'software_id',
        'priority',
        'system',
        'screenshot',
        'issue_steps',
        'scenario_description',
        'assigned_at'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function software(): BelongsTo
    {
        return $this->belongsTo(Software::class, 'software_id');
    }

    public function developer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'developer_id');
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
