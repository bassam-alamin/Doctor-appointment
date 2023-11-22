@extends('master')

@section('title', 'Hospital | Appointments')

@section('content')

<div class="row">
    <div class="col-md-4">
        <h3>Appointments</h3>
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
        <a href="{{url('create_appointment_view')}}" class="btn btn-primary form-control" role="button">Create Appointment</a>
    </div>

</div>

            <table class="table table-dark" style="margin-top:1%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctors Name</th>
                    <th scope="col">Patients Name</th>
                    <th scope="col">Active</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Delete </th>
                    <th scope="col">Update </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $appointment)                        
                  <tr>
                    <th scope="row">{{$appointment->id}}</th>
                    <td>{{$appointment->doctor->name}}</td>
                    <td>{{$appointment->patient->name}}</td>
                    <td>{{ $appointment->is_active ? 'true' : 'false' }}</td>
                    <td>{{$appointment->appointment_date}}</td>
                    <td>{{$appointment->time}}</td>
                    <td>
                        <form action="{{url('delete',$appointment->id)}}" method="POST" enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="form-control btn btn-primary">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{url('update/appointment',$appointment->id)}}" class="btn btn-primary form-control" role="button">Update</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
        <div class="col-md-1">

        </div>
    </div>

@endsection