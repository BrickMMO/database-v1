<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Segment has many Schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    // Segment has many Broadcast Logs
    public function broadcastLogs()
    {
        return $this->hasMany(BroadcastLog::class);
    }
}
