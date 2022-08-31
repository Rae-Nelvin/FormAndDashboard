<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PenilaianGPS extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'penilaianGPAID',
        'GPS',
        'periodeID'
    ];

    /**
     * Get the PenilaianGPA associated with the PenilaianGPS
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function PenilaianGPA(): BelongsTo
    {
        return $this->belongsTo(PenilaianGPA::class);
    }

    /**
     * Get the periode associated with the PenilaianGPS
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periode(): HasOne
    {
        return $this->hasOne(Periode::class);
    }
}
