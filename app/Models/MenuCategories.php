<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategories extends Model
{
    protected $fillable = [
        'category_name',];
    use HasFactory;
}
