<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppModule extends Model
{
    use HasFactory, SoftDeletes;

    public function AppScreens()
    {
       return $this->hasMany(AppScreen::class,'app_module_id');
    }

}
