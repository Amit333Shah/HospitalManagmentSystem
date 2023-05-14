@extends('AdminPanel.master')

@section('content')
<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Doctor Registration
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">   
        <div class="col-lg-12">
          <div class="row row-cards">
            <div class="col-12">
              <form class="card" method="post" action="{{route('addProfileDoctor')}}">
                @csrf
                <div class="card-body">
                  <h3 class="card-title mb-3" style="color:#206bc4">Doctor Profile <b> +</b></h3>
                  <div class="row row-cards">
                    <input type="text" class="form-control" placeholder="Email" name="user_id" value="{{$doctor_user_detail->id}}" style="display:none" required autofocus >

                    <div class="col-md-4">
                      <div class="mb-3">
                        
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter Name" value="{{$doctor_user_detail->name}}" readonly autofocus>
                      </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$doctor_user_detail->email}}" readonly required autofocus>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <input type="text" class="form-control" placeholder="gender"  name="gender" required autofocus>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Mobile No.</label>
                        <input type="text" class="form-control"  name="mobile" placeholder="Mobile No." required autofocus>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Select Department</label>
                        <select class="form-control form-select" name="department" required autofocus>
                          <option value="" disabled selected>Select</option>
                          @foreach ($alldepatment as $department)
                          <option value="{{$department->id}}">{{$department->department_name}}</option>

                          @endforeach
                          


                        </select>                     
                       </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Specilist</label>
                        <input type="text" class="form-control" placeholder="specilist" name="specilist" required autofocus>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Experience</label>
                        <input type="text" class="form-control" placeholder="Enter Experience" name="experience" required autofocus>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Qualification</label>
                        <input type="text" class="form-control" placeholder="Enter Qualification" name="qualification" required autofocus>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" name="address" required autofocus>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="City" name="city">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Postal Code</label>
                        <input type="test" class="form-control" placeholder="Enter Postal Code" name="pincode">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="form-label">State</label>
                        <input type="test" class="form-control" placeholder="State" name="state">

                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3 mb-0">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" placeholder="State" name="image">

                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary">Upload Profile</button>
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection