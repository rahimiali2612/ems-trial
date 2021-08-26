<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Http\Request;
use App\Models\ConfigCompany;
use UxWeb\SweetAlert\SweetAlert;

class ConfigCompanyController extends Controller
{
    public function index()
    {

        $columns = [
            'id','comp_name'
        ];
        
        $companies = DB::table('companies')
                    ->select($columns)
                    ->where('deleted_at',null)
                    ->get();
                    
        $breadcrumbs = [['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Configuration"], ['name' => "Company"]];
        
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        SweetAlert::message('Robots are working!');

        return view('configuration.config-company',['companies' => $companies ,'pageConfigs' => $pageConfigs , 'breadcrumbs' => $breadcrumbs]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'comp_name' => 'required',
        ]);
    
        try {
                
            DB::beginTransaction();
            $Company = ConfigCompany::create([
                'comp_name' => $request['comp_name']
            ]);

            $Company->save();
            DB::commit();

            return redirect()->back()
                ->with('success', 'Created successfully.');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }  
    }

    public function destroy($id)
    {
        $Company = ConfigCompany::find( $id );
        $Company->delete();
    
        return redirect()->back()->with('success', 'Data Deleted.');
    }

}
