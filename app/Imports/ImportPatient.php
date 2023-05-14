<?php

namespace App\Imports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ImportPatient implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $auth_id=auth()->user()->hospital_type_id;
        $nike_name=$row[5];
        $deprtment=DB::table('departments')->where('department_nike_name',$nike_name)->get('id');
        $date="2023-01-21";
        // $date_data=(date("Y-m-d H:i:s",strtotime($date)));
        // exit;
        if(count($deprtment)==0){
            $deprtment_id="NULL";
            return new Patient([
                'appliaction_id' =>"GHM".$row[0],
                'First_name' => $row[1],
                'address' => $row[2],
                'age' => $row[3],
                'gender' => $row[4],
                'department' => $deprtment_id,
                'created_at'=>date("Y-m-d H:i:s",strtotime($date)),
                'update_at'=>$row[7],
                'Middle_name' => "null",
                'last_name' =>"null",
                'email' => "null",
                'aadhar' => "null",
                'phone_no' => "null",
                'disease' => "null",
                'city' => "null",
                'state' => "null",
                'Postal_code' => "null",
                'country' => "india",
                'Referal_type' =>"null",
                'doctor_id' => "null",
                'appointment_time' => "null",
                'pay_amount' => "null",
                'hospital_type' => $auth_id,
                'status' => "null",
                'room_no' =>"null",
    
            ]);

        }
        else{
        $deprtment_id= $deprtment[0]->id;
        return new Patient([
            'appliaction_id' => "GHM".$row[0],
            'First_name' => $row[1],
            'address' => $row[2],
            'age' => $row[3],
            'gender' => $row[4],
            'department' => $deprtment_id,
            'created_at'=>date("Y-m-d H:i:s",strtotime($date)),
            'update_at'=>$row[7],
            'Middle_name' => "null",
            'last_name' =>"null",
            'email' => "null",
            'aadhar' => "null",
            'phone_no' => "null",
            'disease' => "null",
            'city' => "null",
            'state' => "null",
            'Postal_code' => "null",
            'country' => "india",
            'Referal_type' =>"null",
            'doctor_id' => "null",
            'appointment_time' => "null",
            'pay_amount' => "null",
            'hospital_type' => $auth_id,
            'status' => "null",
            'room_no' =>"null",

        ]);
    }
    }
}
