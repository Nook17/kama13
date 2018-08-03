@extends('layouts.app')
@section('content')

  <!--     *********    CONTACT US 1     *********      -->
  <div class="section section-contactus cd-section section-image" id="contact-us" style="background-image: url('/img/sections/soroush-karimi.jpg')">
   <div class="contactus-1 ">
     <div class="container">
       <div class="row">
         <div class="col-md-10 ml-auto mr-auto">
           <div class="card card-contact no-transition">
             <h3 class="card-title text-center">Skontaktuj się ze mną</h3>
             <div class="row">
               <div class="col-md-5 ml-auto">
                 <div class="card-body">
                   <div class="info info-horizontal">
                     <div class="icon icon-info">
                       <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                     </div>
                     <div class="description">
                       <h4 class="info-title">Find us at the office</h4>
                       <p> Bld Mihail Kogalniceanu, nr. 8,
                         <br> 7652 Bucharest,
                         <br> Romania
                       </p>
                     </div>
                   </div>
                   <div class="info info-horizontal">
                     <div class="icon icon-danger">
                       <i class="nc-icon nc-badge" aria-hidden="true"></i>
                     </div>
                     <div class="description">
                       <h4 class="info-title">Give us a ring</h4>
                       <p> Michael Jordan
                         <br> +40 762 321 762
                         <br> Mon - Fri, 8:00-22:00
                       </p>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-5 mr-auto">
                 <form role="form" id="contact-form" method="post">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-md-6">
                         <div class="form-group label-floating">
                           <label class="control-label">First name</label>
                           <input type="text" name="name" class="form-control" placeholder="First Name">
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="form-group label-floating">
                           <label class="control-label">Last name</label>
                           <input type="text" name="name" class="form-control" placeholder="Last Name">
                         </div>
                       </div>
                     </div>
                     <div class="form-group label-floating">
                       <label class="control-label">Email address</label>
                       <input type="email" name="email" class="form-control" placeholder="Email" />
                     </div>
                     <div class="form-group label-floating">
                       <label class="control-label">Your message</label>
                       <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                     </div>
                     <div class="row">
                       <div class="col-md-6">
                         <div class="form-check">
                           <label class="form-check-label">
                             <input class="form-check-input" type="checkbox" value=""> I'm not a robot !
                             <span class="form-check-sign"></span>
                           </label>
                         </div>
                       </div>
                       <div class="col-md-6">
                         <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                       </div>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!--     *********    END CONTACT US 1      *********      -->

 <div id="contactUsMap" class="big-map"></div>
@endsection