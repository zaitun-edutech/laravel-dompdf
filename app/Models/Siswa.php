<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Siswa
 * @package App\Models
 * @version July 10, 2021, 4:08 am UTC
 *
 * @property string $nama
 * @property string $alamat
 */
class Siswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'siswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'alamat' => 'required'
    ];

    
}
