<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class HomeController extends Controller
{

    public function welcome(){
        return view('welcome');
    }


    public function index(){
        return view('home');
    }

    public function upload(Request $request){
        $patient = new Patient;
        $patient->name=$request->name;
        $patient->number=$request->number;
        $image = $request->file;
        if ($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('patient', $imagename);
            $patient->image_url=$imagename;
        }
        $patient->save();
        return redirect()->back();
    }
    public function view(){ 
        $data = patient::all();
        return view('display_patients', compact('data'));
    }

    public function delete($id){ 
        $data = patient::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function search(Request $request){ 
        $search = $request->search;

        $data = patient::where('name', 'Like', '%'.$search.'%')->get();
        return view('display_patients', compact('data'));
    }
    public function update_view($id){ 
        $patient = patient::find($id);

        return view('update_patients', compact('patient'));
    }

    public function update_patient(Request $request, $id){ 
        $patient = patient::find($id);
        $patient->name = $request->name;
        $patient->number = $request->number;
        $patient->save();
        return redirect()->action([HomeController::class, 'view']);
    }
    public function view_patient(Request $request, $patient_name){ 
        $patient = patient::find($patient_name);

        return response()->json([
            'status'=> 200,
            'patients'=> $patient
        ]);
    }
}
