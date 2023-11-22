@extends('master')

@section('title', 'Update | Patient')

@section('content')

    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <h6> Update Patient </h6>
            <form action="{{url('update', $patient->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name", value="{{$patient->name}}">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Number</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Number", name="number" value="{{$patient->number}}">
                </div>
                <button type="submit" class="form-control btn btn-primary">Submit</button>
              </form>

        </div>
        <div class="col-md-3">

        </div>
    </div> 
@endsection