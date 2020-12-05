
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
           <div style="text-align: center;">
           	<form action="" method="POST">
           <input type="text" name="account-number" placeholder="Enter Account number">
           <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		    Search
		  </a>
           </form>
           <p>
		  
		</p>
		<div class="collapse" id="collapseExample">
		  <div class="card card-body">
		    Name        :          Jarin Tasnim Rimu <br>
		    Address     :          Dhanmondi 15, Afsar Uddin Road<br>
		    NID         :          854884782738333<br>
		    Bank_type   :          Savings<br>
		    Account_no  :          6566567567763<br>
		    Phone_no    :          01898968906<br>
		    Email       :          jarin@gmail.com

		  </div>
		</div>

        </div>
        </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection