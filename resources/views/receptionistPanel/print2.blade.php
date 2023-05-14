<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
   @media print {
    .card{
        width: 24cm;
        height: 37.7cm;
        margin: 8mm 4mm 8mm 7mm; 
        /* change the margins as you want them to be. */
   } 
}
</style>

<div class="container">

    <div class="row print1">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <center>
                        <img src="{{asset('img/logo.jfif')}}">
                        @if(auth()->user()->hospital_type_id=="1")
                        Grukul of Ayurved (HMS)

                        @elseif(auth()->user()->hospital_type_id=="3")
                        Faculty of Ayurved (HMS)

                        @endif
                    </center>
                    <div class="row pt-3 pl-3 pr-3 pb-0">
                       
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Patient Information</p>
                            <p class="mb-1">Name:- {{$data->First_name}}</p>
                            <p>Acme Inc</p>
                            <p class="mb-1">Age:- {{$data->age}}</p>
                            <p class="mb-1">Mobile No.:- {{$data->phone_no}}</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">Gender: </span>{{$data->gender}}</p>
                            <p class="mb-1"><span class="text-muted">Payment: </span>{{$data->pay_amount}}</p>
                            <p class="mb-1"><span class="text-muted">Date: </span> {{$data->created_at}}</p>
                            <p class=""><span class="text-muted">Room No: </span>{{$data->room_no}}</p>
                        </div>
                    </div>
                    <hr class="my-1">




                    <div class="row p-5" style="height:600px ">
                        <div class="col-md-12">
                          
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" onclick="window.print()">Print this page</button>    <button class="btn btn-success"> <a href="{{route('today_patient_table')}}" style="color:white">Go Patient Table</a></button>



</div>


