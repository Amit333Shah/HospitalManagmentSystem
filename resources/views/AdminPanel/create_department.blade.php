@extends('AdminPanel.master')

@section('content')
<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Create Doctor Department
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
              <form class="card" method="post" action="{{route('create_Department')}}">
                @csrf
                <div class="card-body">
                  <h3 class="card-title mb-3" style="color:#206bc4">Doctor Department <b> +</b></h3>
                  <div class="row row-cards">

                    <div class="col-md-3">
                      <div class="mb-3">
                        
                        <label class="form-label">Depatment Name</label>
                        <input type="text" class="form-control" name="department_name"  placeholder="Enter Name"  required autofocus>
                      </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>   
                    <div class="col-md-3">
                      <div class="mb-3">
                        
                        <label class="form-label">Depatment Nike name</label>
                        <input type="text" class="form-control" name="department_nike_name"  placeholder="Enter Name"  required autofocus>
                      </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                          
                          
                        </div>
                    </div>                  
                     
                    <div class="col-md-4">
                        <div class="mb-3">
                          
                          <label class="form-label">Depatment Name</label>
                          <div class="table-responsive" style="border: 1px solid rgb(184, 181, 181)">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                              <thead style="">
                                <tr>
                                  <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                      <polyline points="6 15 12 9 18 15" />
                                    </svg>
                                  </th>
                                  <th>Department Name</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
              
                                @foreach ($departmentdata as $department )
              
                                <tr>
                                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                                  </td>
                                  <td><span class="text-muted">{{$department->department_name}}</span></td>
                                  
              
                                  <td class="text-start">
                                    <span class="dropdown">
                                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                        data-bs-toggle="dropdown">Actions</button>
                                      <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                          Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                          Delete
                                        </a>
                                      </div>
                                    </span>
                                  </td>
                                </tr>
                                @endforeach
                               
                              </tbody>
                            </table>
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
  </div>


  @endsection