<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Member
 * @package App\Models
 * @version July 10, 2021, 4:04 am UTC
 *
 * @property string $name
 * @property string $email
 */
class Member extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'members';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
