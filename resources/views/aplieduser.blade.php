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
                   <table class="table">

		
           <tr>
			<th>Applicant_no</th>
			<th>Type of Personal Loan</th>
			<th>Name of Applicant</th>
			<th>Monthly Income</th>
			<th>Account Number</th>
			<th>Branch</th>
			<th>Details</th>
			
		</tr>
		@php $i =0; @endphp
		@foreach($app as $app)
		@php $i++ @endphp

		<tr>
			
			<td>{{ $i }}</td>
			<td>{{ $app->loan_type }}</td>
		    <td>{{ $app->name }}</td>
		    <td>{{ $app->monthly_income }}</td>
		    <td>{{ $app->bank_connection }}</td>
		    <td>{{ $app->account_maintaining_time }}</td>
		    <td><button><a href="{{ route('show',$app->id)}}">view</a></button></td>
		    <td><button><a href="verify">Verify</a></button></td>
		</tr>
		
	@endforeach

	     </table>
                </div>
            </div>
        </div>
    </div>
</div>


	

</div>

@endsection