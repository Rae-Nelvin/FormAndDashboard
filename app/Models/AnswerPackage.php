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
        'isDone',
        'periodeID'
    ];

    /**
     * Get the dinilai associated with the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dinilai(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'dinilaiID');
    }

    /**
     * Get the penilai associated with the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penilai(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'penilaiID');
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

    /**
     * Get the answer associated with the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answer(): HasOne
    {
        return $this->hasOne(Answer::class, 'answerPackageID', 'id');
    }

    /**
     * Get the rekapanEDP associated with the AnswerPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rekapanEDP(): HasOne
    {
        return $this->hasOne(RekapanEDP::class, 'paketJawabanID', 'id');
    }
}
