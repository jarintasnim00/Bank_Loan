@extends('mylayout.exten')

@section('content')

<div class="container">
	<table class="table">

		@php $i =0; @endphp
		@foreach($app as $app)
		@php $i++ @endphp
            
            <tr>
            	<td></td>
            	<td></td>
			</tr>

		<tr>
			<td>Applicant_no</td>
			<td>{{ $i }}</td>
		</tr>
		<tr>
			<td>Type of Personal Loan</td>
			<td>{{ $app->loan_type }}</td>
		</tr>
		<tr>
			<td>Title</td>
			<td>{{ $app->title }}</td>
		</tr>
		<tr>
			<td>Name of Applicant</td>
			<td>{{ $app->name }}</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			
			<td>{{ $app->dob }}</td>
		</tr>
		<tr>
			<td>Gender</td>
		<td>{{ $app->gender }}</td>
		</tr>
		<tr>
			<td>Nationality</td>
			<td>{{ $app->nationality }}</td>
		</tr>
		<tr>
			<td>Resident_status</td>
			<td>{{ $app->residentstatus }}</td>
		</tr>
		<tr>
			<td>Time at current address</td>
			<td>{{ $app->current_time }}</td>
		</tr>
		<tr>
			<td>Phone_number</td>
			<td>{{ $app->phone_number }}</td>
		</tr>
		<tr>
			<td>Where are you currently employed?</td>
			<td>{{ $app->employed }}</td>
		</tr>
		<tr>
			<td>Type of employe you work for?</td>
			<td>{{ $app->employee_type }}</td>
		</tr>
		<tr>
			<td>Time with current employer</td>
			<td>{{ $app->employer_current_time }}</td>
		</tr>
		<tr>
			<td>Total length of employement</td>
			<td>{{ $app->employement_length }}</td>
		</tr>
		<tr>
			<td>Your gross monthly income</td>
			<td>{{ $app->monthly_income }}</td>
		</tr>
		<tr>
			<td>Your bank account is with</td>
			<td>{{ $app->bank_connection }}</td>
		</tr>
		<tr>
			<td>How long you maintain this account?</td>
			<td>{{ $app->account_maintaining_time }}</td>
		</tr>
		<tr>
		
		
	@endforeach

	</table>
	

</div>
<div style="text-align: center; ">
    
	<button style="width:150px; height:50px; color:red; "><strong><a href="{{route('login')}}">Back</a></button></strong> </div>


@endsection