<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freeissue extends Model
{
    protected $table = 'freeissues';
    protected $primaryKey = 'id';
    protected $fillable = ['issue_lable', 'type', 'purchase_product', 'free_product', 'purchase_qty', 'free_qty', 'lower_limit', 'upper_limit'];
    use HasFactory;
}
