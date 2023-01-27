<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'job_id', 'gender', 'marital_status', 'education', 'address', 'ktp', 'cv', 'status', 'email', 'agama'
    ];

    public function job(){
        return $this->belongsTo(Jobs::class, 'job_id', 'id');
    }
}
