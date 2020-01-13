@extends('layouts.pdf')
@section('content')
	<a href="{!!url('exported-to-pdf')!!}">Export to pdf</a>

<div id="container">

	<center><img src="{{ URL::asset('public/logo/Logo.jpg') }}" height="130px" ></center>	

	<h1 id='title'>Electronic Funds Transfer (EFT) </h1>
	<p id="sub-title">Authorization Form</p>  
	<p class="first-para">This form is being used for the initial payment of your policy only and cannot be used to make subsequent payments once your policy is bound. Subsequent payments are the responsibility of the insured. </p>   
	<p class="first-para"> @for($i=0;$i<15;$i++) &nbsp; @endfor<strong>Name of Insured:</strong> _____________________</p>
	<p class="first-para"> @for($i=0;$i<13;$i++) &nbsp; @endfor<strong>Address of Insured:</strong> ____________________ </p>
	<p class="first-para"> @for($i=0;$i<12;$i++) &nbsp; @endfor<strong>Amount of Transaction:</strong>____________________</p>
	<h2 class = "method">Method of Payment </h2>
	<p class="first-para"> @for($i=0;$i<15;$i++) &nbsp; @endfor Bank Account Number:____________________</p>
	<p class="first-para"> @for($i=0;$i<17;$i++) &nbsp; @endfor Routing Number:____________________</p>
	 
	<h2 class = "method">OR </h2>

	<p class="first-para">Credit Card #      _________________________</p> 

	<p class="first-para"><strong>*****Must add 4% service charge to all credit card transactions</strong></p>

	 <p class="first-para">Expiration date_______________ &nbsp;&nbsp;&nbsp;  CSV__________________ </p>
	 <p class="first-para">Billing Address Zip Code ___________________________</p> 
	<p class="first-para last-para">I authorize Abacus Insurance and Financial Services, LLC to charge my credit card or debit my bank account (per method as indicated above) for the amount listed. <strong>If a payment is returned due to [insufficient funds, a closed account, etc.], there will be a <u>$15.00</u> fee applied.</strong></p>

	<div class="footer">
		<p id='signature'>Signature of Insured: _________________________ 
		 &nbsp;&nbsp; Date:_______________________</p>
	</div>
	
</div>



@endsection