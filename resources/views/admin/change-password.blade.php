@extends('layouts.app')
@section('title')
Change Password
@endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
          <form action="{{url('admin/post-change-password')}}" method="post">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    
                    <h4 class="card-title"> Change Password </h4>
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
                    <table class="table table-bordered">

                        <tr>
                          @csrf
                          <td> Current Password </td>
                          <td> <input type="password" name="password" class="form-control" required=""> </td>

                        </tr>

                        <tr>
                          <td> New Password </td>
                          <td> <input type="password" name="npassword" class="form-control" required=""> </td>
                        </tr>

                        <tr>
                          <td> Confirm Password </td>

                          <td> <input type="password" name="confirm_password" class="form-control" required=""> </td>

                        </tr>

                        <tr>
                          <td colspan="2"><input type="submit" name="submit" value="Change Password" class="btn btn-primary"></td>
                        </tr>

                    </table>
                  </div>
                </div>
              </div>
          </form>
          </div>
           @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
@endsection
