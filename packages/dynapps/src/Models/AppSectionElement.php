<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSectionElement extends Model
{
    use HasFactory;

    public function AppScreenSection(){
        return $this->belongsTo(AppScreenSection::class,'App_section_id');
    }
}
