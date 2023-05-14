@extends('AdminPanel.master')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="page-wrapper">
    <!-- Page header -->
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
         <div class="col-12">
            <form method="POST" action="{{ route('registerPost') }}">
                @csrf
              <div class="card-header">
                <h4 class="card-title">Register</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  
                <div class="col-xl-4">
                  <div class="row">
                    <div class="col-md-6 col-xl-12" style="margin-left:500px ">
                     
                      {{-- <label class="form-label">Form fieldset</label> --}}
                      <fieldset class="form-fieldset ">
                        <div class="mb-3">
                          <label class="form-label required">Name</label>
                          <input type="text" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Role</label>
                          <select class="form-control form-select" name="role_id" required autofocus>
                            <option value=""   disabled selected>Select</option>
                            @foreach ( $role as $roledata )
                            <option value="{{$roledata['id']}}"  style="color: black">{{$roledata["role"]}}</option>
        
                            @endforeach
                          </select>
                          {{-- <input type="text" class="form-control"  autocomplete="off"/> --}}
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Email</label>
                          <input type="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" type="password"
                          name="password"
                          required autocomplete="new-password"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" type="password"
                          type="password"
                          name="password_confirmation" required />
                        </div>
                       <div class="card-footer text-start">
              <div class="d-flex">
                <button type="submit" class="btn btn-primary ms-auto">Submit</button>
              </div>
            </div>
                      
                      </fieldset>
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
@endsection