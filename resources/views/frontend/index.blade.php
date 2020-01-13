@extends('layouts.frontend')
@section('title')
    Home
@endsection
@section('content')



<div class="home">
<div class="home_slider_container">

<div class="owl-carousel owl-theme home_slider">


    <div class="home_slider_container">

        <div class="owl-carousel owl-theme home_slider">
           <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{asset('public/frontend/images/slideshow_one.jpg')}}"></div>
                    <div class="home_slider_content">
                        <div class="container">

                            <div class="row">     
                                <div class="col text-center">
                                    <div class="home_slider_form_container">
                                        <form action="{{url('subscribe')}}" method="POST" id="" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center">
                                                <input type="email" name="email" class="home_search_input" placeholder="Email Address" required="required">
                                            </div>
                                            <button type="submit" name="submit" class="home_search_button">Subscribe</button>
                                        </form>

                                    </div>


                                </div>
                            </div>

                             @if(Session::has('message'))
            

                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
                                
                                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>

<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>



<div class="insurances">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/courses_background.jpg')}}" data-speed="0.8"></div>
        <div class="container">
<div class="row">
<div class="col">
<div class="section_title_container text-center">
<h2 class="section_title">Abacus Insurance Services</h2>
<div class="section_subtitle"><p>Please give us an opportunity to source your Insurance coverage with no obligation to bind. We will try our level best to earn your business, with very good coverage and competitive rates.</p></div>
</div>
</div>
</div>
<div class="row insurances_row">

<div class="col-lg-3 insurance_col">
<div class="insurance">
<div class="insurance_image"><img src="{{asset('public/frontend/images/insurances_1.jpg')}}" alt=""></div>
<div class="insurance_body">
<h3 class="insurance_title"><a href="#">Auto Insurance</a></h3>

<div class="insurance_text">
<p>We're experts in finding affordable and complete United State auto insurance. Request a quote and let us find the right auto insurance for you.</p>
</div>
</div>

</div>
</div>

<div class="col-lg-3 insurance_col">
<div class="insurance">
<div class="insurance_image"><img src="{{asset('public/frontend/images/insurances_2.jpg')}}" alt=""></div>
<div class="insurance_body">
<h3 class="insurance_title"><a href="#">Home Insurance</a></h3>

<div class="insurance_text">
<p>United State homeowner insurance rates can vary widely. We'll make sure you're properly covered at the lowest rate available.</p>
</div>
</div>

</div>
</div>

<div class="col-lg-3 insurance_col">
<div class="insurance">
<div class="insurance_image"><img src="{{asset('public/frontend/images/insurances_3.jpg')}}" alt=""></div>
<div class="insurance_body">
<h3 class="insurance_title"><a href="#">Business Insurance</a></h3>

<div class="insurance_text">
<p>Let us review your commercial insurance needs. It's vital for your business to have the proper commercial insurance coverage for the unexpected.</p>
</div>
</div>

</div>
</div>

<div class="col-lg-3 insurance_col">
    <div class="insurance">
    <div class="insurance_image"><img src="{{asset('public/frontend/images/insurances_4.jpg')}}" alt=""></div>
    <div class="insurance_body">
    <h3 class="insurance_title"><a href="#">Life Insurance</a></h3>
    
    <div class="insurance_text">
    <p>Life changes, and your life insurance policy should evolve with it. Contact us for a free life insurance evaluation for United State.</p>
    </div>
    </div>
    
    </div>
    </div>
</div>


</div>
</div>
</div>

<div class="counter">
<div class="counter_background" style="background-image:url({{asset('public/frontend/images/counter_background.jpg')}}"></div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="counter_content">
<h2 class="counter_title">About Abacus</h2>
<div class="counter_text"><p>Abacus Insurance and Financial Services is a full-service Independent Insurance agency, having access to over 200 different Insurance Companies. We have developed relationships with Top-Rated, National Insurance Companies and by remaining an Independent Agent, we are able to offer you multiple quotes for all your insurance needs.
    Whether you are insuring Commercial Real Estate like Hotels, Shopping Centers, office buildings, or renter's policy for Investment purposes, or are looking for your residential home and auto coverages we are a one stop shop for all your Insurance needs.
    Please allow us to put the power of the insurance marketplace to work for you. Proper risk management and a well executed insurance plan can be the difference between comfort and catastrophe for a home or business.
</p></div>

</div>
</div>
</div>
    <div class="counter_form">
        <div class="row fill_height">
            <div class="col fill_height">
                <form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="{{url('post-contact')}}" method="post">
                    <div class="counter_form_title">Contact us</div>
                        @csrf
                         <select name="contact_reason" id="counter_select" class="counter_input counter_options" required="">
                            <option value='' selected>--Select Any--</option>
                            <option value="General question"> General question </option>
                            <option value="quote"> I would like a quote </option>
                            <option value="Refer someone"> I would like to refer someone </option>
                        </select>
                        <input type="email" class="counter_input" name="email" placeholder="Email Address *" required="" >

                        <input type="text" class="counter_input" name="first_name" placeholder="First Name *" required>

                        <input type="text" class="counter_input" name="last_name" placeholder="Last Name *" required>

                        <input type="text" class="counter_input" name="phone"  placeholder="Phone" required>

                        <select name="phone_type" required="" class="counter_input">

                            <option value='' selected>--Select Any--</option>

                            <option value="Private">Private</option>

                            <option value="Work">Work</option>

                            <option value="Home">Home</option>
                        </select> 
                        <button type="submit" name="submit" class="counter_form_button">submit now</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



<div class="team">
<div class="team_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/team_background.jpg')}}" data-speed="0.8"></div>
<div class="container">
<div class="row">
<div class="col">
<div class="section_title_container text-center">
<h2 class="section_title">Our Team</h2>
<div class="section_subtitle"><p>Our products and services include coverages for, Commercial properties, Home, Renter's Insurance, Personal Auto, General Liability, Business Auto, Umbrellas, Inland Marine, Workers Compensation, Occupational Accident Plans, Bonds, Flood, Builder's Risk, Windstorm, Errors & Omissions (E&O;), Life, Health, Company/Employee Benefits, Franchising to name a few.
    </p></div>
</div>
</div>
</div>
<div class="row team_row">

<div class="col-lg-3 col-md-6 team_col">
<div class="team_item">
<div class="team_image"><img src="{{asset('public/frontend/images/team_1.jpg')}}" alt=""></div>
<div class="team_body">
<div class="team_title"><a href="#">Jacke Masito</a></div>
<div class="team_subtitle">President</div>
<div class="social_list">
<ul>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 team_col">
<div class="team_item">
<div class="team_image"><img src="{{asset('public/frontend/images/team_2.jpg')}}" alt=""></div>
<div class="team_body">
<div class="team_title"><a href="#">William James</a></div>
<div class="team_subtitle">CEO</div>
<div class="social_list">
<ul>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 team_col">
<div class="team_item">
<div class="team_image"><img src="{{asset('public/frontend/images/team_3.jpg')}}" alt=""></div>
<div class="team_body">
<div class="team_title"><a href="#">John Tyler</a></div>
<div class="team_subtitle">Certified Insurance Counselor</div>
<div class="social_list">
<ul>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 team_col">
<div class="team_item">
<div class="team_image"><img src="{{asset('public/frontend/images/team_4.jpg')}}" alt=""></div>
<div class="team_body">
<div class="team_title"><a href="#">Veronica Vahn</a></div>
<div class="team_subtitle">Customer Service Head</div>
<div class="social_list">
<ul>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="news">
<div class="container">
<div class="row">
<div class="col">
<div class="section_title_container text-center">
<h2 class="section_title">The Abacus Blog</h2>
<div class="section_subtitle"><p>Most people don’t think about insurance much, until they have to — and by then, it could be too late. The good thing is, insurance is always on our minds, as you can see from our archives below. From car and life insurance to homeowners and renters policies, read on to make sure you and your family are protected, and discover new ways to save money on premiums.</p></div>
</div>
</div>
</div>
<div class="row news_row">
<div class="col-lg-7 news_col">

<div class="news_post_large_container">
<div class="news_post_large">
<div class="news_post_image"><img src="{{asset('public/frontend/images/news.jpg')}}" alt=""></div>
<div class="news_post_large_title"><a href="#">What Is Personal Liability Insurance?</a></div>
<div class="news_post_meta">
<ul>
<li><a href="#">admin</a></li>
<li><a href="#">november 11, 2017</a></li>
</ul>
</div>
<div class="news_post_text">
<p>What is liability insurance? It gives you financial protection if someone outside of your household is injured or has their…</p>
</div>
<div class="news_post_link"><a href="#">read more</a></div>
</div>
</div>
</div>
<div class="col-lg-5 news_col">
<div class="news_posts_small">

<div class="news_post_small">
<div class="news_post_small_title"><a href="#">How Much Renters Insurance Do I Need?</a></div>
<div class="news_post_meta">
<ul>
<li><a href="#">admin</a></li>
<li><a href="#">January 11, 2020</a></li>
</ul>
</div>
</div>

<div class="news_post_small">
<div class="news_post_small_title"><a href="#">The Most Congested Roads in America and Worldwide</a></div>
<div class="news_post_meta">
<ul>
<li><a href="#">admin</a></li>
<li><a href="#">January 05, 2020</a></li>
</ul>
</div>
</div>

<div class="news_post_small">
<div class="news_post_small_title"><a href="#">Independent vs. Captive Agents</a></div>
<div class="news_post_meta">
<ul>
<li><a href="#">admin</a></li>
<li><a href="#">January 02, 2020</a></li>
</ul>
</div>
</div>

<div class="news_post_small">
<div class="news_post_small_title"><a href="#">Note to the CEO: Our perspective on the American life insurance closed-book market</a></div>
<div class="news_post_meta">
<ul>
<li><a href="#">admin</a></li>
<li><a href="#">December 24, 2019</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



</div>

@endsection