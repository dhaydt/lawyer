<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LawIsi extends Model
{
    use HasFactory;

    protected $fillable = ['law_id', 'pasal', 'isi'];

    /**
     * Get the name that owns the LawIsi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(LawName::class, 'law_id', 'id');
    }
}
