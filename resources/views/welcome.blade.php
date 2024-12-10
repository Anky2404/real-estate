@extends('frontend.includes.app')

@section('content')


<section class="hero-section">

    <div class="container-fulid">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="hero-heading">
                    <h4>Real Estate Made Simple, Dreams Made Real</h4>
                    <h1>Find your perfect property with Real Estate</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="hero-booking-area">
                    <div class="hero-booking-content">

                        <form action="/mysearch" method="post">
                            <div class="input-box">
                                <label for="Location">Location</label>
                                <select name="location" id="">
                                    <option value="Australia">Australia</option>
                                    <option value="America">America</option>
                                    <option value="Canada">Canada</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="property-type">Interested in</label>
                                <select id="property-type" name="property-type" required>
                                    <option value="" disabled selected>Select Property Type</option>
                                    <option value="house">House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="land">Land</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div>

                            <div class="input-box">
                                <label for="Min Area">Min Area</label>
                                <select name="sqft" id="">
                                    <option value="1200">1200 ft2</option>
                                    <option value="1800">1800 ft2</option>
                                    <option value="2500">2500 ft2</option>
                                </select>
                            </div>

                            <div class="input-box">
                                <label for="Price">Price</label>
                                <select name="" id="">
                                    <option value="1">£500 - £800</option>
                                    <option value="2">£900 - £1500</option>
                                    <option value="3">£1600 - £2900</option>
                                </select>
                            </div>

                            <div class="input-box" id="selection-buttons">
                                <div class="radio-btn">
                                    
                                    <div class="rent">
                                        <label><input type="radio" class="input-radio rent" checked
                                                name="">Rent</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Search</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="about">
    <div class="container-fulid">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="colleft">
                    <img src="images/about-us.jpg" alt="about" title="about">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="colright">
                    <h4 class="sub-title">About Real Estate</h4>
                    <h2 class="title">Explore Homes, Discover Possibilities</h2>
                    <p style="margin-bottom: 20px;">At Real Estate, we believe finding your perfect home is more than
                        just a transaction—it's about discovering new possibilities for your future. Whether you're a
                        first-time buyer, a growing family, or an investor looking for your next
                        opportunity, we're here to guide you every step of the way.</p>
                    <h5 class="sub-title">Why Choose Us</h5>
                    <ul>
                        <li><img src="images/about-list-item.png" alt="about-list">Vast Selection of Properties</li>
                        <li><img src="images/about-list-item.png" alt="about-list">Expert Guidance</li>
                        <li><img src="images/about-list-item.png" alt="about-list">Local Market Knowledge</li>
                        <li><img src="images/about-list-item.png" alt="about-list">Customized Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="property">
    <div class="container-fulid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title" id="section-center">
                    <h4 class="sub-title">Rental Properties</h4>
                    <h2 class="title"> Explore Properties for Every Need</h2>
                    <p style="margin-bottom: 30px;">Whether you're buying your dream home or searching for a rental,
                        Real Estate offers a wide range of properties to suit your lifestyle and budget. Browse our
                        curated listings for homes and apartments available for sale or rent, and
                        let our expert team guide you through every step of the process.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row" data-cue="zoomIn">
                    <?php foreach($property as $key => $value){ ?>
                        <div class="col-lg-4">
                            <div class="property-box">
                    
                                <div class="property-img">
                                    <img src="/<?=  $value->image ?>" alt="property" title="property">
                                    <div class="property-quality">
                                        <span><i class="fas fa-chart-area"></i>  <span><?= $value->details ? $value->details->area : 'N/A' ?> SQ.FT</span> </span>
                                        <span><i class="fas fa-bed"></i> <?= $value->details ? $value->details->no_of_bedrooms : 'N/A' ?> Beds </span>
                                        <span><i class="fas fa-car"></i> <?= $value->details ? $value->details->no_of_garages : 'N/A' ?> Garage </span>
                                    </div>
                                </div>
                                
                                <div class="property-info">
                                    <h3><?= $value->property_name ?></h3>
                                    <p>4 bedrooms, large backyard, perfect for growing families.</p>
                                    <div class="price">
                                        <div class="price-left">
                                            <p>£<?= number_format($value->rent, 2) ?></p>
                                        </div>
                                        <div class="price-right">
                                            <a href="/property">See More</a>
                                        </div>
                                    </div>
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
    </div>
</section>

<section class="offer-area home-three">

    <div class="section-title center" data-cue="zoomIn">
        <h4 class="sub-title">Your Ideal Home is Just a Click Away</h4>
        <h2 class="title">Search our carefully curated listings of homes, apartments, and condos to find the perfect
            match for your needs.</h2>
    </div>
    <div class="owl-carousel">
        <div class="item">
            <div class="property-item">
                <div class="item-img">
                    <a href=""> <img src="images/offer-1.jpg" alt="offer-1" title="offer-1"></a>
                </div>
                <div class="item-info">
                    <h3>Terrace</h3>
                </div>
                <div class="item-box">
                    <h3>Elevate Your Space with Stunning Outdoor Views</h3>
                    <p>Discover spacious terraces perfect for relaxation, entertaining, or enjoying breathtaking views.
                    </p>
                    <a href="">Book Now</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="property-item">
                <div class="item-img">
                    <a href=""> <img src="images/offer-2.jpg" alt="offer-2" title="offer-2"></a>
                </div>
                <div class="item-info">
                    <h3>Garages</h3>
                </div>
                <div class="item-box">
                    <h3>Secure, Spacious, and Convenient Storage Solutions</h3>
                    <p>Find the perfect garage for your vehicle, storage, or workspace needs.</p>
                    <a href="">Book Now</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="property-item">
                <div class="item-img">
                    <a href=""> <img src="images/offer-3.jpg" alt="offer-3" title="offer-3"></a>
                </div>
                <div class="item-info">
                    <h3>Apartments</h3>
                </div>
                <div class="item-box">
                    <h3>Modern Living in Prime Locations</h3>
                    <p>Explore stylish apartments with contemporary designs, convenient amenities, and ideal locations
                    </p>
                    <a href="">Book Now</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="property-item">
                <div class="item-img">
                    <a href=""> <img src="images/offer-4.jpg" alt="offer-4" title="offer-4"></a>
                </div>
                <div class="item-info">
                    <h3>Swimming Pool</h3>
                </div>
                <div class="item-box">
                    <h3>Relax, Refresh, and Enjoy Luxury Living</h3>
                    <p>
                        Swimming Pools – Relax, Refresh, and Enjoy Luxury Living Dive into luxury with stunning swimming
                        pools, perfect for relaxation, fitness, and outdoor enjoyment.</p>
                    <a href="">Book Now</a>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="testimonial-area home-three">
    <div class="container-fulid">
        <div class="section-title center">
            <h4 class="sub-title">Testimonial</h4>
            <h2 class="title">Real Stories, Real Satisfaction</h2>
            <p>Discover how our clients have successfully bought, sold, and rented properties with our expert support,
                personalized service, and commitment to making their real estate dreams come true.</p>
        </div>

        <div class="owl-carousel">
            <div class="item">
                <div class="single-testi-box">
                    <div class="testi-thumb">
                        <img src="images/testi-thumb-1.png" alt="">
                    </div>
                    <div class="testi-content">
                        <h4>Mark Stevens</h4>

                    </div>
                    <div class="coustomar-rating">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p class="coustomar-comment">“I needed to sell my property quickly, and Real Estate got it done
                            faster than I expected, at a great price. Fantastic service!”
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-testi-box">
                    <div class="testi-thumb">
                        <img src="images/testi-thumb-3.png" alt="">
                    </div>
                    <div class="testi-content">
                        <h4>Sophia Richards</h4>

                    </div>
                    <div class="coustomar-rating">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>

                        </ul>
                        <p class="coustomar-comment">“The staff went above and beyond to find me the perfect condo. I
                            was impressed by their knowledge of the local market and attention to detail.”
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-testi-box">
                    <div class="testi-thumb">
                        <img src="images/testi-thumb-2.png" alt="">
                    </div>
                    <div class="testi-content">
                        <h4>Carlos Hernandez</h4>

                    </div>
                    <div class="coustomar-rating">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>

                        </ul>
                        <p class="coustomar-comment">“As a first-time buyer, I was nervous about the whole process. The
                            agent made everything easy to understand and guided me every step of the way. Highly
                            recommend!”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="facilities-area home-three">
    <div class="container-fulid">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title center" data-cue="zoomIn">
                    <h4 class="sub-title">Premium Facilities Await</h4>
                    <h2 class="title">Premium Facilities, Unmatched Comfort Await



                    </h2>
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
                        <p>Stay active and healthy with state-of-the-art fitness centers equipped with the latest
                            exercise machines and free weights. Enjoy the convenience of having a gym right at your
                            doorstep.</p>
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
                            relaxation and interaction, featuring comfortable seating, entertainment options, and a
                            welcoming atmosphere.</p>
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
                        <p>Relax and unwind in stunning swimming pools, perfect for leisure, exercise, and socializing.
                            Our properties feature both indoor and outdoor pools to suit your preferences. </p>
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
                            well-maintained areas offer a variety of play structures and plenty of space for kids to
                            enjoy. </p>
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
                        <p>Take in breathtaking views and enjoy outdoor living with expansive rooftop terraces. These
                            spaces are perfect for hosting gatherings, dining al fresco, or simply enjoying a quiet
                            moment.</p>
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
                        <p>Experience unparalleled convenience with dedicated concierge services. Whether you need
                            assistance with reservations, package deliveries, or general inquiries, our concierge is
                            here to help. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection