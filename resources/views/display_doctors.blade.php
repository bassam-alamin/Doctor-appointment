@extends('master')

@section('title', 'Hospital | Doctors')


@section('content')
<div class="row">
    <div class="col-md-4">
        <h3>Doctors</h3>
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
        <a href="{{url('create_doctor_view')}}" class="btn btn-primary form-control" role="button">Onboard Doctor</a>
    </div>

</div>

<table class="table table-dark" style="margin-top:1%">
    <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor's Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Delete </th>
                    <th scope="col">Update </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $doctor)                        
                  <tr>
                    <th scope="row">{{$doctor->id}}</th>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->specialization}}</td>
                    <td>
                        <form action="{{url('delete/doctor',$doctor->id)}}" method="POST" enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="form-control btn btn-primary">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{url('update/doctor',$doctor->id)}}" class="btn btn-primary form-control" role="button">Update</a>
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