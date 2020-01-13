@extends('layouts.app')
@section('title')
Create Article
@endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
          <form action="{{url('admin/store-article')}}" method="post" enctype="multipart/form-data">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <h4 class="card-title"> Create Article </h4>
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
                          <td> <input type="text" name="title" class="form-control" required="" placeholder="Title"> </td>

                        </tr>

                        <tr>
                          <td>
                            <textarea class="form-control" id="summary-ckeditor" name="content"></textarea>

                            
                          
                          </td>

                        </tr>

                        <tr>
                          <td> <input type="file" name="photo"> </td>
                        </tr>

                        <tr>
                          <td colspan="2">
                            <input type="submit" name="submit" value="Create" class="btn btn-primary"></td>
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
