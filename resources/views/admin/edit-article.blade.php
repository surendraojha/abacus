@extends('layouts.app')
@section('title')
Edit Article
@endsection
@section('content')
 <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
          <form action="{{url('admin/update-article')}}" method="post" enctype="multipart/form-data">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    
                    <h4 class="card-title"> Update Article </h4>
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
                    <table class="table">

                        <tr>
                          @csrf
                          <td> <input type="text" name="title" class="form-control" required="" value="{{ $article->title }}" placeholder="Title"> </td>

                        </tr>

                        <tr>
                          <td>
                            <textarea class="description" name="content">{{old('content',$article->content)}}</textarea>
                            <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                            <script>
                                tinymce.init({
                                    selector:'textarea.description',
                                    width: 900,
                                    height: 300
                                });
                            </script>

                            <input type="hidden" name="id" value="{{$article->id}}"></td>
                        </tr>

                        <tr>
                          <td>
                            <img src="{{  asset('public/uploads/'.$article->photo) }}" style="width:200px;height:200px; border-radius:0%;">
                          </td>
                        </tr>

                        <tr>
                          <td>
                              <input type="file" name = "photo">
                          </td>
                        </tr>
                        
                        <tr>
                          <td colspan="2"><input type="submit" name="submit" value="Update" class="btn btn-primary"></td>
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
       
@endsection
