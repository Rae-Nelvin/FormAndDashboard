<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'periode'
    ];

    /**
     * Get the PenilaianGPA associated with the PenilaianGPS
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function PenilaianGPA(): HasOne
    {
        return $this->hasOne(PenilaianGPA::class);
    }
}
