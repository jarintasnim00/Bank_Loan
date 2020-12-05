@extends('layouts.app')

@section('content')
<div style="margin-top:0 auto;" class="container-fuild">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    
                Admin Dashboard
                </div>

                <div style="height: 400px; background: #f7f7f7" class="card-body">
                   
             <b>Applicant Details</b> 
   
     
        <button class="btn btn-light"><a  href="{{route('show1')}}">Applied User</a></button> 
        <button class="btn btn-light"><a  href="#">Eligible User</a></button> 
        <button class="btn btn-light"><a  href="#">Not Eligible User</a></button> 
        <br>
        <button class="btn btn-light"><a  href="#">User Verification</a></button> 
        
 
                </div>
            </div>


        </div>
         <div class="col-md-9">
        <div class="card">
                <div class="card-header">
               <h4 style="text-align: center;"><b>Online Bank Loan Application & Verification System</b></h4>
                </div>

                <div style="height: 400px;" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
