@extends('layouts.app')
@section('title')
Payment Bank
@endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
                      <form action="{{url('admin/delete-payment-bank')}}" method="post">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <h4 class="card-title"> Payment Bank </h4>

                        @include('admin.delete_dropdown')
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
                    <table class="table table-bordered table-responsive">

                      <thead>
                        <tr>
                          <th><input type="checkbox" name="checks" id="checkall"></th>
                          <th> # </th>
                          <th> Name of insured </th>

                          <th> Address of insured </th>

                          <th> Amt of transaction </th>

                          <th> Bank ac </th>

                          <th> Routing no </th>
                          <th> Submitted Date </th>
                          <th> Download </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $count=1; ?>
                        @foreach($payment as $value)
                        <tr>
                          <td> <input type="checkbox" name="check[]" value="{{ $value->id }}" 
                            class="checkSingle"> </td>

                          <td> {{$count}} </td>

                          <td> {{$value->name_of_insured}} </td>

                          <td> {{$value->address_of_insured}} </td>

                          <td> {{$value->amt_of_transaction}} </td>
                          
                          <td> {{$value->bank_ac_no}} </td>

                          <td> {{$value->routing_no}} </td>

                          <td> {{$value->submitted_date}} </td>

                           <td> <a href="{{asset($value->attachment)}}" target="_blank"> Download </a></td>
                        </tr>

                        <?php $count++; ?>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
         </form>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
                  @include('admin.footer')

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
                   
@endsection
