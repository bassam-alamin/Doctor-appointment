@extends('master')

@section('title', 'Create | Appointment')

@section('content')

<div class="row">
    <div class="col-md-3">

    </div>

    <div class="col-md-6">


<form action="{{url('create/appointment')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Doctor</label>
      <select class="form-control" id="doctor_id" name="doctor_id">
        <option value="">Select Doctor</option>
        @foreach ($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Patient</label>
        <select class="form-control" id="patient_id" name="patient_id">
            <option value="">Select Patient</option>
            @foreach ($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Appointment Date</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Choose a date", name="appointment_date">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Appointment Time</label>
        <select class="form-control" id="patient_id" name="appointment_time">
            <option value="">Select Time slot</option>
            @foreach ($available_times as $available_time)
                <option value="{{ $available_time }}">{{ $available_time }}</option>
            @endforeach
        </select>    
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Medical Issue</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Medical Issue", name="medical_issue">
      </div>
    <button type="submit" class="form-control btn btn-primary">Submit</button>


  </form>
    </div>

    <div class="col-md-3">

    </div>


  @endsection