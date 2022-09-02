<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekapanEDP extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'questionSectionID',
        'questionSubSectionID',
        'average'
    ];

    /**
     * Get all of the section for the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function section(): HasMany
    {
        return $this->hasMany(QuestionSection::class);
    }

    /**
     * Get all of the subSection for the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subSection(): HasMany
    {
        return $this->hasMany(QuestionSubSection::class);
    }
}
