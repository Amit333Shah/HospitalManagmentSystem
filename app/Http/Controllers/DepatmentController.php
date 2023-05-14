<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
class DepatmentController extends Controller
{
   public function showDepartment(){
    $hospital_id=auth()->user()->hospital_type_id;
    $departmentdata=DB::table('departments')->where('hospital_type_id',$hospital_id)->get();
      return view('AdminPanel.create_department',compact('departmentdata'));     
   
   }
   public function createDepartment(Request $request){
    $hospital_id=auth()->user()->hospital_type_id;
    $newDepartment=new Department;
    $newDepartment->department_name=$request->department_name;
    $newDepartment->department_nike_name=$request->department_nike_name;
    $newDepartment->hospital_type_id= $hospital_id;
    $newDepartment->save();
    return redirect('department')->with('message', 'Successfully Create Department');

   
   }
}
