<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class QuestionSection extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'groupQuestionID',
        'name'
    ];

    /**
     * The questionGroup that belong to the QuestionSection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questionGroup(): BelongsToMany
    {
        return $this->belongsToMany(QuestionGroup::class);
    }
}
