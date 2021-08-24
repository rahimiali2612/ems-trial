<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Http\Request;

class ConfigUnitBaseController extends Controller
{
    public function Config_UnitBaseList()
    {
                    
        $breadcrumbs = [['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Configuration"], ['name' => "Unit Base"]];
        
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('configuration.config-unitbase',['pageConfigs' => $pageConfigs , 'breadcrumbs' => $breadcrumbs]);
    }
}
