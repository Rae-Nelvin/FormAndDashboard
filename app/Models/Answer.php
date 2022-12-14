<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'questionID',
        'answer'
    ];

    /**
     * Get the section associated with the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function section(): HasOne
    {
        return $this->hasOne(QuestionSection::class, 'id', 'questionSectionID');
    }

    /**
     * Get the subSection associated with the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subSection(): HasOne
    {
        return $this->hasOne(QuestionSubSection::class, 'id', 'questionSubSectionID');
    }

    /**
     * Get the question associated with the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function question(): HasOne
    {
        return $this->hasOne(Question::class, 'id', 'questionID');
    }
}
