<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'answerPackageID',
        'questionSectionID',
        'questionSubSectionID',
        'answer'
    ];

    /**
     * Get the answerPackage that owns the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function answerPackage(): BelongsTo
    {
        return $this->belongsTo(AnswerPacakge::class);
    }

    /**
     * Get all of the questionSection for the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionSection(): HasMany
    {
        return $this->hasMany(QuestionSection::class);
    }

    /**
     * Get all of the questionSubSection for the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionSubSection(): HasMany
    {
        return $this->hasMany(QuestionSubSection::class);
    }
}
