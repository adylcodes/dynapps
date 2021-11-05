<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppScreenSection extends Model
{
    use HasFactory, SoftDeletes;

    public function AppScreen(){
        return $this->belongsTo(AppScreen::class,'app_screen_id');
    }

    public function AppSectionContents(){
        return $this->hasMany(AppSectionContent::class,'app_section_id');
    }

    public function AppSectionElements(){
        return $this->hasMany(AppSectionElement::class,'app_section_id');
    }
}
