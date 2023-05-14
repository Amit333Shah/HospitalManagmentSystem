<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use App\Models\DoctorProfile;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportPatient;
use DataTables;



class PatientController extends Controller
{
    function addPatient(Request $request){
        $hospitai_id=auth()->user()->hospital_type_id;
        $request->validate([
            'First_name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $addPatient=New Patient;
        $addPatient->appliaction_id="kuchbhi";
        $addPatient->First_name=$request->First_name;
        if($request->Middle_name==""){
            $addPatient->Middle_name="null";
        }
        else{
        $addPatient->Middle_name=$request->Middle_name;
        }
        if($request->last_name==""){
            $addPatient->last_name="null";
        }
        else{
        $addPatient->last_name=$request->last_name;
        }
        $addPatient->hospital_type=$hospitai_id;
        $addPatient->email=$request->email;
        $addPatient->age=$request->age;
        $addPatient->gender=$request->gender;
        // $addPatient->aadhar=$request->aadhar;
        if($request->aadhar==""){
            $addPatient->aadhar="null";
        }
        else{
            $addPatient->aadhar=$request->aadhar;
        }
        $addPatient->phone_no=$request->phone_no;   
        $addPatient->disease=$request->disease;
        if($request->address==""){
            $addPatient->address="null";
        }
        else{
        $addPatient->address=$request->address;
        }
        if($request->city==""){
            $addPatient->city="null";
        }
        else{
            $addPatient->city=$request->city;
        }
        if($request->state==""){
            $addPatient->state="null";
        }
        else{
            $addPatient->state=$request->state;
        }
        if($request->Postal_Code ==""){
            $addPatient->Postal_Code="null";
        }
        else{
            $addPatient->Postal_Code=$request->Postal_Code;
        }
        $addPatient->country=$request->country;
        // if($request->ipd_bed==""){
        //     $addPatient->ipd_bed="null";
        // }
        // else{
        //     $addPatient->ipd_bed=$request->ipd_bed;
        // }
        // if($request->ipd_room==""){
        //     $addPatient->ipd_room="null";
        // }
        // else{
        //     $addPatient->ipd_room=$request->ipd_room;
        // }
        // if($request->wardtype==""){
        //     $addPatient->wardtype="null";
        // }
        // else{
        //     $addPatient->wardtype=$request->wardtype;
        // }
        $addPatient->Referal_type=$request->Referal_type;
        $addPatient->department=$request->department;
        $addPatient->appointment_time=$request->appointment_time;
        $addPatient->room_no=$request->room_no;

        $addPatient->doctor_id=json_encode($request->doctor_id);
        $addPatient->pay_amount=$request->pay_amount;
        $addPatient->status=$request->status;
        $addPatient->save();
        $app_id=Patient::findOrFail($addPatient->id);
        $app_id->appliaction_id="HM".$addPatient->id;
        $app_id->update();
        // return Redirect('pform')->with('message', 'Successfully Patient Admit');
        $printPatient=DB::table('patients')->where('appliaction_id',"HM".$addPatient->id)->get();
        // print_r($printPatient);
        return view('receptionistPanel.print',compact('printPatient'));
    }
    public function patientForm(){
        $hospital_id=auth()->user()->hospital_type_id;
        $doctor_data=DB::table('doctor_profiles')->where('hospital_id', $hospital_id)->get();
        $hospital_departments=DB::table('departments')->where('hospital_type_id',$hospital_id)->get();

        return view('receptionistPanel.patientForm',compact('doctor_data','hospital_departments'));
    }

    public function today_patient_table(){
            $auth_hospital_type_id=auth()->user()->hospital_type_id;
            $todayPatients=DB::table('patients')->where('hospital_type',$auth_hospital_type_id)->whereDate('created_at', Carbon::today())->get();
            return view('receptionistPanel.todayPatient',compact('todayPatients'));
        }
    
        public function all_patient_table(Request $request){
            $auth_hospital_type_id=auth()->user()->hospital_type_id;
            $allPatients=DB::table('patients')->where('hospital_type',$auth_hospital_type_id)->get();
            return view('receptionistPanel.allPatients',compact('allPatients'));
            // if ($request->ajax()) {
            //     $data=DB::table('patients')->where('hospital_type',$auth_hospital_type_id)->get();
            //     return Datatables::of($data)->addIndexColumn()
            //         ->addColumn('action', function($row){
            //             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
            //             return $btn;
            //         })
            //         ->rawColumns(['action'])
            //         ->make(true);
            // }
    
            return view('receptionistPanel.allPatients');
        }
         
        
        public function print($id){
          $data=Patient::find($id);
        //   print_r($printPatient);
          return view('receptionistPanel.print2',compact('data'));
        }

 
    public function importView(Request $request){
        return view('importFile');
    }
 
    public function import(Request $request){
        Excel::import(new ImportPatient,
                      $request->file('file')->store('files'));
      
        return redirect()->back();
    }
 
    


}
