@extends('layouts.frontend')
@section('title')
    Contact Us
@endsection
@section('content')

<section>

<div class="contact-content">
     @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="contact-info-text">
        <h1>Abacus Insurance and Financial Services</h1>
        <p>Please provide your information and we'll get back to u as soon as possible.</p>
        <h6>* = required</h6>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{url('post-contact')}}" method='post'>
    <div class="top-form">
            <div class="inner-form">
        @csrf
              <div class="label">Reason for Reaching Out :</div>
            <select name="contact_reason" required="">
                <option value='' selected>--Select Any--</option>

                <option value="General question"> General question </option>

                <option value="quote"> I would like a quote </option>

                <option value="Refer someone"> I would like to refer someone </option>
            </select>
          
    </div>
            <div class="inner-form">
        <div class="label">Email</div>
        <input type="email" name="email" placeholder="Email Address *" required="" >
    </div>
</div>
        <div class="top-form">
            <div class="inner-form">
                <div class="label">First Name</div>

            <input type="text" name="first_name" placeholder="First Name *" required>
        </div>
            <div class="inner-form">
                <div class="label">Last Name</div>

            <input type="text" name="last_name"  placeholder="Last Name" required>
        </div>
    </div>

        <div class="top-form">
            <div class="inner-form">
            <div class="label">Phone</div>
            <input type="text" name="phone"  placeholder="Phone" required>
        </div>
            <div class="inner-form">
                <div class="label">Phone Type</div>

                    <select name="phone_type" required="" >

                        <option value='' selected>--Select Any--</option>

                        <option value="Private">Private</option>

                        <option value="Work">Work</option>

                        <option value="Home">Home</option>
                    </select> 
            </div>
    </div>

        <div class="top-form">
                <div class="form-group col-md-12">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                </div>
    </div>
        <div class="top-form">

    <div class="form-bottom-text">
        <p>By clicking Submit, you agreed to be contacted using the contact information you have provided above.</p>
        <button type="submit" class="btn btn-danger">Submit</button> 
    </div>
    </div>
</form>
</section>
				
@endsection