<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jabatan extends Model
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
        'jabatanListID',
    ];

    /**
     * Get the user that owns the jabatan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the jabatanList associated with the jabatan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jabatanList(): HasOne
    {
        return $this->hasOne(JabatanList::class);
    }
}
