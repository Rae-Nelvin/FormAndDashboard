<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'answerPackageID',
        'questionSectionID',
        'questionSubSectionID',
        'questionID',
        'answer',
    ];

    /**
     * Get the answerPackage that owns the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function answerPackage(): BelongsTo
    {
        return $this->belongsTo(AnswerPackage::class);
    }

    /**
     * Get all of the questionSection for the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionSection(): HasMany
    {
        return $this->hasMany(QuestionSection::class);
    }

    /**
     * Get all of the questionSubSection for the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionSubSection(): HasMany
    {
        return $this->hasMany(QuestionSubSection::class);
    }

    /**
     * Get the question associated with the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function question(): HasOne
    {
        return $this->hasOne(Question::class);
    }
}
