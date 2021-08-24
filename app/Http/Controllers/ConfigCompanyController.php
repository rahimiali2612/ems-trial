<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Http\Request;

class ConfigCompanyController extends Controller
{
    public function Config_CompanyList()
    {

        $columns = [
            'id','comp_name'
        ];
        
        $companies = DB::table('companies')
                    ->select($columns)
                    ->get();
                    
        $breadcrumbs = [['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Configuration"], ['name' => "Company"]];
        
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('configuration.config-company',['companies' => $companies ,'pageConfigs' => $pageConfigs , 'breadcrumbs' => $breadcrumbs]);
    }
}
