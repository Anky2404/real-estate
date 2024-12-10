@extends('frontend.includes.app')

@section('content')
<section class="breadcrumb-area">
   <div class="container-fulid">
      <div class="heading text-center">
         <h2>Property</h2>
         <ul>
            <li><a href="/home">Home</a></li>
            <li><a class="active" href="/property">Property</a></li>
         </ul>
      </div>
   </div>
</section>
<section class="property1">
   <div class="container-fulid">
      <div class="property-wrap" id="listing">
         <div class="row">

         <?php foreach($property as $key => $value){ ?>

            <div class="col-lg-4 col-4">
               <div class="property-box">
                  <div class="property-img">
                     <img src="/<?=  $value['image'] ?>" alt="property" title="property">
                  </div>
                  <div class="property-info">
                     <div class="property-top">
                        <h4>Our Exclusive Property</h4>
                        <a href="/property-detail/<?=  $value['id'] ?>">
                           <h3><?= $value['property_name'] ?></h3>
                        </a>
                        <span><?= $value->details ? $value->details->area : 'N/A' ?> SQ.FT/property</span>
                     </div>
                     <div class="property-bottom">
                        <ul class="property-left">
                           <li><i class="fa fa-bed"></i><?= $value->details ? $value->details->no_of_bedrooms : 'N/A' ?> bedrooms</li>
                        </ul>
                        <ul class="property-right">
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                        </ul>
                     </div>
                     <a href="/property-detail/<?=  $value['id'] ?>" class="btn">View Detail</a>
                  </div>
                  <div class="purpose">
                     <span>For Rent</span>
                  </div>
               </div>
            </div>

         <?php } ?>

         </div>
      </div>
   </div>
</section>

@endsection