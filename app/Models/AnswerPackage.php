<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnswerPackage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'questionGroupID',
        'questionSectionID',
        'questionSubSectionID',
    ];

    /**
     * Get all of the users for the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all of the questionGroup for the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionGroup(): HasMany
    {
        return $this->hasMany(QuestionGroup::class);
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
}
