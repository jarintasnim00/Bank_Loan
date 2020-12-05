@extends('layouts.header')
@section('content')
 <div>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:600px" src="https://www.worldwidecollege.in/uploads/blogs/Banking-and-Finance-MBA-Bangor-University1572306753.jpg" class="d-block w-100" alt="...">
      <div>
      <div style="margin-bottom: 100px; margin-right:650px; font-weight: bold;" class="carousel-caption d-md-block">
        <h1>Financial Well-Being</h1>
        <h5>Shortest Time | Fixed Term | Personal Loan</h5>
        <p>Get the financial help and insights to start, build, and grow your business.</p>
        <button type="button" class="btn btn-success">Learn More</button>
      </div>
    </div>
  </div>
</div>

</div>
<div style="background: #F7FAFD" class="container-fluid content-padding">
         <h2 style="text-align: center;font-weight: bold;">Loan Category</h2><br><br>
      <div class="row">
          <div class="line"></div>
          <div class="owl-carousel owl-theme">
            <div class="item">
        <div class="card" style="width:  17rem;">
        <img style="height: 108px;" src="img/agri.jpg" class="card-img-top" alt="...">    
        <div class="card-body">
        <h5 class="card-title">Agriculture and Finance</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
               <div class="card" style="width: 17rem; ">
       <a href="{{route('bdbank')}}"> <img style="height: 108px;" src="img/Personal.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
        <h5 class="card-title">Personal Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
        <div class="card" style="width: 17rem;">
        <img style="height: 108px;" src="img/business.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Business Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
              <div class="card" style="width: 17rem;">
        <img style="height: 108px;" src="img/sme.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">SME Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
               <div class="card" style="width: 17rem;">
        <img style="height: 108px;" src="img/home.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Home Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
              <div class="card" style="width: 17rem;">
        <img style="height: 108px;" src="img/car.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Car Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
              <div class="card" style="width: 17rem;">
        <img src="img/agri.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Agriculture Loan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
              <div class="card" style="width: 17rem;">
        <img style="height: 108px;" src="img/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
            <div class="item">
               <div class="card" style="width: 17rem;">
        <img style="height: 108px;" src="img/Personal.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
            </div>
          </div>
      </div>
  </div>
<!--
<br><br>
<div class="container-fluid">
  <table class="table table-bordered">
  <thead style="font-weight: bold; color:#004276;">
    <tr>
      <th scope="col">Institution</th>
      <th scope="col">Product Name</th>
      <th scope="col">Rates</th>
      <th scope="col">Features</th>
      <th scope="col">Customer Rating</th>
      <th scope="col">Next</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img style="height:100px; width:150px;"  src="img/5.jpg" alt=""></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-primary btn-sm">Small button</button><br><br>
    <button type="button" class="btn btn-secondary btn-sm">Small button</button><br><br>
    <button type="button" class="btn btn-secondary btn-sm">Small button</button></td>
  
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>-->

   <div class="container-fluid" >
      <div class="row">
      <div class="col-md-6 bg-light">  
      <div class="card">
      <div class="card-body">
     
      <div class="row">
         <div class="col-md-4">
            <img style="height:100px; width:150px;"  src="img/5.jpg" alt="">
         </div>
         <div class="col-md-8">
              <h5 class="card-title">Eastern Bank Limited</h5>
      <p class="card-text">To make your loan easily from home.</p>
      <a href="app" class="btn btn-primary">Apply Now</a>
         </div>
      </div>
      </div>
    </div>
   
      <div class="card">
      <div class="card-body">
     
      <div class="row">
         <div class="col-md-4">
            <img style="height:100px; width:150px;"  src="img/2.jpg" alt="">
         </div>
         <div class="col-md-8">
              <h5 class="card-title">Sonali Bank Limited</h5>
      <p class="card-text">To make your loan easily from home.</p>
      <a href="app" class="btn btn-primary">Apply Now</a>
         </div>
      </div>
      </div>
    </div>
      <div class="card">
      <div class="card-body">
     
      <div class="row">
         <div class="col-md-4">
            <img style="height:100px; width:150px;"  src="img/3.jpg" alt="">
         </div>
         <div class="col-md-8">
              <h5 class="card-title">Datch-Bangla Bank Limited</h5>
      <p class="card-text">To make your loan easily from home.</p>
      <a href="app" class="btn btn-primary">Apply Now</a>
         </div>
      </div>
      </div>
    </div>
      </div>
      <div style="background: #F7FAFD" class="col-md-6 clear">
         <br><br>
        <h6 style="color: red">TOP SECURITY</h6><br>
      <h2>Small- to medium-sized businesses</h2><br><br>
      <p style="font-size: 20px;font-family:Arial">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <br><br>
        <ul style=" float: left;margin-left:50px; font-weight: bold;color:#678AA8;font-size:15px;overflow: hidden;">
          <li >Easy transfers</li><br>
          <li >Deposit checks instantly</li><br>
          <li >A powerful open API</li><br>
          <a style="background: linear-gradient(45deg,#ee0979,#ff6a00) ;color: #fff;" href="calculatemi" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Calculate EMI</a>
          </ul>
          <ul style="float: right; margin-right:150px; font-weight: bold;color:#678AA8;font-size:15px; overflow: hidden;">
          <li> Business without borders</li><br>
          <li >Coverage around the world</li><br>
          <li >Affiliates and partnerships</li>
        </ul>
      </div>
       </div>
      </div>
      </div>
     </div><br><br><br><br>
      

    <div style="height: 267px;width: 100%; background:  linear-gradient(90deg,#ee0979,#ff6a00);"class="container-fluid ">
           
          <div class="row">
             <div class="col-md-8">
                <h2 style=" font-weight:bold;color: white; margin-top: 100px; margin-left: 50px; ">Apply for your loan in very short time
                </h2>
                <h5 style="color: white;margin-left: 50px; ">Get your loan Today!</h5>
              </div>
              <div class="col-md-4">
               <a style=" color: #fff; margin-top: 100px; " href="app" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Apply Now</a>
                 
              </div>


          </div>


        </div>
 

      <div class="container-fluid content-padding">
      <div class="row">
          <div class="line"></div>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="img/11.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/2.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/3.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/4.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/5.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/11.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/2.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/3.jpg" alt="">
            </div>
            <div class="item">
               <img src="img/4.jpg" alt="">
            </div>
          </div>
      </div>
  </div>
  @endsection
   
   