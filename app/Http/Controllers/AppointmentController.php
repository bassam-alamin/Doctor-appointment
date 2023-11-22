<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Doctor;
use App\Models\Patient;
use Carbon\Carbon;


class AppointmentController extends Controller
{

    public function view_appointments(){ 
        $data = appointments::all();
        return view('display_appointments', compact('data'));
    }

    public function create_appointment_view()
{
    $doctors = Doctor::all();
    $patients = Patient::all();
    $available_times = $this->generateTimeSlots();

    return view('create_appointment', compact('doctors', 'patients', 'available_times'));
}

private function generateTimeSlots()
{
    $startHour = 8;  // Start at 8 AM
    $endHour = 17;   // End at 5 PM

    $timeSlots = [];

    for ($hour = $startHour; $hour <= $endHour; $hour++) {
        $formattedTime = sprintf('%02d:00', $hour);
        $timeSlots[] = $formattedTime;
    }

    return $timeSlots;
}
    

    public function create_appointment(Request $request){
        $appointment = new Appointments;
        $appointment->is_active=true;
        $appointment->doctor_id=$request->doctor_id;
        $appointment->patient_id=$request->patient_id;
        $appointmentDate = Carbon::createFromFormat('Y-m-d', $request->appointment_date);
        $appointment->time = $request->appointment_time;
        $appointment->medical_issue = $request->medical_issue;

        // Save the Carbon instance to the database
        $appointment->appointment_date= $appointmentDate;
        $appointment->save();
        return redirect()->back();
    }

    public function delete_appointment($id){ 
        $data = appointments::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_appointment_view($id){ 
        $appointment = appointments::find($id);
        $available_times = $this->generateTimeSlots();

        return view('update_appointment_view', compact('appointment','available_times'));
    }

    public function update_appointment(Request $request, $id){ 
        $appointment = appointments::find($id);
        $appointmentDate = Carbon::createFromFormat('Y-m-d', $request->appointment_date);
        $appointment->time = $request->appointment_time;
        $appointment->medical_issue = $request->medical_issue;
        // Save the Carbon instance to the database
        $appointment->appointment_date= $appointmentDate;
        $appointment->save();
        return redirect('appointments');
    }

    # rest APi
    public function all_appointments(Request $request){ 
        $appointment = appointments::all();

        return response()->json([
            'status'=> 200,
            'appointment'=> $appointment
        ]);
    }
}
