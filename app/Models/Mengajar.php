<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mengajar extends Model
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
        'mengajarListID',
    ];

    /**
     * Get the user that owns the Mengajar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the mengajarListID associated with the Mengajar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mengajarListID(): HasOne
    {
        return $this->hasOne(MengajarList::class);
    }
}
