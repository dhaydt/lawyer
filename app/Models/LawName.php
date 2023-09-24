<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LawName extends Model
{
    use HasFactory;

    protected $fillable = ['nomoer', 'tahun', 'tentang', 'status', 'keterangan'];

    /**
     * Get all of the isi for the LawName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function isi(): HasMany
    {
        return $this->hasMany(LawIsi::class, 'law_id', 'id');
    }
}
