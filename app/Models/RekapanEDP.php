<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RekapanEDP extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'paketJawabanID',
    ];

    /**
     * Get all of the nilaiEDP for the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nilaiEDP(): HasMany
    {
        return $this->hasMany(NilaiEDP::class, 'id', 'rekapanEDPID');
    }
}
