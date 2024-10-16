<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'segment_id',
        'time',
    ];

    // Schedule belongs to a Segment
    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }
}
