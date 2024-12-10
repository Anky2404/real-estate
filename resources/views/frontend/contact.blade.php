@extends('frontend.includes.app')

@section('content')

<section class="breadcrumb-area">
   <div class="container-fulid">
      <div class="heading text-center">
         <h2>Contact Us</h2>
         <ul>
            <li><a href="/home">Home</a></li>
            <li><a class="active" href="/contact">Contact Us</a></li>
         </ul>
      </div>
   </div>
</section>
<section class="contact">
   <div class="container-fulid">
      <div class="contact-us">
         <div class="row">
            <div class="col-lg-6 col-6">
               <div class="contact-left">
                  <div class="section-title">
                     <span class="sub-title">Contact Us for Personalized Real Estate Solutions</span>
                     <h2 class="title">Real Estate</h2>
                     <p>Have questions? Need assistance? We're here to help! Contact Real Estate for expert real estate
                        advice, property inquiries, or to learn more about our services. Our dedicated team is ready to
                        assist you every step of the
                        way. </p>
                  </div>
                  <div class="contact-info">
                     <div class="row">
                        <div class="col-2 col-lg-2">
                           <div class="info-left">
                              <i class="fa fa-phone">
                              </i>
                           </div>
                        </div>
                        <div class="col-10 col-lg-10">
                           <div class="info-right">
                              <h4>Call Us Now</h4>

                              <a href="tel:+ 8 91230 456 789">
                                 <p>+44 20 7946 0857</p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="contact-info">
                     <div class="row">
                        <div class="col-2 col-lg-2">
                           <div class="info-left">
                              <i class="fa fa-envelope">
                              </i>
                           </div>
                        </div>
                        <div class="col-10 col-lg-10">
                           <div class="info-right">
                              <h4>Sent Mail</h4>
                              <a href="mailto:realestate2420@email.com">
                                 <p>realestate2420@email.com</p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="contact-info">
                     <div class="row">
                        <div class="col-2 col-lg-2">
                           <div class="info-left">
                              <i class="fa fa-map-marker">
                              </i>
                           </div>
                        </div>
                        <div class="col-10 col-lg-10">
                           <div class="info-right">
                              <h4>Our Locations</h4>
                              <a href="#">
                                 <p>Real Estate UK Ltd. London, EC1A 1BB United Kingdom
                                 </p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-6">
               <div class="contact-right" id="input-box-contact">
                  <div class="section-title">
                     <h2 class="title">Get in touch with us today!</h2>
                  </div>

                  <?php if(isset($error_msg)) { ?>

                     <p style="color:red"><?php echo $error_msg; ?></p> 

                     <?php } ?>

                     <?php if(isset($success_msg)) { ?>

                     <div class="alert alert-success" role="alert"> 
                     <p style="color:green"><?php echo $success_msg; ?></p>
                     </div>
                     <?php } ?>

                     <form action="/frontend/contact" method="post">

                     <?php  if(count($errors) > 0) { ?>

                     <?php foreach($errors->all() as $key => $val){ ?>

                     <div class="alert alert-danger" role="alert"> 
                     <p style="color:red"><?php echo $val; ?></p>
                     </div>

                     <?php  } ?>

                     <?php } ?>
                        @csrf
              
                     <div class="input-box">
                        <input type="text" name="name" placeholder="Your Name" required>
                     </div>
                     <div class="input-box">
                        <input type="text" name="phone" placeholder="Your Phone" required>
                     </div>
                     <div class="input-box">
                        <select name="client_demand" id="place" required>
                           <option value="" disabled selected>Select Property Type</option>
                           <option value="house">House</option>
                           <option value="apartment">Apartment</option>
                           <option value="land">Land</option>
                           <option value="commercial">Commercial</option>
                        </select>
                     </div>
                     <div class="input-box">
                        <textarea name="message" placeholder="Message" required></textarea>
                     </div>
                     <button type="submit" name="submit">Send Message</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection