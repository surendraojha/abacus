@extends('layouts.pdf')
@section('content')


<div id="container">

	<center><img src="{{ URL::asset('public/logo/Logo.jpg') }}" height="130px" ></center>	

	<h1 id='title'>Electronic Funds Transfer (EFT) </h1>
	<p id="sub-title">Authorization Form</p>  
	<p class="first-para">This form is being used for the initial payment of your policy only and cannot be used to make subsequent payments once your policy is bound. Subsequent payments are the responsibility of the insured. </p>   
	<p class="first-para"> @for($i=0;$i<15;$i++) &nbsp; @endfor<strong>Name of Insured:</strong> {{ $cash->name_of_insured}}</p>
	<p class="first-para"> @for($i=0;$i<13;$i++) &nbsp; @endfor<strong>Address of Insured:</strong>  {{ $cash->address_of_insured }}</p>
	<p class="first-para"> @for($i=0;$i<12;$i++) &nbsp; @endfor<strong>Amount of Transaction:</strong>{{ $cash->amt_of_transaction }}</p>
	<h2 class = "method">Method of Payment </h2>
	<p class="first-para"> @for($i=0;$i<15;$i++) &nbsp; @endfor Bank Account Number:____________________</p>
	<p class="first-para"> @for($i=0;$i<17;$i++) &nbsp; @endfor Routing Number:____________________</p>
	 
	<h2 class = "method">OR </h2>

	<p class="first-para">Credit Card #:      {{$cash->credit_card_no}}</p> 

	<p class="first-para"><strong>*****Must add 4% service charge to all credit card transactions</strong></p>

	 <p class="first-para">Expiration date:{{$cash->expiration_date }} &nbsp;&nbsp;&nbsp;  CSV :{{$cash->csv }} </p>
	 <p class="first-para">Billing Address Zip Code:{{$cash->billing_address_zip_code  }}</p> 
	<p class="first-para last-para">I authorize Abacus Insurance and Financial Services, LLC to charge my credit card or debit my bank account (per method as indicated above) for the amount listed. <strong>If a payment is returned due to [insufficient funds, a closed account, etc.], there will be a <u>$15.00</u> fee applied.</strong></p>

	<div class="footer">
		<p id='signature'>Signature of Insured:&nbsp; {{$cash->signature}} 
		@for($i=0;$i<20;$i++) &nbsp; @endfor Date:{{$cash->submitted_date}}</p>
	</div>
	
</div>


@endsection