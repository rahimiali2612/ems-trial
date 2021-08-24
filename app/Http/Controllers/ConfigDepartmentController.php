<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Http\Request;

class ConfigDepartmentController extends Controller
{
    public function Config_DepartmentList()
    {
        $query = DB::raw("(CASE WHEN users.email_verified_at !='' THEN 'Yes' ELSE 'No' END) as email_verified_at");

        $columns = [
            'id','user_id','users.name','email','userstatus.status_user_id',$query,'users.updated_at','userstatus.name as sname'
        ];
        

        $users = DB::table('users')
                    ->join('userstatus', 'users.status_user_id', 'userstatus.status_user_id')
                    ->select($columns)
                    ->get();
                    
        $breadcrumbs = [['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Configuration"], ['name' => "Department"]];
        
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('configuration.config-department',['users' => $users ,'pageConfigs' => $pageConfigs , 'breadcrumbs' => $breadcrumbs]);
    }
}
