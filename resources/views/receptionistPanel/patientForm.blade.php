@extends('receptionistPanel.master')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<style>
  .mt-100 {
    margin-top: 70x
  }

  ;
</style>
<div class="card-body">
  <div class="row">
    <div class="col-lg-12">
      <div class="row row-cards">
        <div class="col-12">
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form class="card" method="post" action="{{route('AddPatient')}}">
            @csrf
            
            <div class="card-body">
              <h3 class=" btn btn-primary">Patient Register</h3>
              <div class="page-wrapper">
                <div class="page-body">
                  <div class="container-xl">
                    <div class="row row-cards">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                              <li class="nav-item">
                                <a href="#tabs-home-14" style="width:150px " class="nav-link active"
                                  data-bs-toggle="tab">Home</a>
                              </li>
                              <li class="nav-item">
                                <a href="#tabs-profile-14" style="width:150px " class="nav-link"
                                  data-bs-toggle="tab">Address</a>
                              </li>
                              <li class="nav-item">
                                <a href="#tabs-activity-14" style="width:150px " class="nav-link"
                                  data-bs-toggle="tab">Select Doctor</a>
                              </li>
                              <li class="nav-item">
                                <a href="#tabs-payment-14" style="width:150px " class="nav-link"
                                  data-bs-toggle="tab">Payment </a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="tab-pane fade active show" id="tabs-home-14">
                                <h4 style="color: #206bc4">Patient Details +</h4>
                                <br>
                                <div class="row row-cards">
                                  <div class="col-md-4">
                                    <div class="mb-3">

                                      <label class="form-label">First Name</label>
                                      <input type="text" class="form-control" placeholder="First Name" name="First_name"
                                        required autofocus>
                                        @if ($errors->has('first_name'))
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    @endif                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Middle Name</label>
                                      <input type="text" class="form-control" placeholder="Middle Name" name="Middle_name"
                                        >
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Last Name</label>
                                      <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Email address</label>
                                      <input type="email" class="form-control" placeholder="Email" name="email" required
                                        autofocus>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Phone NO</label>
                                      <input type="text" class="form-control" placeholder="Company" name="phone_no"
                                        required autofocus>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Aadhar No</label>
                                      <input type="text" class="form-control" placeholder="Aadhar No" name="aadhar"
                                        >
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Symptoms</label>
                                      <input type="text" class="form-control" placeholder="symptoms" name="disease"
                                        required autofocus>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Gender</label>
                                      <select class="form-control form-select" name="gender" required autofocus>
                                        <option value="" disabled selected>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">Age</label>
                                      <input type="text" class="form-control" placeholder="Aadhar No" name="age"
                                        required autofocus>
                                    </div>
                                  </div>
                                  


                                </div>
                              </div>
                              <div class="tab-pane fade" id="tabs-profile-14">
                                <h4 style="color: #206bc4">Address +</h4><br>
                                <div class="row row-cards">
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                      <label class="form-label">Address</label>
                                      <input type="text" class="form-control" placeholder="Home Address" name="address"
                                        >
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                      <label class="form-label">City</label>
                                      <input type="text" class="form-control" placeholder="City" name="city" 
                                        >
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                      <label class="form-label">Postal Code</label>
                                      <input type="test" class="form-control" name="Postal_Code">
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                      <label class="form-label">State</label>
                                      <input type="test" class="form-control" name="state">
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                    <div class="mb-3">
                                      <label class="form-label">Country</label>
                                      <select class="form-control form-select" name="country" required autofocus>
                                        <option value="india">India</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="tabs-activity-14">
                                <h4 style="color: #206bc4">Doctor Reference+</h4><br>
                                <div class="row row-cards">
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Referal Type</label>
                                      <select class="form-control form-select" id="Referal_type" name="Referal_type"
                                        required autofocus>
                                        <option value="opd">OPD</option>
                                        



                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Select Department</label>
                                      <select class="form-control form-select" name="department" required autofocus>
                                        <option value="" disabled selected>Select</option>
                                        @foreach ($hospital_departments as $department )
                                          
                                        <option value="{{$department->id}}">{{$department->department_name}}</option>
                                        @endforeach
                                       


                                      </select>
                                    </div>
                                  </div>
                                  
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Select Doctor</label>
                                      <select class="form-control form-select" id="choices-multiple-remove-button"
                                        placeholder="select doctor" name="doctor_id[]" required autofocus multiple>
                                        @foreach ($doctor_data as $doctors )
                                        <option value="{{$doctors->id}}">{{$doctors->name}} ({{$doctors->specilist}})</option>
                                       
                                        @endforeach


                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Room No.</label>
                                      <input type="test" class="form-control" name="room_no" required
                                        autofocus>

                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Appointment Time</label>
                                      <input type="test" class="form-control" name="appointment_time" required
                                        autofocus>

                                    </div>
                                  </div>

                                </div>

                              </div>
                              <div class="tab-pane fade" id="tabs-payment-14">
                                <h4 style="color: #206bc4">Payment Details+</h4><br>
                                <div class="row row-cards">
                                  <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Payment</label>
                                      <input type="text" class="form-control" placeholder="Enter payment Amount"
                                        name="pay_amount" required autofocus>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label">Status</label>
                                      <input type="text" class="form-control" name="status" required autofocus>
                                    </div>
                                  </div>



                                </div>

                                <div class="card-footer text-end">
                                  <button type="submit" class="btn btn-primary">Register Patient</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>




            </div>

          </form>
        </div>

      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {

    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
      removeItemButton: true,
      maxItemCount: 5,
      searchResultLimit: 5,
      renderChoiceLimit: 5
    });

    $('#Referal_type').on('change', function () {
      if (this.value == 'ipd') {
        $("#for1").show();
      }
      else {
        $("#for1").hide();
      }
    });


  });
</script>



  @endsection