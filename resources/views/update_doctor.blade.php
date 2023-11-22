@extends('master')

@section('title', 'Update | Patient')

@section('content')

    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <h6> Update Doctor </h6>
            <form action="{{url('update/doctor', $doctor->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name", value="{{$doctor->name}}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Phone Number</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Number", name="phone_number" value="{{$doctor->phone_number}}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Country Of Residence</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Number", name="country_of_residence" value="{{$doctor->country_of_residence}}">
                  </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Specialization</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Number", name="specialization" value="{{$doctor->specialization}}">
                  </div>
                <button type="submit" class="form-control btn btn-primary">Submit</button>
              </form>

        </div>
        <div class="col-md-3">

        </div>
    </div> 
@endsection