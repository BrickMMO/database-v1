<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BroadcastLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'segment_id',
        'broadcast_time',
        'content',
    ];

    // BroadcastLog belongs to a Segment
    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    // Optional: BroadcastLog might belong to a City
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
