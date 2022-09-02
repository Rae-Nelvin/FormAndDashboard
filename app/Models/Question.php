<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'minimumScore',
        'maximumScore'
    ];

    /**
     * The questionGroup that belong to the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questionGroup(): BelongsToMany
    {
        return $this->belongsToMany(QuestionGroup::class);
    }

    /**
     * The questionSection that belong to the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questionSection(): BelongsToMany
    {
        return $this->belongsToMany(QuestionSection::class);
    }

    /**
     * The questionSubSection that belong to the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questionSubSection(): BelongsToMany
    {
        return $this->belongsToMany(QuestionSubSection::class);
    }
}
