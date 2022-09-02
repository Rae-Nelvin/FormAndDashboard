<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RekapanEDP extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'questionSectionID',
        'questionSubSectionID',
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
    public function questionSection(): HasMany
    {
        return $this->hasMany(QuestionSection::class);
    }

    /**
     * Get all of the qusetionSubSection for the RekapanEDP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qusetionSubSection(): HasMany
    {
        return $this->hasMany(QuestionSubSection::class);
    }
}
