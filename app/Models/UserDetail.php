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
        return $this->hasOne(PosisiList::class, 'id', 'posisiID');
    }

    /**
     * Get the golongan associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function golongan(): HasOne
    {
        return $this->hasOne(GolonganList::class, 'id', 'golonganID');
    }

    /**
     * Get the unit associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit(): HasOne
    {
        return $this->hasOne(UnitList::class, 'id', 'unitID');
    }

    /**
     * Get the kelas associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kelas(): HasOne
    {
        return $this->hasOne(KelasList::class, 'id', 'kelasID');
    }

    /**
     * Get the mataPelajaran associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mataPelajaran(): HasOne
    {
        return $this->hasOne(MataPelajaranList::class, 'id', 'mataPelajaranID');
    }
}
