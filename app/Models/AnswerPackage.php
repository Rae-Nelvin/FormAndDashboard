<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AnswerPackage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dinilaiID',
        'penilaiID',
        'questionGroupID',
        'isDone'
    ];

    /**
     * Get all of the user for the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the questionGroup associated with the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function questionGroup(): HasOne
    {
        return $this->hasOne(QuestionGroup::class, 'id', 'questionGroupID');
    }
}
