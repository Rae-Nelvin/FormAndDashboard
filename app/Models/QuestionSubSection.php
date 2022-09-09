<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class QuestionSubSection extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sectionQuestionID',
        'groupQuestionID',
        'name'
    ];

    /**
     * The questionSection that belong to the QuestionSubSection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questionSection(): BelongsToMany
    {
        return $this->belongsToMany(QuestionSection::class);
    }
}
