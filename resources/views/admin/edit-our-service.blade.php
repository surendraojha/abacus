@extends('layouts.app')

@section('content')
 <div class="main-panel">
    <div class="content-wrapper">
      <form method='post' action = "{{ url('admin/update-our-services') }}">
      <div class="col-md-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title mb-0"> Our Services </h4>
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
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <textarea rows="10" name = "about_us" class="form-control">{{$our_service->about_us}}</textarea>
                     
                    </div>
                    @csrf

                  </div>

                  <div class="row ml-3 mb-3">
                      <div class="col-md-3">
                         <input type="submit" name="submit" value="Update" class="btn btn-primary">
                      </div>
                  </div>
                  
                </div>
              </div>
            </form>
            </div>
          </div>
          
        </div>

  @endsection
