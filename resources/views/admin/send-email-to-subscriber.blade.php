@extends('layouts.app')
  @section('title')
    All Subscriber
  @endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <form action="{{url('admin/post-email')}}" method="post" enctype="multipart/form-data">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Send Email </h4>
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

                      @csrf
                        <tr>
                          <th>  Mail Title </th>
                          <td>  <input type="text" name="title" required="" class="form-control" >  </td>

                        </tr>

                        <tr>
                          <th>  Content</th>
                          <td>  <textarea class="form-control" rows="12" name="content" required="">  </textarea></td>
                        </tr>

                        <tr>

                          <th>Attachment</th>
                          <td><input type="file" name="attachment"></td>

                        </tr>

                        <tr>
                          <td colspan="2"><input type="submit" name="submit" value="Send" class="btn btn-primary"></td>
                        </tr>

                        @foreach($check as $value)

                            <input type="hidden" name="check[]" value = {{$value}}>
                        @endforeach

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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@endsection
