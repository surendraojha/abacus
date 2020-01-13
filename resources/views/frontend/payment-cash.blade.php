@extends('layouts.frontend')
@section('title')
   Credit Card Payment
@endsection
@section('content')


<section>
<div class="payment-content">
    <div class="payment-info-text">



        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
                                
        @endif

         @if ($errors->any())
               <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <h1>Credit Card Payment</h1>
        <p>Please provide your information and we'll get back to u as soon as possible.</p>
        <h6>* = required</h6>
    </div>
    <form action="{{url('post-pay-cash-customer')}}" method='post'>
       @csrf
      <div class="top-form">
        <div class="inner-form">
        
            <label>Name of Insured :</label><br>
             <input type="text" name="name_of_insured" required="" value="{{old('name_of_insured')}}"> <br>

          
    </div>
        <div class="inner-form">
       <label>Address Of Insured :</label><br>
        <input type="text" name="address_of_insured" required="" value="{{old('address_of_insured')}}"> <br>
    </div>
</div>
      <div class="top-form">
        <div class="inner-form">
       
        <label>Email :</label><br>
       <input type="email" name="email" required="" value="{{old('email')}}"> <br>
    </div>
        <div class="inner-form">
       
        <label>Amount of Transactions :</label><br>
       <input type="text" name="amt_of_transaction" required="" value="{{old('amt_of_transaction')}}"> <br>
    </div>
</div>
      <div class="top-form">
        <div class="inner-form">
        
	        <label>Credit Card # :</label><br>
	         <input type="number" name="credit_card_no" required="" value="{{old('credit_card_no')}}"> <br>
    	</div>

         <div class="inner-form">
           <label>Expiration date :</label><br>
          <i class="fa fa-fw fa-calendar"></i> <input type="text"    type="text" onfocus="(this.type='date')" onblur="(this.type='text')"  name="expiration_date" required="" value="{{old('expiration_date')}}" > <br>
        </div>

	</div>
    

      <div class="top-form">
       
        <div class="inner-form">
            <label>CSV :</label><br>
            <input type="text" name="csv" required="" value="{{old('csv')}}">
        </div>

        <div class="inner-form">
       <label>Billing Address Zip Code :</label><br>
       <input type="text" name="billing_address_zip_code" required="" value="{{ old('billing_address_zip_code') }}"> <br>

    </div>

</div>

      <div class="top-form">

        <div class="inner-form">
            <label>Signature :</label><br>
            <input type="text" name="signature" class="form-control"required=""  value="{{old('signature')}}"> <br>

        </div>

        <div class="inner-form">
        <label>Submitted Date :</label><br>
        <input type="text" name="submitted_date" required=""  readonly="" value="{{Date('Y-m-d')}}"><br>
    </div>
</div>

      <div class="top-form">
        <div class="form-group col-md-12">
            {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}

        </div>
    </div>

<div class="form-bottom-text">
<p>Must add 4% service charge to all credit card transactions</p>
<p>If a payment is returned due to [insufficient funds, a closed account, etc.], there will be a $15.00 fee applied</p>
<button type="submit" name="submit" class="btn btn-danger">Submit</button>
</form>

</div>
</section>

@endsection
