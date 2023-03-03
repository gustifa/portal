<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageHomeItem extends Model
{
    use HasFactory;
    protected $table = 'page_home_item';
	protected $primaryKey = 'id';
    protected $guarded = [];
}
