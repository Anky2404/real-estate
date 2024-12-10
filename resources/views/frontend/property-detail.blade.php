@extends('frontend.includes.app')

@section('content')

<?php
foreach($data as $val){

}
?>

<section class="breadcrumb-area">
   <div class="container-fulid">
      <div class="heading text-center">
         <h2>Property Detail</h2>
         <ul>
            <li><a href="/home">Home</a></li>
            <li><a class="active" href="">Property Detail</a></li>
         </ul>
      </div>
   </div>
</section>
<section class="property-detail">
   <div class="container-fulid">
      <div class="row">
         <div class="col-lg-8">
            <div class="colright">
               <div class="image">
                  <img src="/<?=  $val['image'] ?>" alt="image" title="image">
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="colleft">
               <h4><?=  $val['location'] ?></h4>

               <div class="detail-wrap">
                  <div class="detail-box">
                      <i class="fa fa-bath"></i>
                      <span><?= $val->details ? $val->details->no_of_bathrooms : 'N/A' ?> Bath Rooms</span>
                  </div>
                  <div class="detail-box">
                      <i class="fa fa-bed"></i>
                      <span><?= $val->details ? $val->details->no_of_bedrooms : 'N/A' ?> Bed Room</span>
                  </div>
                  <div class="detail-box">
                      <i class="fa fa-car"></i>
                      <span><?= $val->details ? $val->details->no_of_garages : 'N/A' ?> Garage</span>
                  </div>
                  <div class="detail-box">
                      <i class="fa fa-ruler-combined"></i>
                      <span><?= $val->details ? $val->details->area : 'N/A' ?> Sq Ft</span>
                  </div>
                  <div class="detail-box">
                      <i class="fa fa-parking"></i>
                      <span><?= $val->details ? $val->details->no_of_parkings : 'N/A' ?> Parking</span>
                  </div>
                  <div class="detail-box">
                      <i class="fa fa-wifi"></i>
                      <span><?= $val->details && $val->details->available_wifi ? 'Available' : 'Not Available' ?> Wi-Fi</span>
                  </div>
              </div>
              
               <h4>Price</h4>
               <h5>£<?= $val['rent'] ?> / Night </h5>
               <a href="/checkout/<?= $val['id'] ?>">Book Now</a>
            </div>
         </div>
         <div class="col-12">

            <div class="desp">
               <h3>
               <?=  $val['property_name'] ?>
               </h3>
               <p><?=  $val['description'] ?></p>

               <div class="div-bg-detail">
                  <h4>Premium Location</h4>
                  <p>Located in the heart of London's EC1A area, our properties benefit from proximity to major
                     transportation hubs, shopping districts, and cultural landmarks.</p>
                  <ul>
                     <li>
                        <strong>Excellent Connectivity:</strong>
                        <span> With easy access to underground stations (e.g., Farringdon, St. Paul’s), bus routes, and
                           key arterial roads, commuting within London and to surrounding areas is effortless.</span>
                     </li>
                  </ul>
               </div>
               <div class="div-bg-detail">
                  <h4>Modern Architecture & Design</h4>
                  <p>Spacious open-plan living areas, large windows for natural light, and premium finishes are standard
                     across all our residential units.</p>
                  <ul>
                     <li>
                        <strong>Sustainable Building Practices:</strong>
                        <span> Many of our properties adhere to environmentally-friendly construction standards and
                           energy-efficient designs.</span>
                     </li>
                  </ul>
               </div>
               <div class="div-bg-detail">
                  <h4>Luxury Interiors</h4>
                  <ul>
                     <li>
                        <strong>High-end Kitchens:</strong>
                        <span>Fully integrated kitchens with premium appliances from brands like Siemens, Miele, and
                           Bosch. Custom cabinetry and stylish countertops complete the space.</span>
                     </li>
                     <li>
                        <strong>Designer Bathrooms:</strong>
                        <span>Contemporary, spa-like bathrooms with underfloor heating, rainfall showers, designer
                           fittings, and luxury tiling.</span>
                     </li>
                     <li>
                        <strong>Smart Home Features:</strong>
                        <span>Many of our properties are equipped with the latest smart home technology for lighting,
                           temperature control, and security systems, all accessible via smartphone or voice
                           assistant.</span>
                     </li>
                  </ul>
               </div>
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12598173.025537323!2d-9.540406962760587!3d50.260857374558334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sReal%20Estate%20UK%20Ltd.%20London%2C%20EC1A%201BB%20United%20Kingdom!5e1!3m2!1sen!2sin!4v1732868804891!5m2!1sen!2sin"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
               <div class="div-bg-detail">
                  <h4>Secure & Private Living</h4>
                  <ul>
                     <li>
                        <strong>24/7 Security:</strong>
                        <span>CCTV surveillance, concierge services, and on-site security personnel ensure your property
                           is protected around the clock.</span>
                     </li>
                     <li>
                        <strong>Gated Communities:</strong>
                        <span>For those seeking added privacy, many of our residential units are situated in gated
                           communities, providing an additional layer of security and peace of mind.</span>
                     </li>
                     <li>
                        <strong>Secure Parking:</strong>
                        <span>Dedicated parking spaces, with electric vehicle charging points in select
                           locations.</span>
                     </li>
                  </ul>
               </div>
               <div class="div-bg-detail">
                  <h4>On-Site Amenities</h4>
                  <ul>
                     <li>
                        <strong>Gym & Fitness Centre:</strong>
                        <span>State-of-the-art fitness centers, often complemented by personal training services and
                           yoga studios.</span>
                     </li>
                     <li>
                        <strong>Spa and Wellness Facilities:</strong>
                        <span>Relax and rejuvenate with luxury spa treatments, saunas, and hot tubs available at many of
                           our premium properties.</span>
                     </li>
                     <li>
                        <strong>Private Residents' Lounges:</strong>
                        <span>Social spaces designed for residents to unwind, meet friends, or entertain guests.</span>
                     </li>
                  </ul>
               </div>
               <div class="div-bg-detail">
                  <h4>Outdoor Spaces</h4>
                  <ul>
                     <li>
                        <strong>Rooftop Gardens:</strong>
                        <span> Many of our properties feature beautifully landscaped rooftop gardens with panoramic
                           views of London’s skyline.</span>
                     </li>
                     <li>
                        <strong>Private Terraces & Balconies:</strong>
                        <span>Enjoy outdoor living in the comfort of your own home with private terraces and
                           balconies.</span>
                     </li>
                     <li>
                        <strong>Communal Gardens:</strong>
                        <span>Well-maintained green spaces that promote relaxation and community engagement within
                           residential buildings.</span>
                     </li>
                  </ul>
               </div>
               <div class="div-bg-detail">
                  <h4>Commercial Facilities</h4>
                  <ul>
                     <li>
                        <strong>Flexible Office Spaces:</strong>
                        <span>Designed for entrepreneurs and businesses of all sizes, our commercial properties offer
                           flexible leasing options, from hot-desking spaces to larger private offices.</span>
                     </li>
                     <li>
                        <strong>Retail Spaces:</strong>
                        <span>Located in high-traffic areas, our retail properties are perfect for businesses looking to
                           maximize footfall and exposure.</span>
                     </li>
                     <li>
                        <strong>Conference & Meeting Rooms:</strong>
                        <span>Many of our commercial properties come with on-site meeting facilities, complete with
                           high-speed internet and audiovisual equipment.</span>
                     </li>
                  </ul>
               </div>
               <div class="div-bg-detail">
                  <h4>Sustainable Living</h4>
                  <ul>
                     <li>
                        <strong>Energy Efficiency:</strong>
                        <span>Many of our buildings are equipped with energy-efficient systems, including double-glazed
                           windows, solar panels, and efficient heating/cooling systems.</span>
                     </li>
                     <li>
                        <strong>BREEAM Certification:</strong>
                        <span>We are committed to sustainable building practices. Many of our properties hold a BREEAM
                           certification, one of the highest standards for sustainability in the construction
                           industry.</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>


   </div>


</section>

@endsection