@extends('mylayout.exten')

@section('content')

<div>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:500px; width:100%; margin-top:0 auto;" src="https://cdn.dribbble.com/users/723290/screenshots/6175826/gaadi_illustration.png" alt="...">
      <div>
      <div style="margin-bottom: 120px; margin-right:100px; font-weight: bold; color: black;" class="carousel-caption d-md-block">
        <div class="item">
              <div class="card" style=" height:17rem;width: 22rem; float: right;">
            <h4>Requirement of Personal Loan</h4>
        <div class="card-body">
        
        <p class="card-text">
          1.Monthly Income must be more than 15000 BDT<br><br>
          2.Account_no must be valid and 13 digit<br><br>
          3.Employement must be at least 2 years.
        </p>
        </div>
       </div>
            </div>
      </div>
    </div>
  </div>
  
</div>

</div>
<div>
  	<nav style="background:#FC5A13;"  class="navbar navbar-expand-sm  navbar-dark">
  <!-- Brand -->
  
  <ul class="navbar-nav" style="font-size:20px; margin-left:400px;">
   <li class="nav-item mr-4">
      <a style="color:black;"  class="nav-link" href="#"></a>
     
    </li>
    <li class="nav-item">
      <a style="color:black;"  class="nav-link" href=""></a> 
     
    </li>
  
   <li class="nav-item">
      <a style="color:black;"  class="nav-link" href="calculatemi">Calculate EMI ||</a> 
     
    </li>
    <li class="nav-item">
      <a style="color:black;"  class="nav-link" href="#">Schedule of Charges</a>
    </li>
   
   
  </ul>
  <ul style="font-size: 20px;" class="navbar-nav">
   
   
  </ul>
</nav>
   </div>

<br><br><div class="container-fluid">
  <table class="table table-bordered">
  <thead style="font-weight: bold; color:#004276;">
    <tr>
      <th scope="col">Institution</th>
      <th scope="col">Product Name</th>
      <th scope="col">Rates of Interest</th>
      <th scope="col">Loan Amount </th>
      <th scope="col">Tenure Range</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img style="height:142px; width:150;"  src="img/5.jpg" alt=""></th>
      <td><h6 style="color:#286090;">Personal Loan</h6>
       <p>Takeover,Regular</p>
       <p style="color:#286090;">#businessman<br>
       #landlord<br>
       #professional</p>
      </td>
      <td><h6 style="color:#286090;">Min:5.00</h6>
        <p style="color:#286090;">Max:10.00<br><br>
       </p>
      </td>
      <td><p style="color:#286090;">Max-loan:200000<br> Processing-fee:2%<br>Latepayment-fee:2%<br>Early settlement-fee:2%<br>
       </p></td>
      <td>Tenure:1-5 years</td>
      <td><a href="app"><button type="button" class="btn btn-success btn-lg">Apply Now</button></a>
       <br><br>
    <a href="app"><button type="button" class="btn btn-info btn-lg">Check Eligibility</button></a><br><br></td>
  
    </tr>
    <tr>
      <th scope="row"><img style="height:142px; width:150;"  src="img/11.jpg" alt=""></th>
      <td><h6 style="color:#286090;">Personal Loan</h6>
       <p>Takeover,Regular</p>
       <p style="color:#286090;">#businessman<br>
       #landlord<br>
       #professional</p>
      </td>
      <td><h6 style="color:#286090;">5.00</h6>
        <p style="color:#286090;">Max:10.00<br><br>
       </p>
      </td>
      <td><p style="color:#286090;">Max-loan:200000<br> Processing-fee:2%<br>Latepayment-fee:2%<br>Early settlement-fee:2%<br>
       </p></td>
      <td>Tenure:1-5 years</td>
      <td><button type="button" class="btn btn-success btn-lg">Apply Now</button><br><br>
    <button type="button" class="btn btn-info btn-lg">Check Eligibility</button><br><br></td>
  
    </tr>
    <tr>
      <th scope="row"><img style="height:142px; width:150;"  src="img/2.jpg" alt=""></th>
      <td><h6 style="color:#286090;">Personal Loan</h6>
       <p>Takeover,Regular</p>
       <p style="color:#286090;">#businessman<br>
       #landlord<br>
       #professional</p>
      </td>
      <td><h6 style="color:#286090;">5.00</h6>
        <p style="color:#286090;">Fixed<br><br> 
       </p>
      </td>
      <td><p style="color:#286090;">Max-loan:200000<br> Processing-fee:2%<br>Latepayment-fee:2%<br>Early settlement-fee:2%<br>
       </p></td>
      <td>Tenure:1-5 years</td>
      <td><button type="button" class="btn btn-success btn-lg">Apply Now</button><br><br>
    <button type="button" class="btn btn-info btn-lg">Check Eligibility</button><br><br></td>
    </tr>
    <tr>
      <th scope="row"><img style="height:142px; width:150;"  src="img/4.jpg" alt=""></th>
      <td><h6 style="color:#286090;">Personal Loan</h6>
       <p>Takeover,Regular</p>
       <p style="color:#286090;">#businessman<br>
       #landlord<br>
       #professional</p>
      </td>
      <td><h6 style="color:#286090;">10.24</h6>
        <p style="color:#286090;">Fixed<br><br> Wed sep 5
       </p>
      </td>
      <td><p style="color:#286090;">Max-loan:200000<br> Processing-fee:2%<br>Latepayment-fee:2%<br>Early settlement-fee:2%<br>
       </p></td>
      <td>Tenure:1-5 years</td>
      <td><button type="button" class="btn btn-success btn-lg">Apply Now</button><br><br>
    <button type="button" class="btn btn-info btn-lg">Check Eligibility</button><br><br></td>
    <tr>
      <th scope="row"><img style="height:142px; width:150;"  src="img/3.jpg" alt=""></th>
      <td><h6 style="color:#286090;">Personal Loan</h6>
       <p>Takeover,Regular</p>
       <p style="color:#286090;">#businessman<br>
       #landlord<br>
       #professional</p>
      </td>
      <td><h6 style="color:#286090;">10.24</h6>
        <p style="color:#286090;">Fixed<br><br> Wed sep 5
       </p>
      </td>
      <td><p style="color:#286090;">Max-loan:200000<br> Processing-fee:2%<br>Latepayment-fee:2%<br>Early settlement-fee:2%<br>
       </p></td>
      <td>Tenure:1-5 years</td>
      <td><button type="button" class="btn btn-success btn-lg">Apply Now</button><br><br>
    <button type="button" class="btn btn-info btn-lg">Check Eligibility</button><br><br></td>
    </tr>
  </tbody>
</table>
</div>

 <!--<div style="background: #F7FAFD" class="container-fluid content-padding">
         <h2 style="text-align: center;font-weight: bold;">RETAIL LOAN</h2><br><br>
      <div class="row">
          <div class="line"></div>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="card" style="width: 18rem;">
        <img style="height: 108px;" src="img/home.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><a href="">Mortgage Loan</a></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
          
            <div class="item">
               <div class="card" style="width: 18rem; margin: 0;">
        <img src="img/Personal.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><a href="">Personal Loan</a></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
        <div class="card" style="width: 18rem;">
        <img style="height: 108px;" src="img/two wheel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Two Wheeler Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
               <div class="card" style="width: 18rem;">
        <img style="height: 108px;" src="img/mort.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Mortgage Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
              <div class="card" style="width: 18rem;">
        <img style="height: 108px;" src="img/edu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Edu Finance</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            
            <div class="item">
               <div class="card" style="width: 18rem;">
        <img src="img/Personal.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Personal Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>

          </div>
      </div>
  </div>-->


@endsection