<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CEO;

class ManagementController extends Controller
{
    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeData(Request $request)
    {
        $name = $request->name;
        $company_name = $request->company_name;
        $year = $request->year;
        $company_headquarters = $request->company_headquarters;
        $desc = $request->desc;
        
        $company = new CEO;
        try{
        $company->name = $name;
        $company->company_name = $company_name;
        $company->year = $year;
        $company->company_headquarters = $company_headquarters;
        $company->desc = $desc;
        
        $company->save();
        return response()->json(['message' => 'Information was stored successfully', 'status' => 200],200);
        }
        catch (\Exception $e){
            return response()->json(['message' => 'There was a problem processing the data', 'status' => 422],422);
        }
        
    }
    
    public function retrieveStoredData(Request $request){
        
        $companies = CEO::all();
        return response()->json(['companies'=> $companies], 200);
    }
}
