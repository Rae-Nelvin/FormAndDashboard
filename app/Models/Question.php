<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'groupID',
        'sectionID',
        'subsectionID',
        'question',
        'questionType',
        'minimumScore',
        'maximumScore'
    ];

    /**
     * Get all of the questionGroup for the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionGroup(): HasMany
    {
        return $this->hasMany(QuestionGroup::class);
    }

    /**
     * Get all of the questionSection for the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionSection(): HasMany
    {
        return $this->hasMany(QuestionSection::class);
    }

    /**
     * Get all of the questionSubSection for the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionSubSection(): HasMany
    {
        return $this->hasMany(QuestionSubSection::class);
    }
}
