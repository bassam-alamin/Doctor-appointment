@extends('master')

@section('title', 'Create | Patient')

@section('content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <form action="{{url('create_patient')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Number</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Number", name="number">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Patient Image</label>
                    <input type="file" class="form-control" id="formGroupExampleInput3" placeholder="Choose File", name="file">
                  </div>
                <button type="submit" class="form-control btn btn-primary">Submit</button>


              </form>

        </div>
        <div class="col-md-3">

        </div>
    </div>

    
@endsection