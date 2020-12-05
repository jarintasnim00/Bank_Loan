<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Online loan application and verification </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

        <!-- DATE-PICKER -->
        <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="wrapper">
            <form action="{{ route('insert') }}" method="POST" id="wizard">
                 @csrf
                <!-- SECTION 1 -->
                <h4></h4>
                <section>
                  <p style="color:black;">Use this tool to see how eligible you are for a loan or credit card. Please remember that its only a guide and results may very when you make a full application.</p>
                  <br><br> <br><br>
                   <div class="form-row">
                        <div class="form-holder">
                            
                            <p style="color:black;">I want to check eligibility for a</p>
                        </div>
                        <div class="form-holder password">
                            
                            <p style="color:black;">Personal Loan</p>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-holder">
                            <p style="color:black;">How do you intend to use personal loan?</p>
                        </div>
        <div class="form-holder password">
        <div class="col-md-6">
                <select  id="personal_loan" type="text" class="form-control @error('department') is-invalid @enderror" name="loan_type" value="{{ old('personal_loan') }}" required autocomplete="department">
                    <option>Select Option</option>
                    <option>Busniess</option>
                    <option>Buying car</option>
                    <option>Heigher Education</option>
                    <option>Home Renovation</option>
                    <option>Medical</option>
                    <option>Vacation</option>
                    <option>Marraige</option>
                    <option>Other</option>
                    </select>

                @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
        </div>
                    </div>
                </section>




                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                    <h3>About Yourself</h3>
                    <div class="form-row">
                        <div class="form-holder">
                           <label>Title</label>
                        </div>
                        <div class="form-holder">
                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Your full name(as in NID/Passport)</label>
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" name="name" class="form-control" placeholder="Your full name" required autocomplete="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Date of Birth</label>
                        </div>
                        <div class="form-holder">
                            <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required autocomplete="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Gender</label>
                        </div>
                        <div class="form-holder">
                             <select  type="text" class="form-control" name="gender" value="" required autocomplete="Gender">
                    <option>Select</option>
                    <option>Female</option>
                    <option>Male</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Nationality</label>
                        </div>
                        <div class="form-holder">
                           
    <input type="text" class="form-control" name="nationality" placeholder="Nationality" required autocomplete="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Residential Status</label>
                        </div>
                             <div class="form-holder">
                             <select  type="text" class="form-control" name="residentstatus" value="" required autocomplete="residentstatus">
                    <option>Select</option>
                    <option>Home owner</option>
                    <option>Tinent</option>
                    <option>Living with parents</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Time at current address</label>
                        </div>
                        <div class="form-holder">
                        
            <input type="date" class="form-control" name="current_time" placeholder="">
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Phone Number?</label>
                        </div>
                        <div class="form-holder">
                            
            <input type="text" class="form-control" name="phone_number" placeholder="phone number" required autocomplete="">
                        </div>
                    </div>
                </section>




                <!-- SECTION 3 -->
               <h4></h4>
                <section>
                    <h3>About your Employement</h3>
                    <div class="form-row">
                        <div class="form-holder">
                           <label>Where are you currently employed?</label>
                        </div>
            <div class="form-holder">
             <input type="text" name="employed" class="form-control"placeholder="title">
            </div>
                    </div>
                   <!-- <div class="form-row">
                        <div class="form-holder">
                           
                            <label>How are you currently employed?</label>
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" name="name" class="form-control" placeholder="Your full name">
                        </div>
                    </div>-->
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Type of employe you work for?</label>
                        </div>
                        <div class="form-holder">
                           <select  type="text" class="form-control" name="employee_type" value="" required autocomplete="Gender">
                    <option>Select</option>
                    <option>Bank</option>
                    <option>Govement</option>
                    <option>Hospital</option>
                    <option>College</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Time with current employer</label>
                        </div>
                        <div class="form-holder">
    <input type="date" class="form-control" name="employer_current_time" placeholder="Nationality"> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Total length of employement</label>
                        </div>
                        <div class="form-holder">
                           
     <input type="date" class="form-control" name="employement_length" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                 <label>Your gross monthly income</label>
                </div>
             <div class="form-holder">
      <input type="text" class="form-control" name="monthly_income" placeholder="">
                        </div>
                    </div>
                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <h3>About your Banking relationship</h3>
                    <div class="form-row">
                        <div class="form-holder">
                           <label>Your bank account is with</label>
                        </div>
                        <div class="form-holder">
     <select  type="text" class="form-control" name="bank_connection" value="" required autocomplete="Gender">
                    <option>Select</option>
                    <option>Sonali Bank</option>
                    <option>AB bank</option>
                    <option>Dbbl</option>
                    <option>EBL</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>How long you maintain this account?</label>
                        </div>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
            <input type="date" name="account_maintaining_time" class="form-control" placeholder="Your full name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
                            <label>Account_no</label>
                        </div>
                        <div class="form-holder">
        <input  type="text" class="form-control" name="loan_institution" value="" required autocomplete="">
                    
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                           
        <label>Branch_Name</label>
                        </div>
                        <div class="form-holder">
             <input type="text" class="form-control" name="monthly_emi" placeholder="Nationality"> 
                        </div>
                    </div>
                   
                   <div  style="text-align: center;" class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Check result') }}
                                </button>
                        </div>


                        </div>
                    
                </section>
              

            </form>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        
        <!-- JQUERY STEP -->
        <script src="js/jquery.steps.js"></script>

        <script src="js/main1.js"></script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>