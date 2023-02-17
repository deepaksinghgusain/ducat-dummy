<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 * @package App\Models
 */
class Team extends Model
{
    /**
     * @var string
     */
    public $table = "teams";
    /**
     * @var string
     */
    public $primaryKey = "id";
    /**
     * @var bool
     */
    public $timestamps = true;
    /**
     * @var array
     */
    public $fillable = [
        'user_id',
        'name',
    ];
    /**
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:teams'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany(User::class);
    }
}
