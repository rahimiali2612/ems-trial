<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Http\Request;
use App\Models\ConfigCompany;

class ConfigCompanyController extends Controller
{
    public function index()
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

    public function store(Request $request)
    {
        $request->validate([
            'comp_name' => 'required',
        ]);
    
        DB::beginTransaction();
            $Company = ConfigCompany::create([
                'comp_name' => $request['comp_name']
            ]);

            $Company->save();
            DB::commit();
     
        return redirect()->route('con-companies.index')->with('success','Company created successfully.');
    }
}
