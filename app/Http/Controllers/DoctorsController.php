<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;


class DoctorsController extends Controller
{

    public function view_doctors(){ 
        $data = doctor::all();
        return view('display_doctors', compact('data'));
    }

    public function create_doctor_view(){
        return view('create_doctor');
    }


    public function create_doctor(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        $doctor = new Doctor;
        $doctor->name=$request->name;
        $doctor->phone_number=$request->phone_number;
        $doctor->user_id=$user->id;
        $doctor->specialization=$request->specialization;
        $doctor->country_of_residence=$request->country_of_residence;
        $doctor->save();
        return redirect('doctors');
    }

    public function delete_doctor($id){ 
        $data = doctor::find($id);
        $data->delete();
        return redirect('doctors');
    }
    public function update_doctor_view($id){ 
        $doctor = doctor::find($id);

        return view('update_doctor', compact('doctor'));
    }

    public function update_doctor(Request $request, $id){ 
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->specialization = $request->specialization;
        $doctor->phone_number = $request->phone_number;
        $doctor->country_of_residence = $request->country_of_residence;
        $doctor->save();
        return redirect('doctors');
    }

    # rest APi
    public function view_doctor(Request $request, $name) {
        $patient = Doctor::where('name', $name)->first();
    
        if (!$patient) {
            return response()->json([
                'status' => 404,
                'message' => 'Patient not found',
            ], 404);
        }
    
        return response()->json([
            'status' => 200,
            'patient' => $patient,
        ]);
    }
}
