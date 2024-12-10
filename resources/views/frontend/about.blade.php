@extends('frontend.includes.app')

@section('content')

<section class="breadcrumb-area">
   <div class="container-fulid">
      <div class="heading text-center">
         <h2>About Us</h2>
         <ul>
            <li><a href="/home">Home</a></li>
            <li><a class="active" href="/about">About</a></li>
         </ul>
      </div>
   </div>
</section>


<section class="about">
   <div class="container-fulid">
      <div class="row align-items-center">

         <div class="col-lg-6">
            <div class="colright">
               <h4 class="sub-title">Who We Are</h4>
               <h2 class="title">Turning Your Real Estate Dreams into Reality</h2>
               <p>At Real State, we are dedicated to making your real estate journey smooth and successful. Whether
                  you’re buying, selling, or renting, our team of experts offers personalized solutions and
                  comprehensive market knowledge. We listen
                  to your needs, understand your goals, and help you find the perfect property to call home.</p>
               <ul>
                  <li><img src="images/about-list-item.png" alt="about-list">Personalized Service</li>
                  <li><img src="images/about-list-item.png" alt="about-list">Expert Guidance</li>
                  <li><img src="images/about-list-item.png" alt="about-list">Transparent Communication</li>
                  <li><img src="images/about-list-item.png" alt="about-list">Exceptional Customer Support</li>
                  <li><img src="images/about-list-item.png" alt="about-list">Community Involvement</li>
                  <li><img src="images/about-list-item.png" alt="about-list">Comprehensive Market Knowledge</li>
               </ul>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="colleft">
               <img src="images/about-thumb.jpg" alt="about" title="about">
            </div>
         </div>
      </div>
   </div>
</section>

<section class="facilities-area home-three about1">
   <div class="container-fulid">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title center" data-cue="zoomIn">
               <h4 class="sub-title">Elevated Living Amenities</h4>
               <h2 class="title">Features designed to enhance your comfort </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="single-facilities-box" data-cue="zoomIn">
               <div class="facilities-icon">
                  <img src="images/facilities-icon-1.png" alt="">
               </div>
               <div class="facilities-content">
                  <h4>Fitness Center</h4>
                  <p>Stay active and healthy with state-of-the-art fitness centers equipped with the latest exercise
                     machines and free weights. Enjoy the convenience of having a gym right at your doorstep.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-facilities-box" data-cue="zoomIn">
               <div class="facilities-icon">
                  <img src="images/facilities-icon-2.png" alt="">
               </div>
               <div class="facilities-content">
                  <h4>Community Lounge</h4>
                  <p>Meet and socialize with neighbors in stylish community lounges. These spaces are designed for
                     relaxation and interaction, featuring comfortable seating, entertainment options, and a welcoming
                     atmosphere.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-facilities-box" data-cue="zoomIn">
               <div class="facilities-icon">
                  <img src="images/facilities-icon-3.png" alt="">
               </div>
               <div class="facilities-content">
                  <h4>Swimming Pool</h4>
                  <p>Relax and unwind in stunning swimming pools, perfect for leisure, exercise, and socializing. Our
                     properties feature both indoor and outdoor pools to suit your preferences. </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-facilities-box" data-cue="zoomIn">
               <div class="facilities-icon">
                  <img src="images/facilities-icon-4.png" alt="">
               </div>
               <div class="facilities-content">
                  <h4>Playground</h4>
                  <p>Provide a fun and safe environment for your children with on-site playgrounds. These
                     well-maintained areas offer a variety of play structures and plenty of space for kids to enjoy.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-facilities-box" data-cue="zoomIn">
               <div class="facilities-icon">
                  <img src="images/facilities-icon-5.png" alt="">
               </div>
               <div class="facilities-content">
                  <h4>Rooftop Terrace</h4>
                  <p>Take in breathtaking views and enjoy outdoor living with expansive rooftop terraces. These spaces
                     are perfect for hosting gatherings, dining al fresco, or simply enjoying a quiet moment.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-facilities-box" data-cue="zoomIn">
               <div class="facilities-icon">
                  <img src="images/facilities-icon-6.png" alt="">
               </div>
               <div class="facilities-content">
                  <h4> Concierge Service</h4>
                  <p>Experience unparalleled convenience with dedicated concierge services. Whether you need assistance
                     with reservations, package deliveries, or general inquiries, our concierge is here to help. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="facilities-area home-three about1" id="agent-section">
   <div class="container-fulid">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title center" data-cue="zoomIn">
               <h4 style="color: #20706e;" class="sub-title">Our Agents</h4>
               <h2 style="color: #000;" class="title">Highly Skilled Agents at Your Service</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3">
            <div class="agent-box" data-cue="zoomIn">
               <div class="agent-img">
                  <img src="images/team-1.jpg" alt="">
               </div>
               <div class="agent-info">
                  <div class="agent-left">
                     <span><i class="fa-solid fa-user"></i>David Warner</span>
                     <span><i class="fa-solid fa-phone"></i>+44 778999977</span>
                  </div>
                  <div class="agent-right">
                     <span><i class="fa-solid fa-location-dot"></i>London, UK</span>
                     <span><i class="fa-regular fa-paper-plane"></i>David@gmail.com</span>
                  </div>

               </div>

            </div>
         </div>
         <div class="col-lg-3">
            <div class="agent-box" data-cue="zoomIn">
               <div class="agent-img">
                  <img src="images/team-2.jpg" alt="">
               </div>
               <div class="agent-info">
                  <div class="agent-left">
                     <span><i class="fa-solid fa-user"></i>Emily janes </span>
                     <span><i class="fa-solid fa-phone"></i>+44 392 456789</span>
                  </div>
                  <div class="agent-right">
                     <span><i class="fa-solid fa-location-dot"></i>Denver, Co </span>
                     <span><i class="fa-regular fa-paper-plane"></i>Emily@gmail.com</span>
                  </div>

               </div>

            </div>
         </div>
         <div class="col-lg-3">
            <div class="agent-box" data-cue="zoomIn">
               <div class="agent-img">
                  <img src="images/team-3.jpg" alt="">
               </div>
               <div class="agent-info">
                  <div class="agent-left">
                     <span><i class="fa-solid fa-user"></i>Liam Davis</span>
                     <span><i class="fa-solid fa-phone"></i>+44 734 567890</span>
                  </div>
                  <div class="agent-right">
                     <span><i class="fa-solid fa-location-dot"></i>Liverpool</span>
                     <span><i class="fa-regular fa-paper-plane"></i>Liam@gmail.com</span>
                  </div>

               </div>

            </div>
         </div>
         <div class="col-lg-3">
            <div class="agent-box" data-cue="zoomIn">
               <div class="agent-img">
                  <img src="images/team-4.jpg" alt="">
               </div>
               <div class="agent-info">
                  <div class="agent-left">
                     <span><i class="fa-solid fa-user"></i>Sophie Clark</span>
                     <span><i class="fa-solid fa-phone"></i>+44 458765432</span>
                  </div>
                  <div class="agent-right">
                     <span><i class="fa-solid fa-location-dot"></i>Glasgow, UK</span>
                     <span><i class="fa-regular fa-paper-plane"></i>Sophie@gmail.com</span>
                  </div>

               </div>

            </div>
         </div>

      </div>
   </div>
</section>

@endsection