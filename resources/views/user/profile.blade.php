@extends('layout.mainapp')
@section('title','MainPage')


@section('content')
  <div class="container-fluid hero-image mb-5">
     <div class="row d-flex justify-content-center ">
     
         <div class="col-md-4 top-div text-center">
            <h1 class="text-white">"Learn Development With Milton"</h1>
            <h3  class="text-white">[Full-Stack Web Development]</h3>
            <a href="{{url('login')}}" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Login</a>
            
         </div>
     </div>
  
  
  </div>

 



  <div class="container text-center mt-5">
      <h2>My Courses</h2><br>
     <div class="row">

     <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">HTML</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">CSS</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">JavaScript</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Bootstrap</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">PHP</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Laravel</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            
         
     </div>
  </div>











  <div class="container text-center mt-5">
      <h2>My Projects</h2><br>
     <div class="row">

     <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Project Name</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Project Name</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
               <div class="card" style="width:100%;">
                   <img src="{{asset('images/laravel.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Project Name</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>
     </div>
  </div>

   
   
  <div class="container text-center mb-5 mt-5">
       <h2>Contact with Me</h2><br>
      <div class="row">
          <div class="col-md-6">
          <form>
                   <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Your Name</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Your Mobile No</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Your Message</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                 
                
                 <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>
          </div>
          <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14538.109041557067!2d88.59315990370955!3d24.362954899933076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa8f6dcfa43%3A0x38354d14038b67ae!2sShaheb%20Bazar%2C%20Rajshahi!5e0!3m2!1sen!2sbd!4v1610101621111!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
      </div>
  </div>

@endsection