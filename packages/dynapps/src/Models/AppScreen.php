<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppScreen extends Model
{
    use HasFactory, SoftDeletes;

    public function AppModule()
    {
        return $this->belongsTo(AppModule::class,'app_module_id');
    }

    public function AppScreenSections(){
        return $this->hasMany(AppScreenSection::class, 'app_screen_id');
    }
}
