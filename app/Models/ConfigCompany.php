<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigCompany extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'comp_name',
    ];

    protected $table = 'companies';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dates = [ 'deleted_at' ];

}
