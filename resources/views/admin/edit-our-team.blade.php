@extends('layouts.app')
@section('title')
Create Team Member
@endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
          <form action="{{url('admin/store-our-team')}}" method="post" enctype="multipart/form-data">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    
                    <h4 class="card-title"> Edit Team Member </h4>
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
                          <td> Full Name </td>
                          <td> <input type="text" name="full_name" class="form-control" required="" value="{{old('full_name',$our_team->full_name)}}"> </td>

                        </tr>

                        <tr>
                          <td> Photo </td>

                          <td> <input type="file" name="photo"> </td>

                        </tr>

                        <tr>
                          <td> Designation </td>
                          <td> <input type="text" name="designation" class="form-control" required="" value="{{ old('designation',$our_team->designation)}}"> </td>
                        </tr>

                        <tr>
                          <td> Email </td>

                          <td> <input type="email" name="email" class="form-control" required="" value="{{ old('email',$our_team->email)}}"> </td>

                        </tr>

                         <tr>
                          <td> Facebook </td>

                          <td> <input type="text" name="facebook" class="form-control"  value="{{ old('facebook',$our_team->facebook)}}"> </td>

                        </tr>

                         <tr>
                          <td> Twitter </td>

                          <td> <input type="text" name="twitter" class="form-control" value="{{ old('twitter',$our_team->twitter)}}"> </td>

                        </tr>

                         <tr>
                          <td> LinkedIn </td>

                          <td> <input type="text" name="in" class="form-control" value="{{ old('in',$our_team->in)}}"> </td>

                        </tr>

                        <tr>
                          <td colspan="2"><input type="submit" name="submit" value="Create" class="btn btn-primary"></td>
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
