<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;
    protected $table = 'activity_logs';

    protected $fillable = [
        'activity',
        'employee_id',
    ];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
