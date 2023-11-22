@extends('master')

@section('title', 'Hospital | Patients')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h3>Patients</h3>
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
        <a href="{{url('create_patient_view')}}" class="btn btn-primary form-control" role="button">Onboard Patient</a>
    </div>

</div>
            <table class="table table-dark" style="margin-top:1% ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Delete </th>
                    <th scope="col">Update </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $patient)                        
                  <tr>
                    <th scope="row">{{$patient->id}}</th>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->number}}</td>
                    <td>
                        <form action="{{url('delete',$patient->id)}}" method="POST" enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="form-control btn btn-primary">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{url('update_view',$patient->id)}}" class="btn btn-primary form-control" role="button">Update</a>
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
