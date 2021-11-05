<?php
namespace Adylcodes\Dynapps;


use App\Models\AppModule;

class Dynapps
{
    public function makeModule($module_name,$withScreen=false, $screen=[]){
        $module=new AppModule();
        $module->name=$module_name;
        $module->is_active=$module_name;
        $module->save();
        if($withScreen){

        }else{

        }
    }

    public function makeScreen(){

    }
}
