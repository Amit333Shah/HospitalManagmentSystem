<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorProfile;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DoctorProfileController extends Controller
{
    public function adminPanleview(){
         return view('AdminPanel.index');

    }
    public function doctorForm($id){
        $doctor_user_detail=User::find($id);
        $hospital_id=auth()->user()->hospital_type_id;
        $alldepatment=DB::table('departments')->where('hospital_type_id',$hospital_id)->get();
        return view('AdminPanel.doctorProfile',compact('doctor_user_detail','alldepatment'));
    }

    public function adddoctorProfile (Request $request){
        $hospital_id=auth()->user()->hospital_type_id;
        $add_dcotor=new DoctorProfile;
        $add_dcotor->user_id=$request->user_id;
        $add_dcotor->name=$request->name;
        $add_dcotor->email=$request->email;
        $add_dcotor->gender=$request->gender;
        $add_dcotor->specilist=$request->specilist;
        $add_dcotor->address=$request->address;
        $add_dcotor->state=$request->state;
        $add_dcotor->city=$request->city;
        $add_dcotor->pincode=$request->pincode;
        $add_dcotor->experience=$request->experience;        
        $add_dcotor->mobile=$request->mobile;
        $add_dcotor->hospital_id=$hospital_id;
        $add_dcotor->department_id=$request->department_id;	
        $add_dcotor->image="null";
        $add_dcotor->qualification=$request->qualification;
        $add_dcotor->save();
        return Redirect('adminpanel/index');
    }

    public function show_all_doctor(){
        $hospital_id=auth()->user()->hospital_type_id;
        $alldoctors=DB::table('doctor_profiles')->where('hospital_id',$hospital_id)->get();
        // print_r($alldoctors);
        return view('AdminPanel.doctortable',compact('alldoctors'));
    }

    public function doctor_user_table(){
        $doctor_users=  DB::table('users')->where('role_id','2')->get();
        return view('AdminPanel.doctor_users_Table',compact('doctor_users'));
    }
}
