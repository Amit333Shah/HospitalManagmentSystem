@extends('receptionistPanel.master')
@section('content')
<?php
use App\Models\DoctorProfile;
use Illuminate\Support\Facades\DB;

?>
<div class="page-wrapper">
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Invoices</h3>
            </div>
            <div class="card-body border-bottom py-3">
              <div class="d-flex">
                <div class="text-muted">
                  Show
                  <div class="mx-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" value="8" size="3"
                      aria-label="Invoices count">
                  </div>
                  entries
                </div>
                <div class="ms-auto text-muted">
                  Search:
                  <div class="ms-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive" style="height: 400px">
              <table class="table card-table table-vcenter text-nowrap datatable" style="height: 300px">
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
                    <th>Patient Name</th>
                    <th>Age</th>
                    <!--<th>Appliaction No</th>-->
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Department Name</th>
                    <th>Date</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allPatients as $patient )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                  
                    <td><span class="text-muted">{{$patient->First_name}}</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">{{$patient->age}}</a></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">{{$patient->address}}</a></td>

                    <td>
                      {{$patient->gender}}
                    </td>
                    <td>
                        @php
                       
                             
                            $dep_id=json_decode($patient->department);
                            // print_r($doctor_id);
                             $department_name=DB::table('departments')->where('id',$dep_id)->get('department_name');
                                // print_r();
                                if(isset($department_name[0]->department_name)){
                                  print_r($department_name[0]->department_name);
                               }
                               else{
                                print_r("Not Found");
                             }
                           
                            

                        @endphp
                    </td>
                     <td>
                      {{$patient->created_at}}
                    </td>

                    <td class="text-start">
                      <span class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                          data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">
                            Print OPD Receipt
                          </a>
                          <a class="dropdown-item" href="#">
                            View Profile
                          </a>
                        </div>
                      </span>
                    </td>
                   
                  </tr>
                
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
              <ul class="pagination m-0 ms-auto">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <polyline points="15 6 9 12 15 18" />
                    </svg>
                    prev
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <polyline points="9 6 15 12 9 18" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection