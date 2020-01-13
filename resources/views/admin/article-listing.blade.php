@extends('layouts.app')

@section('title')
Article listing
@endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
                      <form action="{{url('admin/delete-article')}}" method="post">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Article Listing </h4>
                    <a href="{{url('admin/create-article')}}" class='btn btn-success'> Create Article </a>
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
                    <table class="table table-bordered">
 
                      <thead>
                        <tr>
                          <th><input type="checkbox" name="checks" id="checkall"></th>
                          <th> # </th>
                          <th> Title </th>

                          <th> Author </th>

                          <th> Created At </th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $count=1; ?>
                        @foreach($article as $value)
                        <tr>
                          <td> <input type="checkbox" name="check[]" value="{{ $value->id }}" 
                            class="checkSingle"> </td>
                          <td> {{$count}} </td>

                          <td> <a href="{{ url('admin/edit-article/'.$value->id) }}"> {{$value->title}}</a>  </td>

                          <td> {{$value->author}} </td>

                          <td> {{$value->created_at}} </td>
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
