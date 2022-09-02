<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnswerPackage extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'questionGroupID',
        'periodeID',
        'isDone'
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
     * Get the periode associated with the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periode(): HasOne
    {
        return $this->hasOne(Periode::class);
    }
}
