<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RekapanEDP extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'questionSectionID',
        'questionSubSectionID',
        'periodeID',
        'average'
    ];

    /**
     * Get the user that owns the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the questionSection for the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function section(): HasOne
    {
        return $this->hasOne(QuestionSection::class);
    }

    /**
     * Get the subsection associated with the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subsection(): HasOne
    {
        return $this->hasOne(QuestionSubSection::class, 'questionSubSectionID', 'question_sub_sections.id');
    }
}
