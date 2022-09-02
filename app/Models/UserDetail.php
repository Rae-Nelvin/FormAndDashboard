<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserDetail extends Model
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
        'NIY',
        'posisiID',
        'golonganID',
        'unitID',
        'kelasID',
        'mataPelajaranID',
        'avatar'
    ];

    /**
     * Get the user associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the posisi associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function posisi(): HasOne
    {
        return $this->hasOne(PosisiList::class);
    }

    /**
     * Get the golongan associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function golongan(): HasOne
    {
        return $this->hasOne(GolonganList::class);
    }

    /**
     * Get the unit associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit(): HasOne
    {
        return $this->hasOne(UnitList::class);
    }

    /**
     * Get all of the kelas for the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kelas(): HasMany
    {
        return $this->hasMany(KelasList::class);
    }

    /**
     * Get the mataPelajaran associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mataPelajaran(): HasOne
    {
        return $this->hasOne(MataPelajaranList::class);
    }
}
