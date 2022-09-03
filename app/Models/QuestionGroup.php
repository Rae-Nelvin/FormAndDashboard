<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class QuestionGroup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    /**
     * Get all of the section for the QuestionGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function section(): HasOne
    {
        return $this->hasOne(QuestionSection::class, 'groupQuestionID', 'id');
    }
}
