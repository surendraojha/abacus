@extends('layouts.frontend')
@section('title')
   Payment via Bank
@endsection
@section('content')

<section>
<div class="payment-content">
    <div class="payment-info-text">
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
        <h1>Payment via Bank</h1>
        <p>Please provide your information and we'll get back to u as soon as possible.</p>
        <h6>* = required</h6>
    </div>
    <form action="{{url('post-pay-bank-customer')}}" method='post'>
        	@csrf

        <div class="top-form">
            <div class="inner-form">
        
            <label>Name of Insured :</label><br>
             <input type="text" name="name_of_insured" class="form-control" required="" value="{{old('name_of_insured')}}" > <br>

          
    </div>

            <div class="inner-form">
       <label>Address Of Insured :</label><br>
        <input type="text" name="address_of_insured"class="form-control" required="" value="{{old('address_of_insured')}}"> <br>
    </div>

</div>
    <div class="top-form">
            <div class="inner-form">
       
        <label>Email :</label><br>
       <input type="email" name="email" class="form-control"required="" value="{{old('email')}}" > <br>
    </div>

            <div class="inner-form">
       
        <label>Amount of Transactions :</label><br>
       <input type="text" name="amt_of_transaction"class="form-control" required="" value="{{old('amt_of_transaction')}}" > <br>
    </div>
</div>
    
    <div class="top-form">
            <div class="inner-form">
        
            <label>Bank AC NO :</label>
            <input type="text" name="bank_ac_no" class="form-control" required="" value="{{old('bank_ac_no')}}" > <br>
        </div>
    
    


            <div class="inner-form">
           <label>Routing No :</label><br>
             <input type="text" name="routing_no"class="form-control" required="" value="{{old('routing_no')}}"> 
        </div>

    </div>

    <div class="top-form">
            <div class="inner-form">
            <label>Signature :</label><br>
            <input type="text" name="signature" class="form-control"required=""  value="{{old('signature')}}"> <br>

        </div>
            <div class="inner-form">
            <label>Submitted Date :</label><br>
            <input type="text" name="submitted_date" class="form-control"required=""  readonly="" value="{{Date('Y-m-d')}}"> <br>

        </div>
    </div>

    <div class="top-form">
            <div class="inner-form">
            {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}

            </div>
    </div>

    i
    <div class="form-bottom-text">
        
        <p>If a payment is returned due to [insufficient funds, a closed account, etc.], there will be a $15.00 fee applied</p>
        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
    </div>
</div>
</form>



</section>
@endsection