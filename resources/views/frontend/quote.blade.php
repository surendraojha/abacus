@extends('layouts.frontend')
@section('title')
   Request Quote
@endsection
@section('content')
<section>
<div class="quote-content">
    <div class="quote-info-text">

         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
                                
        @endif
        <h1>Request Quote</h1>
        <p>Please provide your information and we'll get back to u as soon as possible.</p>
        <h6>* = required</h6>
    </div>
    <form action="{{url('post-quote-request')}}" method='post'>
        @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
        
            <label>Quote Type :</label><br>
            <select name="quote" required="">
                <option value='' selected>--Select Any--</option>
                <option value="home quote"> Home Quote </option>
                <option value="auto quote"> Auto Quote </option>
                <option value="business quote"> Business Quote </option>

</select> 

          
    </div>
    <div class="form-group col-md-6">
       <label>Contact Name :</label><br>
       <input type="text" name="contact_name" required="" value="{{old('contact_name')}}"> <br>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
       
        <label>Phone No :</label><br>
        <input type="text" name="phone" required="" value="{{old('phone')}}"> <br>
    </div>
    <div class="form-group col-md-6">
        
        <label>Email:</label><br>
        <input type="email" name="email" required="" value="{{old('email')}}"> <br>
    </div>
</div>
    
<div class="form-bottom-text">
<p>By clicking Submit, you agreed to be contacted using the contact information you have provided above.</p>
<button type="submit" name="submit" class="btn btn-danger">Submit</button>
@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
</form>

</div>
</section>

@endsection