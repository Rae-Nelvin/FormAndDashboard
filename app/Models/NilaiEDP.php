<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NilaiEDP extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rekapanEDPID',
        'questionSectionID',
        'questionSubSectionID',
        'average',
    ];

    /**
     * Get the section associated with the NilaiEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function section(): HasOne
    {
        return $this->hasOne(QuestionSection::class, 'id', 'questionSectionID');
    }

    /**
     * Get the subSection associated with the NilaiEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subSection(): HasOne
    {
        return $this->hasOne(QuestionSubSection::class, 'id', 'questionSubSectionID');
    }
}
