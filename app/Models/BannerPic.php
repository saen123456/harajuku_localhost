<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerPic extends Model
{
    use HasFactory;
    protected $table = 'tbl_Banner';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image_name',
        'image_path',
     ];

}
