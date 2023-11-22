@extends('master')

@section('title', 'Create | Patient')

@section('content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <form action="{{url('create_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name" name="name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
                  </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Phone Number</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number", name="phone_number">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Country of Residence</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number", name="country_of_residence">
                  </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Specialization</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Specialization", name="specialization">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password", name="password">
                  </div>
                <button type="submit" class="form-control btn btn-primary">Submit</button>


              </form>

        </div>
        <div class="col-md-3">

        </div>
    </div>

    
@endsection